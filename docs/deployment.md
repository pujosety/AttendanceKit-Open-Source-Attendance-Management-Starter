# Deployment Guide

## Backend
- Use Docker Compose for local deployment
- For production, ensure HTTPS termination, DB backups, and queue workers

## Mobile
- Build release APK/AAB with `flutter build apk` or `flutter build appbundle`
- Configure signing and release keystore
- Ensure backend URL is production-ready

## Environment
- Do not copy `.env` into version control
- Use secrets manager for production values
