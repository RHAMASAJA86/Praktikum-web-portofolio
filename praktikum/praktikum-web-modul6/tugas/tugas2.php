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

echo "<br/>Mengambil semua nama (key) menggunakan fungsi array_keys() :<br/>";
$daftar_nama = array_keys($nilai_mahasiswa);
foreach ($daftar_nama as $data => $nama) {
    echo "data ke-$data : $nama<br/>";
}

echo "<br/>Mengambil semua nilai (value) menggunakan fungsi array_values() :<br/>";
$daftar_nilai = array_values($nilai_mahasiswa);
foreach ($daftar_nilai as $data => $nilai) {
    echo "data ke-$data : $nilai<br/>";
}

echo "<br/>Mencari pemilik nilai 80 menggunakan fungsi array_search() :<br/>";
$siapa = array_search(80, $nilai_mahasiswa);
echo "Nilai 80 adalah milik : $siapa<br/>";

echo "<br/>Membalik urutan array menggunakan fungsi array_reverse() :<br/>";
$terbalik = array_reverse($nilai_mahasiswa, true);
foreach ($terbalik as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}

echo "<br/>Menyaring mahasiswa yang lulus (nilai >= 75) menggunakan fungsi array_filter() :<br/>";
$lulus = array_filter($nilai_mahasiswa, function($nilai) {
    return $nilai >= 75;
});
foreach ($lulus as $nama => $nilai) {
    echo "$nama : $nilai<br/>";
}
?>