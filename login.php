<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "" or $password == "") {
        echo "
    <script>
        alert('Username atau Password tidak boleh kosong');
        window.location = 'login.php';
    </script>
    ";
    } else {
        if ($username == "admin" and $password == "12345678") {
            header("Location: index.php");
        } else {
            echo "
        <script>
            alert('Username atau Password salah, silahkan coba lagi');
            window.location = 'login.php';
        </script>
        ";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center mb-4">
                            Login
                        </h3>
                        <form action="index.php" method="post">
                            <input type="text"
                                class="form-control mb-3"
                                placeholder="Username">
                            <input type="password"
                                class="form-control mb-3"
                                placeholder="Password">
                            <button href="index.php" class="btn btn-primary w-100">
                                Masuk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>