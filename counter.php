<?php
// Nama file untuk menyimpan jumlah pengunjung
$counterFile = 'counter.txt';

// Membaca jumlah pengunjung dari file
$counter = file_exists($counterFile) ? file_get_contents($counterFile) : 0;

// Menambah 1 ke jumlah pengunjung
$counter++;

// Menyimpan jumlah pengunjung yang baru
file_put_contents($counterFile, $counter);

// Menampilkan jumlah pengunjung di halaman web
echo 'Jumlah Pengunjung: ' . $counter;
?>
