<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 700px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .btn-tambah {
            display: inline-block;
            background: #28a745;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 20px;
            transition: 0.3s;
        }
        .btn-tambah:hover {
            background: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #007bff;
            color: #fff;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .btn-hapus {
            color: #dc3545;
            text-decoration: none;
            margin-right: 10px;
        }
        .btn-hapus:hover {
            text-decoration: underline;
        }
        .btn-edit {
            color: #007bff;
            text-decoration: none;
        }
        .btn-edit:hover {
            text-decoration: underline;
        }
        .alert {
            padding: 12px 20px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }
        .alert.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert.error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data User</h2>

        <?php if(isset($_SESSION['pesan'])): ?>
            <div class="alert <?= strpos($_SESSION['pesan'], 'gagal') !== false ? 'error' : 'success' ?>"><?= $_SESSION['pesan'] ?></div>
            <?php unset($_SESSION['pesan']); ?>
        <?php endif; ?>

        <a href="tambah_user.php" class="btn-tambah">+ Tambah Data</a>

        <table>
            <tr>
                <th>ID User</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
            <?php
            include('koneksi.php');
            mysqli_select_db($conn,"db_web");
            $sql = "SELECT * from user";
            $query = mysqli_query($conn,$sql);
            while($data = mysqli_fetch_array($query)):
            ?>
            <tr>
                <td><?= $data['id_user'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['pass'] ?></td>
                <td>
                    <a href="edit_user.php?id=<?= $data['id_user'] ?>" class="btn-edit">Edit</a>
                    <a href="aksi_hapus_user.php?idUser=<?= $data['id_user'] ?>" class="btn-hapus" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>