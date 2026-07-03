import 'package:flutter/material.dart';

class AttendanceKitApp extends ConsumerWidget {
  const AttendanceKitApp({super.key});

  @override
  Widget build(BuildContext context, WidgetRef ref) {
    return MaterialApp(
      title: 'AttendanceKit',
      theme: ThemeData(useMaterial3: true, colorSchemeSeed: const Color(0xFF2563EB), brightness: Brightness.dark),
      home: const PlaceholderRoute(label: 'AttendanceKit'),
    );
  }
}

class PlaceholderRoute extends StatelessWidget {
  const PlaceholderRoute({required this.label, super.key});
  final String label;
  @override
  Widget build(BuildContext context) {
    return Scaffold(body: Center(child: Text(label, style: Theme.of(context).textTheme.headlineSmall)));
  }
}
