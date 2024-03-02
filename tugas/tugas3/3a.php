<?php
function hitungLuasLingkaran($r)
{
    echo "Jari-jari= $r cm <br>";
    $luas = 3.14 * $r * $r;
    echo "Luas lingkaran= $luas cm² <br>";
}
function hitungKelilingsLingkaran($r)
{
    echo "Jari-jari= $r cm <br>";
    $keliling = 3.14 * 2 * $r;
    echo "Keliling lingkaran= $keliling cm <br>";
}

echo "<h4>Menghitung Luas Lingkaran</h4>";
hitungLuasLingkaran(10);
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
hitungKelilingsLingkaran(20);
echo "<hr>";
