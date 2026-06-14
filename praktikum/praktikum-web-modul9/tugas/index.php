<?php
session_start();
include "header.php";

$users = array(
    "Ali"     => "password1",
    "Bona"    => "password2",
    "Charlie" => "password3",
    "Dede"    => "password4",
    "Emon"    => "password5"
);

$pesan = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(array_key_exists($username, $users))
    {
        if($users[$username] == $password)
        {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;

            header("Location: home.php");
            exit();
        }else{
            $pesan = "Password yang dimasukkan salah";
        }
    }else{
        $pesan = "Username tidak terdaftar";
    }
}
?>

<h2>Silahkan Login</h2>

<form method="post">
    Username : 
    <input type="text" name="username"><br><br>

    Password : 
    <input type="password" name="password"><br><br>

    <input type="submit" name="login" value="Submit">
</form>

<p style="color:red;">
    <?php echo $pesan; ?>
</p>

<?php
include "footer.php"; 
?>