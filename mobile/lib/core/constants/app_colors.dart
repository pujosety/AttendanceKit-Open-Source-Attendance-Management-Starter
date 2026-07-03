import 'package:flutter/material.dart';

class AppColors {
  static const seed = Color(0xFF2563EB);
  static const background = Color(0xFF0F172A);
  static const surface = Color(0xFF111827);
  static const border = Color(0xFF334155);
  static const textPrimary = Color(0xFFF8FAFC);
  static const textSecondary = Color(0xFFCBD5E1);

  static ThemeData get darkTheme => ThemeData(
        useMaterial3: true,
        colorSchemeSeed: seed,
        brightness: Brightness.dark,
        scaffoldBackgroundColor: background,
      );
}
