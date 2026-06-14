<?php
$r = 7;
$s = 10; 
$phi = 3.14;
// Menghitung luas alas
$luasAlas = $phi * ($r * $r);
// Menghitung luas permukaan
$luasPermukaan = ($phi * $r * $r) + ($phi * $r * $s);
// Menampilkan hasil
echo "r=$r <br>";
echo "s=$s <br>";
echo "Luas Alas=$luasAlas <br>";
echo "Luas Permukaan=$luasPermukaan <br>";
?>