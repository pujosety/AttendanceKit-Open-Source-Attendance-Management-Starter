---
title: "AttendanceKit"
description: "A generic, clean, production-ready attendance starter kit."
---

<div align="center">

# AttendanceKit

![Flutter](https://img.shields.io/badge/Flutter-3.x-02569B?logo=flutter)
![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.3%2B-777BB4?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?logo=mysql)
![Docker](https://img.shields.io/badge/Docker-Enable-2496ED?logo=docker)
![Riverpod](https://img.shields.io/badge/State_Riverpod-2.x-40C4FF?logo=flutter)

### Build once. Use everywhere.

[Features](#features) · [Installation](#installation) · [API](#api) · [Structure](#structure) · [Roadmap](#roadmap) · [Contributing](#contributing)

</div>

---

## About

**AttendanceKit** is an open-source attendance starter kit built with **Flutter** and **Laravel**.
It provides a clean, generic starting point for attendance apps — without carrying any legacy branding.

This repo delivers a working mobile frontend, REST API backend, database schema, documentation,
docker environment, and CI helpers.

## Features

- Mobile: Login, Dashboard, Check In, Check Out, Daily Report, Attendance History, Leave Request, Calendar, Notifications, Profile, Settings
- Attendance: GPS Location, Camera Verification, Photo Upload, Offline Queue Architecture, API Synchronization
- Backend: Authentication, User CRUD, Attendance API, Daily Report API, Leave API, Notification API, Profile API
- Infra: Docker Compose, Postman Collection, Swagger/OpenAPI, GitHub Actions

## Screenshots / Demo

> Place your screenshots and GIF demo in `assets/`. Suggested filenames: `screenshot-login.png`, `screenshot-dashboard.png`, `demo-checkin.gif`

| Screenshot | Demo |
|------------|------|
| ![Login](assets/screenshot-login.png) | ![Demo](assets/demo-checkin.gif) |

## Installation

### Requirements

- Flutter SDK
- Docker / Docker Compose
- PHP 8.3+
- MySQL 8.x
- Composer 2.x
- Node.js / npm

### Quick Start

- Clone repo
- Copy `.env.example` to `.env`
- Run `docker compose up -d` (optional)
- Run backend migrations and seeders
- Run `flutter pub get` on mobile
- Build and run mobile

## API

API is organized around REST.

### Base URL

```
http://localhost:8000/api/v1
```

### Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| POST   | /auth/login | Login |
| POST   | /auth/logout | Logout |
| GET    | /user | Current user |
| GET    | /attendances | Attendance history |
| POST   | /attendances/check-in | Check in |
| POST   | /attendances/check-out | Check out |
| GET    | /reports | Daily reports |
| POST   | /reports | Create report |
| GET    | /leaves | Leave list |
| POST   | /leaves | Create leave |
| GET    | /notifications | Notification list |
| PATCH  | /profile | Update profile |
| GET    | /settings | App settings |

For full API details, see [`docs/api.md`](docs/api.md).

## Structure

```
attendance-kit/
├── backend/
│   └── ...
├── mobile/
│   └── ...
├── database/
│   ├── schema.sql
│   ├── seed.sql
│   └── erd.png
├── docs/
│   ├── installation.md
│   ├── api.md
│   ├── architecture.md
│   ├── folder-structure.md
│   ├── roadmap.md
│   └── screenshots/
├── postman/
│   └── attendance-kit.postman_collection.json
├── assets/
├── docker-compose.yml
├── .env.example
└── README.md
```

## Roadmap

- V1: Core attendance flow + clean architecture
- V2: Multi-tenant Organization support
- V3: Analytics Dashboard Web Admin
- V4: Biometric integration

## Contributing

Contributions are welcome. Please open an issue before submitting large changes.

## License

MIT License. See [`LICENSE`](LICENSE).
