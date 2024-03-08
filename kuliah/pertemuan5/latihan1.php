<?php
// 1. Membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mhs = ["Chalida", 3.7, false];

// 2. Mencetak array(1)
//cetak 1 nilai menggunakan index
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";

//cetak seluruh isi array
//var_dump () atau print_r()
//digunakan utk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
print_r($mhs);
echo "<hr>";

// 3. Memanipulasi array
// Menambah isi array
// Di akhir array: [] atau array_push
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

//Di awal array: array_unshift()
array_unshift($mhs, "233040046");
print_r($mhs);
echo "<hr>";

// Menghapus isi array
// di belakang: array_pop()
//di depan : array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);

// 4. Mencetak array (2)
