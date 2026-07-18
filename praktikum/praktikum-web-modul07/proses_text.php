<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
// $hobi1 = isset($_POST['hobi1']) ? $_POST['hobi1'] : null;
// $hobi2 = isset($_POST['hobi2']) ? $_POST['hobi2'] : null;
// $hobi3 = $_POST['hobi3'] ?? null;
// $hobi4 = $_POST['hobi4'] ?? null;

$dir = "image/";
$upload = $dir.$_FILES['file']['name'];

echo "NIM : $nim <br>";
echo "Nama : $nama <br>";
echo "Nama : $tempat <br>";
echo "Nama : $tanggal_lahir <br>";
echo "Nama : $jenis_kelamin <br>";
echo "Nama : $agama <br>";
echo "Nama : $alamat <br>";
// echo "Nama : $hobi1, $hobi2, $hobi3, $hobi4 <br>";
echo "Hobi : ";

     # code...
    // if ($hobi1) {
    //     # code...
    //     echo " $hobi1 ";
    // }
    // if ($hobi2) {
    //     # code...
    //     echo " $hobi2 ";
    // }
    // if ($hobi3) {
    //     # code...
    //     echo " $hobi3 ";
    // }
    // if ($hobi4) {
    //     # code...
    //     echo " $hobi4 ";
    // }

if(isset($_POST['hobi1'])){
    $hobi1 = $_POST['hobi1'];
    echo "$hobi1 ";
}
if(isset($_POST['hobi2'])){
    $hobi2 = $_POST['hobi2'];
    echo "$hobi2 ";
}
if(isset($_POST['hobi3'])){
    $hobi3 = $_POST['hobi3'];
    echo "$hobi3 ";
}
if(isset($_POST['hobi4'])){
    $hobi4 = $_POST['hobi4'];
    echo "$hobi4 ";
}

echo "<br> Foto : <br>";
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    # code...
    $kirim = move_uploaded_file($_FILES['file']['tmp_name'],$upload);
    if ($kirim) {
        # code...
        echo "<br> Foto dengan nama : " . $_FILES['file']['name'] . " berhasil diupload <br><br>";
        echo "<img src= '$upload' width='200px'>";
    } else {
        # code...
        echo "Foto gagal diupload";
    }
    
}


?>