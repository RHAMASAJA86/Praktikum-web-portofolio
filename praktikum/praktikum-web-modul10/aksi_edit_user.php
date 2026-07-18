<?php
session_start();
include('koneksi.php');
$id=$_POST['idUser'];
$nama=$_POST['nama'];
$pass=$_POST['pass'];

$sql= "UPDATE user set nama='$nama', pass='$pass' where id_user='$id' ";
$query=mysqli_query($conn,$sql);
if(!$query){
    $_SESSION['pesan'] = "Data gagal diupdate";
}else{
    $_SESSION['pesan'] = "Data berhasil diupdate";
}
header("location:tampil_user.php");
?>