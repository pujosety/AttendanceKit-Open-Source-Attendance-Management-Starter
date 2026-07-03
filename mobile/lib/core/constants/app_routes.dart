import 'package:flutter/material.dart';

class AppRoutes {
  const AppRoutes();

  static const splash = '/';
  static const login = '/login';
  static const dashboard = '/dashboard';
  static const history = '/history';
  static const leave = '/leave';
  static const report = '/report';
  static const notification = '/notification';
  static const calendar = '/calendar';
  static const profile = '/profile';
  static const settings = '/settings';

  static Map<String, WidgetBuilder> get map => const {};
}
