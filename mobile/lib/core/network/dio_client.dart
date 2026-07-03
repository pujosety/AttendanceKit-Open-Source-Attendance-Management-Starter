import 'package:dio/dio.dart';
import 'package:flutter_dotenv/flutter_dotenv.dart';

class DioClient {
  late final Dio dio;

  DioClient() {
    dio = Dio(BaseOptions(
      baseUrl: dotenv.env['API_BASE_URL'] ?? 'http://localhost:8000/api/v1',
      connectTimeout: const Duration(seconds: 30),
      receiveTimeout: const Duration(seconds: 60),
    ));

    dio.interceptors.add(InterceptorsWrapper(
      onRequest: (options, handler) {
        // Token injection is handled by auth provider
        return handler.next(options);
      },
      onError: (error, handler) {
        return handler.next(error);
      },
    ));
  }
}
