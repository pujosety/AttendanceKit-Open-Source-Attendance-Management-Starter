import 'package:freezed_annotation/freezed_annotation.dart';

part 'leave_model.freezed.dart';
part 'leave_model.g.dart';

@freezed
class LeaveModel with _$LeaveModel {
  const factory LeaveModel({
    required int id,
    required int userId,
    required String type,
    required DateTime startDate,
    DateTime? endDate,
    required String reason,
    String? attachmentUrl,
    required String status,
    DateTime? reviewedAt,
  }) = _LeaveModel;

  factory LeaveModel.fromJson(Map<String, dynamic> json) => _$LeaveModelFromJson(json);
}
