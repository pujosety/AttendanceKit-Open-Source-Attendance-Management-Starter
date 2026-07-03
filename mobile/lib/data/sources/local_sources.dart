import 'dart:convert';
import 'package:attendance_kit/core/network/dio_client.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';

class AuthLocalSource {
  final FlutterSecureStorage storage;

  AuthLocalSource(this.storage);

  static const _keyToken = 'attendance_kit_token';

  Future<void> saveToken(String token) async {
    await storage.write(key: _keyToken, value: token);
  }

  Future<String?> token() async {
    final value = await storage.read(key: _keyToken);
    return value;
  }

  Future<void> clear() async {
    await storage.delete(key: _keyToken);
  }
}

class OfflineQueueSource {
  final FlutterSecureStorage storage;

  OfflineQueueSource(this.storage);

  static const _keyQueue = 'attendance_kit_offline_queue';

  Future<List<Map<String, dynamic>>> queue() async {
    final raw = await storage.read(key: _keyQueue);
    if (raw == null) return const [];
    final values = List<dynamic>.from(jsonDecode(raw));
    return values.cast<Map<String, dynamic>>().toList();
  }

  Future<void> enqueue(Map<String, dynamic> item) async {
    final current = await queue();
    current.add(item);
    await storage.write(key: _keyQueue, value: jsonEncode(current));
  }

  Future<void> clear() async {
    await storage.delete(key: _keyQueue);
  }
}
