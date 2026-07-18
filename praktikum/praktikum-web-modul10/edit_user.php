<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <style>
        body{
            font-family: Arial, sans-serif;
        }

        .container{
            width: 400px;
            margin: 50px auto;
        }

        h2{
            text-align: center;
        }

        .form-group{
            margin-bottom: 15px;
        }

        label{
            display: inline-block;
            width: 80px;
        }

        input[type="text"],
        input[type="password"]{
            width: 250px;
            padding: 5px;
        }

        input[type="submit"]{
            margin-left: 84px;
            padding: 8px 20px;
        }
    </style>
</head>
<body>
<?php
include('koneksi.php');
$id=$_GET['id'];
mysqli_select_db($conn,"db_web");
$sql="SELECT * from user where id_user='$id'";
$query= mysqli_query($conn,$sql);
$result= mysqli_fetch_array($query);
?>
<div class="container">
    <h2>Edit Data</h2>

    <form action="aksi_edit_user.php" method="POST">

        <div class="form-group">
            <label>ID</label>
            <input type="hidden" name="idUser" value="<?=$result ['id_user'] ?>"> <?=$result ['id_user'] ?>
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="<?=$result ['nama'] ?>">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" value="<?=$result ['pass'] ?>">
        </div>

        <input type="submit" value="Simpan">

    </form>
</div>
</body>
</html>