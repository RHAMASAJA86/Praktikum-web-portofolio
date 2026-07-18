<?php

if (isset($_POST['login'])) {
    # code...
    $username = $_POST['username'];
    $password = $_POST['password'];

if ($username== "" or $password == "") {
    # code...
    echo "
    <script>
        alert('Username atau Password tidak boleh kosong');
        window.location = 'form_login.php';
    </script>
    ";
} else {

    if ($username == "admin" and $password == "12345678") {
        # code...
        header("Location: form_login.php?login=success");
        exit();
    } else {
        # code...
        echo "
        <script>
            alert('Username atau Password salah, silahkan coba lagi');
            window.location = 'form_login.php';
        </script>
        ";
    }
    
}

}

