<?php
$nilai = 85;

if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
    $ket = "Baik Sekali";
} elseif ($nilai >= 76 && $nilai <= 89) {
    $grade = "B";
    $ket = "Baik";
} elseif ($nilai >= 60 && $nilai <= 75) {
    $grade = "C";
    $ket = "Cukup";
} elseif ($nilai >= 50 && $nilai <= 59) {
    $grade = "D";
    $ket = "Hampir Cukup";
} else {
    $grade = "E";
    $ket = "Kurang";
}

echo "Nilai : ".$nilai."<br>";
echo "Grade : ".$grade."<br>";
echo "Keterangan : ".$ket;
?>