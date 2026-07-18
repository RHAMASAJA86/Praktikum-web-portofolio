<?php
session_start();
include('koneksi.php');
$id=$_POST['idUser'];
$nama=$_POST['nama'];
$pass=$_POST['pass'];

$sql= "INSERT into user(id_user,nama,pass) value ('$id','$nama','$pass')";
$query=mysqli_query($conn,$sql);
if(!$query){
    $_SESSION['pesan'] = "Data gagal disimpan";
}else{
    $_SESSION['pesan'] = "Data berhasil disimpan";
}
header("location:tampil_user.php");
?>