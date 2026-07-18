<?php
session_start();
include('koneksi.php');
$id=$_GET['idUser'];

$sql= "DELETE from user where id_user='$id' ";
$query=mysqli_query($conn,$sql);
if(!$query){
    $_SESSION['pesan'] = "Data gagal dihapus";
}else{
    $_SESSION['pesan'] = "Data berhasil dihapus";
}
header("location:tampil_user.php");
?>