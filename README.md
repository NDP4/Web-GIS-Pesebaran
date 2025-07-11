# Web GIS Persebaran Peternakan Bantul

![Preview](images/MOCKUP.png)

Sebuah aplikasi web berbasis Geographic Information System (GIS) yang menampilkan data persebaran peternakan di Kabupaten Bantul, Yogyakarta. Aplikasi ini menyajikan informasi lokasi peternakan beserta data pendukung seperti jumlah buruh peternakan per kapanewon.

## 🚀 Fitur Utama

- 🗺️ **Peta Interaktif**: Menampilkan lokasi peternakan dengan marker berbeda berdasarkan kategori
- 📊 **Data Sebaran**: Visualisasi data jumlah buruh peternakan per kapanewon
- 👥 **Admin Panel**: Manajemen data peternakan dan data statistik
- 🔍 **Pencarian Lokasi**: Fitur pencarian lokasi pada peta
- 📱 **Responsive Design**: Tampilan yang responsif di berbagai ukuran layar

## 🛠️ Teknologi yang Digunakan

- **Frontend**:

  - HTML5, CSS3, JavaScript
  - Bootstrap 5
  - Leaflet.js (library peta)
  - DataTables
  - jQuery

- **Backend**:

  - PHP 7.4+
  - MySQL Database

- **Library & Tools**:
  - Leaflet Control Geocoder
  - Font Awesome Icons
  - SB Admin 2 Template

## 💻 Instalasi Lokal

1. **Prasyarat**

   ```bash
   - PHP 7.4 atau lebih tinggi
   - MySQL 5.7 atau lebih tinggi
   - Web Server (Apache/Nginx)
   ```

2. **Langkah Instalasi**

   ```bash
   # Clone repository
   git clone https://github.com/NDP4/Web-GIS-Pesebaran.git
   cd repo-name

   # Import database
   mysql -u username -p database_name < database/uas_gis.sql

   # Konfigurasi database
   # Edit file config/conn.php sesuai dengan konfigurasi database lokal
   ```

3. **Konfigurasi Database**

   ```php
   $conn = mysqli_connect("localhost", "username", "password", "uas_gis");
   ```

4. **Menjalankan Aplikasi**
   - Pindahkan folder project ke direktori web server
   - Akses melalui browser: `http://localhost/nama-folder`

## 👨‍💻 Penggunaan Aplikasi

### User Biasa

1. Buka halaman utama website
2. Lihat peta persebaran peternakan
3. Klik marker untuk melihat detail peternakan
4. Gunakan filter untuk melihat kategori tertentu

### Admin

1. Login ke panel admin
2. Kelola data peternakan (tambah/edit/hapus)
3. Update data statistik per kapanewon
4. Kelola foto dan informasi peternakan
