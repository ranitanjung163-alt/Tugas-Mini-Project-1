*MINI PROJECT 1 : PRODUCT INFORMASTION SYSTEM*

Sistem Informasi Manajemen Data Produk berbasis web sederhana yang dirancang menggunakan bahasa pemrosesan server-side PHP dan framework Bootstrap 5. Projek ini menerapkan konsep arsitektur desain konseptual *3-Layer Architecture* (Data, Processing, dan Presentation Layer). 

~Arsitektur & Komponen Sistem~

Sistem ini terbagi menjadi 3 komponen utama:

1. *Data Layer (product.php)*
   - Berfungsi sebagai tempat penyimpanan data komoditas produk menggunakan Multidimensional Array.
   - Menyimpan atribut produk: ID, Nama, Kategori, Harga, Stok, dan Deskripsi.

2. *Processing Layer (functions.php)*
   - Berisi fungsi logika bisnis hitungTotalNilaiStok() untuk mengalkulasi total aset nilai gudang (Harga × Stok).
   - Berisi fungsi getWarnaStok() untuk menentukan logika conditional pemrosesan status stok kritis (< 3).

3. *Presentation Layer (index.php)*
   - Menghubungkan seluruh komponen menggunakan require_once.
   - Merender data produk ke dalam bentuk tabel HTML secara dinamis menggunakan perulangan foreach.
   - Menandai secara otomatis baris produk yang memiliki stok kritis dengan warna peringatan.


~Teknologi yang Digunakan~
- *PHP 8.x* (Server-side Language)
- *HTML5 & CSS3*
- *Bootstrap 5* (UI Styling)
- *XAMPP* (Local Server Environment)


~Cara Menjalankan Projek Secara Lokal~

1. Pastikan modul *Apache* pada *XAMPP Control Panel* telah diaktifkan (Start).
2. Pindahkan atau simpan folder projek ke dalam direktori server lokal XAMPP:
   C:\xampp\htdocs\Tugas-Mini-Project-1\
3. Buka web browser (Chrome / Edge / Firefox) lalu akses URL berikut:
   http://localhost/Tugas-Mini-Project-1/index.php
