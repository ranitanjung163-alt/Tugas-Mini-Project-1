<?php
// Presentation Layer

// Merajut / memanggil file Data Layer dan Processing Layer
require_once 'product.php';
require_once 'functions.php';

// Memanggil fungsi untuk menghitung total aset gudang
$totalAset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information System</title>
    <!-- Memanggil CSS Bootstrap 5 online agar tampilan tabel rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

    <div class="container bg-white p-4 rounded shadow-sm">
        <h2 class="mb-1 text-primary">Mini Project 1: Product Information System</h2>
        <p class="text-muted mb-4">Sistem Manajemen Data Produk Sederhana</p>

        <!-- Tabel Tampilan Data Produk -->
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Melakukan perulangan foreach untuk menampilkan setiap data produk -->
                <?php foreach ($products as $item): ?>
                    <!-- Baris tabel diberi warna jika stok < 3 -->
                    <tr class="<?= getWarnaStok($item['stok']); ?>">
                        <td><?= $item['id']; ?></td>
                        <td><strong><?= $item['nama']; ?></strong></td>
                        <td><?= $item['kategori']; ?></td>
                        <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
                        <td>
                            <?= $item['stok']; ?>
                            <?php if ($item['stok'] < 3): ?>
                                <span class="badge bg-danger ms-1">Stok Kritis!</span>
                            <?php endif; ?>
                        </td>
                        <td><?= $item['deskripsi']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Menampilkan Ringkasan Total Nilai Stok -->
        <div class="alert alert-success mt-3">
            <strong>Total Nilai Aset Gudang:</strong> Rp <?= number_format($totalAset, 0, ',', '.'); ?>
        </div>
    </div>

</body>
</html>