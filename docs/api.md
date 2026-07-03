# API Documentation

Base URL: `http://localhost:8000/api/v1`

Note: some routes require an active `auth:sanctum` token.

 Endpoint|Method|Auth|Description
---|---|---|---
 /auth/login|POST|No|Login
 /auth/logout|POST|Yes|Logout
 /user|GET|Yes|Current user profile
 /attendances|GET|Yes|History
 /attendances/check-in|POST|Yes|Check in with GPS / photo
 /attendances/check-out|POST|Yes|Check out
 /reports|GET|Yes|List daily reports
 /reports|POST|Yes|Create daily report
 /leaves|GET|Yes|List leaves
 /leaves|POST|Yes|Create leave
 /notifications|GET|Yes|List notifications
 /notifications/{id}/read|PATCH|Yes|Mark notification read
 /profile|GET|Yes|Get profile
 /profile|PATCH|Yes|Update profile
 /settings|GET|Yes|App settings
