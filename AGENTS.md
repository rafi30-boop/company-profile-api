# AGENTS

Dokumentasi ini ditujukan untuk agen AI yang membantu pengembangan backend Company Profile API.

## Tujuan

- Memastikan agen memahami struktur folder.
- Menjaga konvensi coding dan arsitektur yang konsisten.
- Memberi tahu agen tentang fitur yang sudah diimplementasikan.

## Direktori penting

- `app/Http/Controllers/Api`
- `app/Http/Requests`
- `app/Http/Resources`
- `app/Services`
- `app/Repositories`
- `app/Interfaces`
- `app/Enums`
- `routes/api.php`

## Konvensi

- Gunakan service dan repository pattern.
- Jangan simpan logika bisnis di controller.
- Gunakan request validation untuk semua endpoint input.
- Gunakan API Resource untuk response konsisten.
