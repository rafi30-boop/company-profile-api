# CLAUDE

Panduan penggunaan server backend untuk integrasi dengan agen AI.

## Setup

1. Pastikan `php`, `composer`, `node`, dan `psql` tersedia.
2. Jalankan `composer install`.
3. Copy `.env.example` menjadi `.env`.
4. Sesuaikan konfigurasi PostgreSQL di `.env`.
5. Jalankan `php artisan key:generate`.
6. Jalankan `php artisan migrate`.

## Auth API

Endpoint auth:

- `POST /api/register`
- `POST /api/login`
- `POST /api/logout`
- `GET /api/user`

Gunakan header `Authorization: Bearer {token}` untuk endpoint yang dilindungi.
