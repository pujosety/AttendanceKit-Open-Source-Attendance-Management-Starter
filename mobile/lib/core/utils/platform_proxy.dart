import 'dart:io';
import 'package:flutter_riverpod/flutter_riverpod.dart';
import 'package:geolocator/geolocator.dart';
import 'package:image_picker/image_picker.dart';
import 'package:connectivity_plus/connectivity_plus.dart';
import 'package:flutter_local_notifications/flutter_local_notifications.dart';
import '../core/constants/app_routes.dart';
import 'package:go_router/go_router.dart';

class PlatformProxy {
  const PlatformProxy();
  Future<File?> pickPhoto({ImageSource source = ImageSource.camera}) async {
    final picker = ImagePicker();
    final x = await picker.pickImage(source: source, maxWidth: 1280, imageQuality: 85);
    return x != null ? File(x.path) : null;
  }

  Future<bool> requestLocationPermission() async {
    final status = await Geolocator.checkPermission();
    if (status == LocationPermission.denied) {
      await Geolocator.requestPermission();
    }
    return await Geolocator.isLocationServiceEnabled();
  }

  Future<Position?> currentPosition() async {
    final enabled = await requestLocationPermission();
    if (!enabled) return null;
    return await Geolocator.getCurrentPosition(desiredAccuracy: LocationAccuracy.best);
  }

  Future<bool> hasConnection() async {
    final r = await Connectivity().checkConnectivity();
    return r.contains(ConnectivityResult.mobile) || r.contains(ConnectivityResult.wifi) || r.contains(ConnectivityResult.ethernet);
  }

  Future<void> initializeNotifications(WidgetRef ref) async {
    final flutterLocalNotificationsPlugin = FlutterLocalNotificationsPlugin();
    const initializationSettings = InitializationSettings(
      android: AndroidInitializationSettings('@mipmap/ic_launcher'),
    );
    await flutterLocalNotificationsPlugin.initialize(initializationSettings);
  }

  RouterConfig<Object> buildRouter(List<GoRoute> routes) {
    return GoRouter(
      initialLocation: AppRoute.splash,
      routes: routes,
    );
  }
}

final platformProxyProvider = Provider<PlatformProxy>((ref) => const PlatformProxy());
