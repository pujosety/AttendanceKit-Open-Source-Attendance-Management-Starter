# Database Schema

## Tables

### users
- id
- name
- email
- email_verified_at
- password
- remember_token
- timestamps

### attendances
- id
- user_id
- check_in_at
- check_out_at
- latitude
- longitude
- check_in_photo
- check_out_photo
- status
- timestamps

### leaves
- id
- user_id
- start_date
- end_date
- type
- reason
- status
- timestamps

### reports
- id
- user_id
- date
- summary
- timestamps

### notifications
- id
- user_id
- title
- body
- type
- read_at
- timestamps

### settings
- id
- user_id
- key
- value
- timestamps

## ERD
See `database/ERD.md` for overview.
