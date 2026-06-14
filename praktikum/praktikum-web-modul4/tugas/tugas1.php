<?php
$lembar = 158;

if ($lembar < 100) {
    $harga = 150;
} elseif ($lembar >= 100 && $lembar <= 200) {
    $harga = 100;
} else {
    $harga = 80;
}

$total = $lembar * $harga;

echo "Jumlah lembar : ".$lembar."<br>";
echo "Harga per lembar : Rp. ".$harga."<br>";
echo "Perhitungan : ".$lembar." x ".$harga." = ".$total."<br>";
echo "Total bayar : Rp. ".$total;
?>