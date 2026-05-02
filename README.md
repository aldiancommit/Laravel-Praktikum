# 🎓 Student Management System

## 🚀 Langkah-Langkah Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/aldiancommit/Laravel-Praktikum
cd Laravel-Praktikum
```

### 2. Install Dependensi PHP
```bash
composer install
```

### 3. Install & Kompilasi Asset Frontend
```bash
npm install
npm run dev
```

### 4. Konfigurasi Environment 
```bash
cp .env.example .env
```

### Sesuaikan konfigurasi database di file .env:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Migrasi & Seeding Database
```bash
php artisan migrate --seed
```

### 7. Jalankan Server Lokal
```bash
php artisan serve
Buka di browser: http://127.0.0.1:8000
```

### 📂 Struktur Utama Proyek
    1. Migration: database/migrations/ (Struktur tabel students & majors)
    2. Model: app/Models/ (Relasi HasMany & BelongsTo)
    3. Controller: app/Http/Controllers/DashboardController.php
    4. View: resources/views/dashboard.blade.php

