<?php
$bulan = "Dec";

switch($bulan){
    case "Jan": $hari = 31; break;
    case "Feb": $hari = 28; break;
    case "Mar": $hari = 31; break;
    case "Apr": $hari = 30; break;
    case "May": $hari = 31; break;
    case "Jun": $hari = 30; break;
    case "Jul": $hari = 31; break;
    case "Aug": $hari = 31; break;
    case "Sep": $hari = 30; break;
    case "Oct": $hari = 31; break;
    case "Nov": $hari = 30; break;
    case "Dec": $hari = 31; break;
}

echo "Bulan yang dipilih : ".$bulan."<br>";
echo "Jumlah hari : ".$hari;
?>