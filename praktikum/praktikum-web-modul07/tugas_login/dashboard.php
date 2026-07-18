<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- dashboard box -->
    <div class="dashboard-box">

        <div class="dashboard-content">

             <i class="fa-solid fa-circle-check"
             style="font-size: 60px; color: #7494ec; margin-bottom: 20px;"></i>

              <h1>Login Berhasil!</h1>

             <p>
                 Selamat datang kembali di sistem kami.
                 Kamu sekarang bisa mengakses seluruh fitur dashboard.
             </p>

             <div class="user-profile">
                  <i class="fa-solid fa-user-gear"></i>
                  <span>Status: Administrator</span>
             </div>

             <button class="btn logout-btn"
              style="margin-top: 30px; max-width: 200px;">
                 Logout
             </button>

         </div>

     </div>
</body>
</html>

<?php

if (isset($_POST['back'])) {
    header("Location: form_login.php");
    exit();
}
