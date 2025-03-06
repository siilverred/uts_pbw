# miniprojek

Tabungan Mahasiswa adalah sebuah aplikasi web berbasis PHP yang memungkinkan pengguna untuk menyimpan data tabungan mereka. Aplikasi ini memiliki sistem autentikasi dan peran pengguna (user & admin), serta fitur untuk menyimpan dan melihat data tabungan.

## Teknologi yang Digunakan
- PHP (Native, tanpa framework)
- MySQL (Database)
- HTML, CSS
- JavaScript (opsional, untuk interaksi tambahan)

## Struktur Proyek
Berikut adalah struktur utama proyek ini:

```
app/
├── controllers/       # Mengelola logika aplikasi
│   ├── AuthController.php  # Mengelola autentikasi pengguna
│   ├── HomeController.php  # Mengelola tampilan utama user & admin
│   ├── SavingController.php # Mengelola fitur tabungan
│
├── helpers/          # Kelas bantu
│   ├── AuthMiddleware.php  # Middleware untuk autentikasi
│
├── models/          # Kelas model untuk database
│   ├── Saving.php  # Model untuk data tabungan
│   ├── User.php  # Model untuk data pengguna
│
├── views/           # File tampilan (HTML + PHP)
│   ├── admin.php  # Tampilan admin
│   ├── home.php  # Tampilan user
│   ├── login.php  # Halaman login
│   ├── logout.php  # Halaman logout
│   ├── register.php  # Halaman registrasi
│   ├── save.php  # Halaman penyimpanan tabungan
│
config/
├── database.php  # Konfigurasi koneksi database

public/
├── css/
│   ├── style.css  # Gaya tampilan

routes/
├── web.php  # Routing aplikasi

index.php  # Entry point utama
.htaccess  # Konfigurasi Apache
README.md  # Dokumentasi proyek
```

## Instalasi dan Konfigurasi

### 1. Persiapan Lingkungan
Pastikan Anda sudah menginstal:
- PHP
- MySQL / MariaDB
- Web server (XAMPP, LAMP, atau lainnya)

### 2. Konfigurasi Database
1. Buat database baru di MySQL dengan nama `tabungan_db`.
2. Import file `tabungan_db.sql` ke dalam database Anda.
3. Edit file `config/database.php` untuk menyesuaikan kredensial database Anda.

### 3. Menjalankan Aplikasi
1. Jalankan server lokal (misal XAMPP dengan Apache dan MySQL aktif).
2. Akses aplikasi melalui browser dengan membuka:
   ```
   http://localhost/nama-folder-proyek/
   ```

## Fitur Utama
- **User** dapat:
  - Login, register, dan logout.
  - Menyimpan tabungan dan melihat riwayat tabungan mereka.
- **Admin** dapat:
  - Melihat semua pengguna.
  - Melihat semua tabungan pengguna.

## Penggunaan
1. **Registrasi**: Buat akun melalui halaman registrasi.
2. **Login**: Masuk ke akun Anda untuk mengakses fitur.
3. **Menyimpan Tabungan**: Masukkan jumlah uang yang disimpan beserta catatan.
4. **Admin Dashboard**: Admin dapat mengakses halaman admin untuk melihat data pengguna dan tabungan mereka.
