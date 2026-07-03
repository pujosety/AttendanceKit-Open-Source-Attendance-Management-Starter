import 'package:freezed_annotation/freezed_annotation.dart';

part 'attendance_model.freezed.dart';
part 'attendance_model.g.dart';

@freezed
class AttendanceModel with _$AttendanceModel {
  const factory AttendanceModel({
    required int id,
    required int userId,
    required String type,
    required DateTime createdAt,
    DateTime? checkedOutAt,
    double? latitude,
    double? longitude,
    String? address,
    String? photoUrl,
    String? status,
    String? note,
    String? ipAddress,
  }) = _AttendanceModel;

  factory AttendanceModel.fromJson(Map<String, dynamic> json) => _$AttendanceModelFromJson(json);
}
