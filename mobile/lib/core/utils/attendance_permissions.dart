import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:flutter_local_notifications/flutter_local_notifications.dart';
import 'package:geolocator/geolocator.dart';
import 'package:image_picker/image_picker.dart';
import 'package:connectivity_plus/connectivity_plus.dart';
import 'package:permission_handler/permission_handler.dart';

class AttendancePermissions {
  const AttendancePermissions();

  Future<bool> requestLocation() async {
    var status = await Permission.location.status;
    if (!status.isGranted) status = await Permission.location.request();
    return status.isGranted;
  }

  Future<bool> requestCamera() async {
    var status = await Permission.camera.status;
    if (!status.isGranted) status = await Permission.camera.request();
    return status.isGranted;
  }

  Future<bool> requestNotifications() async {
    var status = await Permission.notification.status;
    if (!status.isGranted) status = await Permission.notification.request();
    return status.isGranted;
  }

  Future<bool> requestMedia() async {
    var status = await Permission.photos.status;
    if (!status.isGranted) status = await Permission.photos.request();
    return status.isGranted;
  }

  Future<Position?> getBestPosition() async {
    await requestLocation();
    try {
      return await Geolocator.getCurrentPosition(desiredAccuracy: LocationAccuracy.best);
    } catch (_) {
      return null;
    }
  }

  Future<void> requestExactAlarmIfNeeded() async {
    if (await Permission.scheduleExactAlarm.isDenied) {
      await Permission.scheduleExactAlarm.request();
    }
  }
}
