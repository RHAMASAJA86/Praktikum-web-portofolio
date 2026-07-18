<?php
session_start();
include "header.php";

if(!isset($_SESSION['login']))
{
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<p>Username <b><?php echo $username; ?></b></p>

<p>
    <a href="link/link1.php">Link 1</a> |
    <a href="link/link2.php">Link 2</a> |
    <a href="link/link3.php">Link 3</a> |
    <a href="logout.php">Logout</a>
</p>

<h3>Anda telah berhasil login</h3>

<?php 
include "footer.php"; 
?>