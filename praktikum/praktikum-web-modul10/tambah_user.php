<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            transition: 0.3s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0,123,255,0.3);
        }
        .btn-simpan {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        .btn-simpan:hover {
            background: #0056b3;
        }
        .btn-kembali {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
        .btn-kembali:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data</h2>
        <form action="aksi_tambah_user.php" method="POST">
            <div class="form-group">
                <label>ID User</label>
                <input type="text" name="idUser" placeholder="Masukkan ID" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukkan nama" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="pass" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn-simpan">Simpan</button>
            <a href="tampil_user.php" class="btn-kembali">Kembali</a>
        </form>
    </div>
</body>
</html>