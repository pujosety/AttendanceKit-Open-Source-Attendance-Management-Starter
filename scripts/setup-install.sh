#!/usr/bin/env bash
set -e

cp backend/.env.example backend/.env
cp mobile/.env.example mobile/.env

docker compose up -d

cd backend
composer install
php artisan key:generate
php artisan migrate --seed

cd ../mobile
flutter pub get

echo 'Setup complete.'
