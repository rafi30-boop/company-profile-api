# Struktur Folder Backend

Struktur yang direkomendasikan untuk project Laravel Company Profile API:

```
app
 ├── Enums
 ├── Helpers
 ├── Http
 │     ├── Controllers
 │     │      └── Api
 │     ├── Middleware
 │     ├── Requests
 │     └── Resources
 ├── Interfaces
 ├── Models
 ├── Repositories
 ├── Services
 └── Traits
```

Penjelasan singkat:

- `app/Http/Controllers/Api`: controller API.
- `app/Http/Requests`: validasi request.
- `app/Http/Resources`: transformer response.
- `app/Services`: logika bisnis.
- `app/Repositories`: akses data.
- `app/Interfaces`: kontrak service/repository.
- `app/Enums`: konstanta terstruktur.
- `app/Traits`: reusable behavior.
