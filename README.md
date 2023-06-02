# TicketyBus

## Tim Developer
1. Kurnia Cahya Febryanto (5025201073)
2. Rere Arga Dewanata (5025201078)

## Deskripsi Aplikasi

TicketyBus adalah aplikasi berbasis web yang dirancang untuk menyederhanakan proses pemesanan tiket bus secara online. Dibangun dengan menggunakan framework PHP CodeIgniter 4, aplikasi ini menyediakan berbagai fitur yang memungkinkan pengguna untuk mencari, memesan, dan membayar tiket secara online, sementara juga memudahkan manajemen dalam melacak pemesanan, menjalankan operasi sehari-hari, dan menghasilkan laporan penjualan tiket.

## Fitur Aplikasi

Fitur yang disediakan oleh aplikasi ini adalah:

- **Booking Online**: Memungkinkan pengguna untuk melakukan pemesanan tiket secara online dengan memilih kursi dan mengisi detail identitas.
- **Pembayaran**: Mengizinkan pengguna untuk mengisi detail pembayaran dan mengupload bukti pembayaran.
- **Manajemen Pemesanan**: Mengizinkan admin untuk melacak dan mengelola semua pemesanan.
- **Cetak, Unduh E-Tiket**: Setelah pembayaran diverifikasi, sistem akan menghasilkan e-tiket yang bisa dicetak atau diunduh oleh pengguna.
- **Batalkan Tiket**: Memberikan pengguna kemampuan untuk membatalkan pemesanan tiket mereka.
- **Cek Tiket**: Mengizinkan pengguna untuk memeriksa status pemesanan tiket mereka.
- **Ganti Kata Sandi dan Kelola Profil**: Pengguna dapat mengubah kata sandi mereka dan memperbarui detail profil mereka.
- **Manajemen Bus, Manajemen Rute, dan Manajemen Jadwal Bus**: Admin dapat mengelola semua aspek yang berkaitan dengan bus, rute, dan jadwal.
- **Laporan Penjualan Tiket**: Menghasilkan laporan penjualan tiket untuk analisis lebih lanjut.
- **Manajemen Pengguna Sistem**: Mengizinkan admin untuk mengelola pengguna sistem dan memberikan hak akses yang sesuai.
- **Daftar Pelanggan Terdaftar**: Menyediakan daftar semua pelanggan yang terdaftar di sistem.
- **Pencarian**: Memungkinkan pengguna untuk mencari informasi tertentu di dalam sistem.

## Mulai

Berikut adalah instruksi untuk mendapatkan salinan proyek ini dan menjalankannya di lingkungan lokal Anda.

### Prasyarat

- Web Server (Apache/Nginx)
- PHP versi >=7.2
- Database Server (MySQL)
- Composer

### Instalasi

Clone repositori ini dengan menjalankan perintah berikut di terminal:

```bash
git clone https://github.com/kurniacf/TicketyBus.git
```

Pindah ke direktori proyek:
```bash
cd TicketyBus
```
Install dependensi menggunakan Composer:
```bash
composer install
```
Ubah pengaturan database di file app/Config/Database.php sesuai dengan pengaturan database Anda.
Jalankan migrasi database:
```bash
php spark migrate
```
Jalankan server pengembangan:
```bash
php spark serve
```
Buka http://localhost:8080 di browser Anda.