<?php
$nilai_mahasiswa = array(
    "Sinta"  => 75,
    "Dewi"   => 65,
    "Andi"   => 80,
    "Farhan" => 58,
    "Laila"  => 95
);

echo "Data awal array asosiatif :<br/>";
foreach ($nilai_mahasiswa as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}

echo "<br/>Setelah diurutkan menggunakan fungsi sort() :<br/>";
$temp = $nilai_mahasiswa;
sort($temp);
foreach ($temp as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}

echo "<br/>Setelah diurutkan menggunakan fungsi rsort() :<br/>";
$temp = $nilai_mahasiswa;
rsort($temp);
foreach ($temp as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}

echo "<br/>Setelah diurutkan menggunakan fungsi asort() :<br/>";
$temp = $nilai_mahasiswa;
asort($temp);
foreach ($temp as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}

echo "<br/>Setelah diurutkan menggunakan fungsi arsort() :<br/>";
$temp = $nilai_mahasiswa;
arsort($temp);
foreach ($temp as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}

echo "<br/>Setelah diurutkan menggunakan fungsi ksort() :<br/>";
$temp = $nilai_mahasiswa;
ksort($temp);
foreach ($temp as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}

echo "<br/>Setelah diurutkan menggunakan fungsi krsort() :<br/>";
$temp = $nilai_mahasiswa;
krsort($temp);
foreach ($temp as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}
?>