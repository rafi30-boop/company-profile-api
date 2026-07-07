# Frontend API Guide

Base URL:

- http://localhost:8000/api

## 1. Auth

### Register

- Method: POST
- Endpoint: /register
- Body:

```json
{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "secret123"
}
```

Success response:

```json
{
    "success": true,
    "message": "Register successful",
    "data": {
        "user": {
            "id": 1,
            "name": "John Doe",
            "email": "john@example.com",
            "created_at": "2026-07-07 12:00:00",
            "updated_at": "2026-07-07 12:00:00"
        },
        "token": "<access_token>"
    }
}
```

### Login

- Method: POST
- Endpoint: /login
- Body:

```json
{
    "email": "john@example.com",
    "password": "secret123"
}
```

Success response:

```json
{
    "success": true,
    "message": "Login successful",
    "data": {
        "user": {
            "id": 1,
            "name": "John Doe",
            "email": "john@example.com"
        },
        "token": "<access_token>"
    }
}
```

### Logout

- Method: POST
- Endpoint: /logout
- Header:

```http
Authorization: Bearer <token>
```

### Get Current User

- Method: GET
- Endpoint: /user
- Header:

```http
Authorization: Bearer <token>
```

---

## 2. Company Profiles

### List all company profiles

- Method: GET
- Endpoint: /company-profiles
- Header:

```http
Authorization: Bearer <token>
```

Success response:

```json
{
    "success": true,
    "message": "Company profile list retrieved successfully",
    "data": [
        {
            "id": 1,
            "title": "Company Name",
            "slug": "company-name",
            "description": "About company",
            "image_url": "https://example.com/image.jpg",
            "order": 1,
            "created_at": "2026-07-07 12:00:00",
            "updated_at": "2026-07-07 12:00:00"
        }
    ]
}
```

### Create company profile

- Method: POST
- Endpoint: /company-profiles
- Header:

```http
Authorization: Bearer <token>
```

- Body:

```json
{
    "title": "Company Name",
    "slug": "company-name",
    "description": "About company",
    "image_url": "https://example.com/image.jpg",
    "order": 1
}
```

### Show one company profile

- Method: GET
- Endpoint: /company-profiles/{id}
- Header:

```http
Authorization: Bearer <token>
```

### Update company profile

- Method: PUT
- Endpoint: /company-profiles/{id}
- Header:

```http
Authorization: Bearer <token>
```

- Body:

```json
{
    "title": "Updated Company Name",
    "slug": "updated-company-name",
    "description": "Updated description",
    "image_url": "https://example.com/new-image.jpg",
    "order": 2
}
```

### Delete company profile

- Method: DELETE
- Endpoint: /company-profiles/{id}
- Header:

```http
Authorization: Bearer <token>
```

---

## 3. General response format

### Success response

```json
{
    "success": true,
    "message": "...",
    "data": {}
}
```

### Error response

```json
{
    "success": false,
    "message": "..."
}
```

---

## 4. Notes for frontend

- Store the token returned by login/register.
- Send the token in the Authorization header for protected routes.
- Use slug values as URL-friendly identifiers.
- For now, the backend already supports auth and company profiles CRUD.
- The ERD-based tables such as about, services, portfolios, blogs, and settings are already created in the database, but their API endpoints can be added next if needed.

## 5. Checklist yang harus dilakukan frontend

1. Gunakan base URL:
    - http://localhost:8000/api

2. Saat register/login, simpan token dari response ke localStorage atau sessionStorage.

3. Untuk endpoint yang dilindungi, kirim header:
    - Authorization: Bearer <token>

4. Untuk CRUD company profiles, gunakan endpoint berikut:
    - GET /company-profiles
    - POST /company-profiles
    - GET /company-profiles/{id}
    - PUT /company-profiles/{id}
    - DELETE /company-profiles/{id}

5. Kirim request body dalam format JSON dan set header Content-Type: application/json.

6. Tangani response backend dengan pola:
    - success: true => tampilkan data
    - success: false => tampilkan message dari backend

7. Jika frontend berjalan di port berbeda dari backend, pastikan CORS sudah diatur.

8. Setelah login, arahkan user ke halaman dashboard/admin, lalu gunakan token untuk memanggil data perusahaan.
