<?php
// Array multidimensi untuk menyimpan data produk
$produk = array(
    array(
        "nama_produk" => "Laptop",
        "harga" => 15000000,
        "stok" => 10
    ),
    array(
        "nama_produk" => "Smartphone",
        "harga" => 7000000,
        "stok" => 20
    ),
    array(
        "nama_produk" => "Tablet",
        "harga" => 5000000,
        "stok" => 15
    )
);

// Menampilkan data produk menggunakan foreach
foreach ($produk as $item) {
    echo "Nama Produk: " . $item["nama_produk"] . "<br>";
    echo "Harga: Rp. " . number_format($item["harga"], 0, ',', '.') . "<br>";
    echo "Stok: " . $item["stok"] . "<br>";
    echo "<br>";
}
?>