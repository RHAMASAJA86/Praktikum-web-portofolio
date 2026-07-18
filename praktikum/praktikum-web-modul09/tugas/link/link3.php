<?php
session_start();

if(!isset($_SESSION['login']))
{
    header("Location: ../index.php");
    exit();
}

$username = $_SESSION['username'];

include "../header.php";
?>

<p>Username <b><?php echo $username; ?></b></p>

<p>
    <a href="../link/link1.php">Link 1</a> |
    <a href="../link/link2.php">Link 2</a> |
    <a href="../link/link3.php">Link 3</a> |
    <a href="../logout.php">Logout</a>
</p>

<h3>Ini adalah isi dari Link 3</h3>

<?php 
include "../footer.php"; 
?>