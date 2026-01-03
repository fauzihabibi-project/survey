# Laravel Survey Application

Aplikasi ini dibangun menggunakan **Laravel**, **Livewire**, dan **Bootstrap**.  
Panduan berikut menjelaskan langkah-langkah lengkap untuk menginstall dan menjalankan aplikasi di lokal.

---

## 📌 Persyaratan Sistem

Pastikan software berikut sudah terinstall:

- PHP ≥ 8.2
- Composer
- MySQL / MariaDB
- Node.js & NPM (opsional, jika pakai asset build)
- Web Server (Laragon / XAMPP / Laravel built-in server)

---

## 1️⃣ Clone / Download Project

Jika dari GitHub:

git clone https://github.com/username/nama-project.git
cd nama-project
Atau jika sudah punya folder project, langsung masuk ke direktori tersebut.

2️⃣ Install Dependency Laravel
Jalankan perintah berikut:


composer install

Tunggu hingga proses selesai.

3️⃣ Copy & Konfigurasi File .env
Salin file .env.example menjadi .env:

cp .env.example .env

Lalu buka file .env dan sesuaikan database:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=survey
DB_USERNAME=root
DB_PASSWORD=

Pastikan database sudah dibuat di MySQL.

4️⃣ Generate Application Key

php artisan key:generate
5️⃣ Buat Storage Link (Wajib untuk Upload Gambar)

php artisan storage:link
Ini diperlukan agar foto villa bisa ditampilkan.

6️⃣ Jalankan Migration Database

php artisan migrate
Jika ingin reset database:


7️⃣Jalankan Aplikasi
Gunakan Laravel built-in server:

php artisan serve
Akses di browser:


http://127.0.0.1:8000
Atau jika menggunakan Laragon:

http://nama-project.test
