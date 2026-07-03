# AttendanceKit-Open-Source-Attendance-Management-Starter

![License](https://img.shields.io/badge/License-MIT-green)

Modern open-source attendance management starter built with Flutter and Laravel. GPS check-in, camera verification, reports, leave management, REST API, and production-ready architecture. Designed for companies, schools, and organizations.

---

 AttendanceKit

> Modern open-source attendance management starter built with **Flutter** and **Laravel**. GPS check-in, camera verification, reports, leave management, and a production-ready REST API.

`AttendanceKit` is a full-stack starter for companies, schools, and organizations that want a real attendance workflow — not another toy login demo. It combines a Flutter mobile app with a Laravel backend, containerized setup with Docker, and documentation ready for production deployment.

---

## What problem does this solve?

Manual attendance is slow. Photo-only check-in is easy to fake. Split mobile/backend teams often rebuild the same modules again and again.

This repo solves that by giving you a ready-made, testable system with location-based check-in, camera verification, leave workflows, reporting, notifications, and an API you can extend.

---

## What you get

- GPS-aware attendance with location checks
- Camera verification and photo upload
- Daily and historical attendance reporting
- Leave request and approval workflow
- Notification system
- REST API with Postman collection
- Docker-based local setup
- CI workflows for mobile and backend
- Documentation and ergd/schema references

---

## Tech Stack

| Area | Tooling |
|---|---|
| Mobile | Flutter |
| Backend | Laravel / PHP |
| Database | MySQL |
| Packaging | Docker Compose |
| CI | GitHub Actions |

---

## Quick Start

```bash
git clone https://github.com/pujosety/AttendanceKit-Open-Source-Attendance-Management-Starter.git
cd AttendanceKit-Open-Source-Attendance-Management-Starter
docker compose up
```

For detailed setup:

- [Installation Guide](docs/installation.md)
- [Environment Configuration](docs/environment.md)
- [Deployment Guide](docs/deployment.md)

---

## Project Structure

| Path | Purpose |
|---|---|
| `mobile/` | Flutter app |
| `backend/` | Laravel API app |
| `database/` | Schema, ERD, setup docs |
| `docs/` | Full documentation |
| `postman/` | API collection |
| `assets/` | Demo screenshots and GIFs |

---

## API

See [docs/api.md](docs/api.md) and [docs/openapi.yaml](docs/openapi.yaml).

---

## Roadmap

See [docs/roadmap.md](docs/roadmap.md).

---

## Contributing

We welcome clean, focused contributions. Please read [CONTRIBUTING.md](CONTRIBUTING.md) before submitting pull requests.

---

## License

MIT
