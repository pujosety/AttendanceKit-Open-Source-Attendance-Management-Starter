import 'package:flutter/material.dart';

import 'core/constants/app_colors.dart';
import 'core/constants/app_strings.dart';

class AttendanceKitApp extends StatelessWidget {
  const AttendanceKitApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: AppStrings.appName,
      theme: AppColors.darkTheme,
      home: const SplashPage(),
    );
  }
}
