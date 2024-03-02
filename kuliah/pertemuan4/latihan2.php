<?php
// //hitung total volume 2 kubus
// //sisi kubus a=9, sisi kubusn b=4

// $sisi_a = 9;
// $sisi_b = 4;

// $kubusA = $sisi_a * $sisi_a * $sisi_a;
// $kubusB = $sisi_b * $sisi_b * $sisi_b;

// $total = $kubusA + $kubusBOO;
// echo "jumlah volume a dan b adalah $total";

function total_volume_dua_kubus($a, $b)
{
    return $a * $a * $a + $b * $b * $b;
}

echo "Total Volume Kubus A dan B adalah" . " " . total_volume_dua_kubus(9, 4);
echo "<br>";
