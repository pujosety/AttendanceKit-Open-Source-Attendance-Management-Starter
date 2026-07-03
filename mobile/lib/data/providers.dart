import 'package:flutter_riverpod/flutter_riverpod.dart';
import 'package:attendance_kit/core/network/dio_client.dart';
import 'package:attendance_kit/data/services/attendance_kit_service.dart';
import 'package:attendance_kit/data/sources/local_sources.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';

final dioClientProvider = Provider<DioClient>((ref) => DioClient());

final serviceProvider = Provider<AttendanceKitService>((ref) {
  return AttendanceKitService(ref.read(dioClientProvider));
});

final secureStorageProvider = Provider<FlutterSecureStorage>((ref) => const FlutterSecureStorage());

final authLocalSourceProvider = Provider<AuthLocalSource>((ref) {
  return AuthLocalSource(ref.read(secureStorageProvider));
});

final offlineQueueSourceProvider = Provider<OfflineQueueSource>((ref) {
  return OfflineQueueSource(ref.read(secureStorageProvider));
});
