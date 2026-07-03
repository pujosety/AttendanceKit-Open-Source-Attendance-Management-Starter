import 'dart:convert';
import 'package:flutter/foundation.dart';

class OfflineQueue {
  final List<QueuedAction> actions;
  const OfflineQueue({required this.actions});

  OfflineQueue add(QueuedAction action) {
    return OfflineQueue(actions: [...actions, action]);
  }

  OfflineQueue remove(int id) {
    return OfflineQueue(actions: actions.where((a) => a.id != id).toList());
  }

  Map<String, dynamic> toJson() {
    return {
      'actions': actions.map((a) => a.toJson()).toList(),
    };
  }

  factory OfflineQueue.fromJson(Map<String, dynamic> json) {
    final list = List<dynamic>.from(json['actions'] ?? const []);
    return OfflineQueue(
      actions: list.map((e) => QueuedAction.fromJson(Map<String, dynamic>.from(e))).toList(),
    );
  }
}

class QueuedAction {
  final int id;
  final String type;
  final Map<String, dynamic> payload;
  final DateTime createdAt;

  const QueuedAction({required this.id, required this.type, required this.payload, required this.createdAt});

  Map<String, dynamic> toJson() => {'id': id, 'type': type, 'payload': payload, 'createdAt': createdAt.toIso8601String()};

  factory QueuedAction.fromJson(Map<String, dynamic> json) {
    return QueuedAction(id: json['id'], type: json['type'], payload: Map<String, dynamic>.from(json['payload'] ?? {}), createdAt: DateTime.parse(json['createdAt']));
  }
}
