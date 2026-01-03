<p align="center">
  <a href="#" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300">
  </a>
</p>

<h2 align="center">Laravel Survey Application</h2>

<p align="center">
Aplikasi ini dibangun menggunakan Laravel, Livewire, dan Bootstrap.  
Panduan berikut menjelaskan langkah-langkah lengkap untuk menginstall dan menjalankan aplikasi di lokal.
</p>

---



## 🛠 Teknologi yang Digunakan

- **Laravel 12**
- **Livewire v3**
- **MySQL / MariaDB**
- **Blade Template**
- **SweetAlert2**
- **Bootstrap**

---


---

## ⚙️ Cara Instalasi Project
1. **Install composer**
   ```bash
    composer install
Tunggu hingga proses selesai.

1. **Clone repository**
   ```bash
   git clone https://github.com/username/nama-project.git
   cd nama-project
2. **Install dependencies**
   ```bash
   composer install
3. **Copy file environment**
   ```bash
   cp .env.example .env
4. **Generate key**
   ```bash
   php artisan key:generate
5. **Atur konfigurasi database di file .env**
   ```bash
   DB_DATABASE=e-commerce
   DB_USERNAME=root
   DB_PASSWORD=
6. **Jalankan migrasi**
   ```bash
   php artisan migrate
6. **Link storage**
   ```bash
   php artisan storage:link


---

## Cara Menjalankan Project

1. **Jalankan server Laravel**
   ```bash
   php artisan serve

1. **Akses di browser**
   ```bash
   http://127.0.0.1:8000
   

