import 'package:flutter/material.dart';

class LeaveListPage extends StatelessWidget {
  const LeaveListPage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: const Text('Leaves')),
      body: const Center(child: Text('Leave Requests')),
    );
  }
}
