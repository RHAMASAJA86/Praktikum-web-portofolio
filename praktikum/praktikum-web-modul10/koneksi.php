<?php
$conn = mysqli_connect('localhost','root','','db_web');
if(!$conn){
    die("koneksi gagal".mysqli_connect_error());  
}
?>