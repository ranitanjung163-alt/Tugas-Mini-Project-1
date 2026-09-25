<?php
// Processing Layer

// 1. Fungsi untuk menghitung total nilai aset gudang
function hitungTotalNilaiStok($products) {
    $total = 0;
    if (is_array($products)) {
        foreach ($products as $item) {
            $total += $item['harga'] * $item['stok'];
        }
    }
    return $total;
}

// 2. Fungsi logika conditional untuk menyaring warna baris jika stok kritis (< 3)
function getWarnaStok($stok) {
    if ($stok < 3) {
        return "table-danger"; // Memberikan warna merah muda pada baris tabel
    }
    return "";
}
?>