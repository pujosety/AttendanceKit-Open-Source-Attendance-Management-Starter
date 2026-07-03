import 'package:flutter/material.dart';

class AttendanceDashboardPage extends StatelessWidget {
  const AttendanceDashboardPage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Attendance')),
      body: const Center(child: Text('Attendance Dashboard')),
    );
  }
}
