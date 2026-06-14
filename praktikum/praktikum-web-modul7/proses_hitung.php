<?php

$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];

$operator = $_POST['operator'];

if ($operator == "tambah") {
    # code...
    $hasil = $angka1 + $angka2;
} else if ($operator == "kurang") {
    # code...
    $hasil = $angka1 - $angka2;
} else if ($operator == "kali") {
    # code...
    $hasil = $angka1 * $angka2;
} else if ($operator == "bagi" && $angka2 != 0) {
    # code...
    $hasil = $angka1 / $angka2;
} else if ($operator == "bagi" && $angka2 == 0) {
    # code...
    $hasil = "<b>Error pembagi 0</b>";
} else if ($operator == "modulus" && $angka2 != 0) {
    # code...
    $hasil = $angka1 % $angka2;
} else if ($operator == "modulus" && $angka2 == 0) {
    # code...
    $hasil = "<b>Error pembagi 0</b>";
} 

echo "<br> Hasil dari $angka1 di$operator $angka2 = $hasil";
