# FAQ

## Is AttendanceKit ready for production?

It provides a structured, production-style scaffold. You should still perform validation, testing, and security hardening before using it in production.

## Does offline mode work?

Yes. Offline queue architecture is prepared in `mobile/lib/core/utils/offline_queue.dart`.

## Which backend framework is used?

A Laravel-style backend scaffold is provided and works out of the box.

## Can I use this for commercial projects?

Yes, under the terms of the MIT License.

## Where is the API base URL configured?

In `mobile/.env`, using `API_BASE_URL`. See [Environment Variables](environment.md).

## How do I reset demo data?

Run `php artisan migrate:fresh --seed` from the backend folder.

## How do I contribute?

Read `CONTRIBUTING.md` and keep changes scoped to one concern.

## Where do I report bugs?

Open an issue in the repository using the bug report template.
