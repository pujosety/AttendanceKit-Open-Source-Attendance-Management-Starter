import 'dart:convert';

import 'package:attendance_kit/core/network/dio_client.dart';
import 'package:attendance_kit/data/models/attendance_model.dart';
import 'package:attendance_kit/data/models/auth_response.dart';
import 'package:attendance_kit/data/models/leave_model.dart';
import 'package:attendance_kit/data/models/login_request.dart';
import 'package:attendance_kit/data/models/notification_model.dart';
import 'package:attendance_kit/data/models/report_model.dart';
import 'package:attendance_kit/data/models/user_model.dart';
import 'package:dio/dio.dart';

class AttendanceKitService {
  final DioClient dioClient;

  AttendanceKitService(this.dioClient);

  Future<AuthResponse> login(LoginRequest payload) async {
    final response = await dioClient.dio.post('/auth/login', data: payload.toJson());
    return AuthResponse.fromJson(Map<String, dynamic>.from(response.data['data']));
  }

  Future<void> logout() async {
    await dioClient.dio.post('/auth/logout');
  }

  Future<UserModel> me() async {
    final response = await dioClient.dio.get('/user');
    return UserModel.fromJson(Map<String, dynamic>.from(response.data['data']));
  }

  Future<List<AttendanceModel>> attendances() async {
    final response = await dioClient.dio.get('/attendances');
    final list = List<Map<String, dynamic>>.from(response.data['data']);
    return list.map((e) => AttendanceModel.fromJson(e)).toList();
  }

  Future<AttendanceModel> checkIn(Map<String, dynamic> payload) async {
    final response = await dioClient.dio.post('/attendances/check-in', data: payload);
    return AttendanceModel.fromJson(Map<String, dynamic>.from(response.data['data']));
  }

  Future<AttendanceModel> checkOut(Map<String, dynamic> payload) async {
    final response = await dioClient.dio.post('/attendances/check-out', data: payload);
    return AttendanceModel.fromJson(Map<String, dynamic>.from(response.data['data']));
  }

  Future<List<ReportModel>> reports() async {
    final response = await dioClient.dio.get('/reports');
    final list = List<Map<String, dynamic>>.from(response.data['data']);
    return list.map((e) => ReportModel.fromJson(e)).toList();
  }

  Future<ReportModel> createReport(Map<String, dynamic> payload) async {
    final response = await dioClient.dio.post('/reports', data: payload);
    return ReportModel.fromJson(Map<String, dynamic>.from(response.data['data']));
  }

  Future<List<LeaveModel>> leaves() async {
    final response = await dioClient.dio.get('/leaves');
    final list = List<Map<String, dynamic>>.from(response.data['data']);
    return list.map((e) => LeaveModel.fromJson(e)).toList();
  }

  Future<LeaveModel> createLeave(Map<String, dynamic> payload) async {
    final response = await dioClient.dio.post('/leaves', data: payload);
    return LeaveModel.fromJson(Map<String, dynamic>.from(response.data['data']));
  }

  Future<List<NotificationModel>> notifications() async {
    final response = await dioClient.dio.get('/notifications');
    final list = List<Map<String, dynamic>>.from(response.data['data']);
    return list.map((e) => NotificationModel.fromJson(e)).toList();
  }

  Future<NotificationModel> markNotificationRead(String id) async {
    final response = await dioClient.dio.patch('/notifications/$id/read');
    return NotificationModel.fromJson(Map<String, dynamic>.from(response.data['data']));
  }

  Future<Map<String, dynamic>> settings() async {
    final response = await dioClient.dio.get('/settings');
    return Map<String, dynamic>.from(response.data['data']);
  }
}
