<?php
// Array angka
$angka = array(23, 24, 24, 30, 34, 35, 40, 40, 46, 47);

// Menghitung total hasil penjumlahan semua angka
$total = array_sum($angka);
echo "Total: " . $total . "<br>";

// Menghitung nilai rata-rata (mean)
$mean = $total / count($angka);
echo "Rata-rata: " . $mean . "<br>";

// Menghitung nilai median
sort($angka);
$count = count($angka);
$median = ($count % 2 == 0) ? ($angka[$count / 2 - 1] + $angka[$count / 2]) / 2 : $angka[floor($count / 2)];
echo "Median: " . $median . "<br>";

// Menampilkan angka ganjil
echo "Angka ganjil: ";
foreach ($angka as $value) {
    if ($value % 2 != 0) {
        echo $value . " ";
    }
}
echo "<br>";
?>