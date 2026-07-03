import 'package:freezed_annotation/freezed_annotation.dart';

part 'notification_model.freezed.dart';
part 'notification_model.g.dart';

@freezed
class NotificationModel with _$NotificationModel {
  const factory NotificationModel({
    required int id,
    required int userId,
    required String title,
    required String body,
    Map<String, dynamic>? payload,
    DateTime? readAt,
    required DateTime createdAt,
  }) = _NotificationModel;

  factory NotificationModel.fromJson(Map<String, dynamic> json) => _$NotificationModelFromJson(json);
}
