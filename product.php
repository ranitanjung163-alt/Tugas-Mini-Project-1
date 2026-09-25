<?php
// Data Layer: Multidimensional Array
$products = [
    [
        "id" => "P001",
        "nama" => "Keyboard Mekanikal",
        "kategori" => "Elektronik",
        "harga" => 450000,
        "stok" => 15,
        "deskripsi" => "Keyboard nyaman untuk mengetik koding."
    ],
    [
        "id" => "P002",
        "nama" => "Mouse Wireless",
        "kategori" => "Elektronik",
        "harga" => 150000,
        "stok" => 2, // Stok kritis (< 3)
        "deskripsi" => "Mouse tanpa kabel, praktis dibawa ke kampus."
    ],
    [
        "id" => "P003",
        "nama" => "Flashdisk 64GB",
        "kategori" => "Aksesoris",
        "harga" => 85000,
        "stok" => 1, // Stok kritis (< 3)
        "deskripsi" => "Untuk menyimpan tugas kuliah mahasiswa."
    ]
];
?>