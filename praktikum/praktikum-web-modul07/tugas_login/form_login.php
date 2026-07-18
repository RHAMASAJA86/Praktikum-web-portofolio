<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Login/Signup</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>
</head>

<body>

    <div class="container">

        <!-- login form -->
        <div class="form-box login">

            <form action="proses_login.php" method="POST" id="loginForm">

                <h1>Login</h1>

                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fa-solid fa-lock"></i>
                </div>

                <div class="forget-link">
                    <a href="#">Forget password?</a>
                </div>

                <button type="submit" name="login" class="btn">
                    Login
                </button>

                <p>Or login with social platforms</p>

                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>

            </form>

        </div>

        <!-- register form -->
        <div class="form-box register">

            <form action="#">

                <h1>Register</h1>

                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-box">
                    <input type="email" placeholder="Email" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class="fa-solid fa-lock"></i>
                </div>

                <button type="submit" class="btn">
                    Register
                </button>

                <p>Or register with social platforms</p>

                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>

            </form>

        </div>

        <!-- toggle box -->
        <div class="toggle-box">

            <!-- toggle left -->
            <div class="toggle-panel toggle-left">

                <h1>Hello, Welcome!</h1>

                <p>Don't have an Account?</p>

                <button class="btn register-btn">
                    Register
                </button>

            </div>

            <!-- toggle right -->
            <div class="toggle-panel toggle-right">

                <h1>Welcome Back!</h1>

                <p>Already have an Account?</p>

                <button class="btn login-btn">
                    Login
                </button>

            </div>

        </div>

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

    </div>

    <script src="script.js"></script>

</body>
</html>