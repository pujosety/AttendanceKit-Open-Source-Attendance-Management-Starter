import 'package:freezed_annotation/freezed_annotation.dart';

part 'report_model.freezed.dart';
part 'report_model.g.dart';

@freezed
class ReportModel with _$ReportModel {
  const factory ReportModel({
    required int id,
    required int userId,
    required DateTime date,
    required String title,
    required String content,
    int? attendanceId,
  }) = _ReportModel;

  factory ReportModel.fromJson(Map<String, dynamic> json) => _$ReportModelFromJson(json);
}
