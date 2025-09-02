<?php
session_start();
if (isset($_SESSION['user_id'])) {
    // ✅ If logged in, go directly to dashboard
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Blood Donation Connect</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Blood Donation Connect 🩸</header>
    <div class="container" style="text-align: center;">
        <h2>Welcome to Blood Donation Connect</h2>
        <p>Save Lives by Donating Blood ❤️</p>
        <br>
        <!-- ✅ Buttons for new users and existing users -->
        <a href="register.php"><button>Register</button></a>
        <a href="login.php"><button>Login</button></a>
    </div>
    <footer>
        <p>© <?php echo date("Y"); ?> Blood Donation Connect | Developed By JYOTHIKA GIRIJALA</p>
    </footer>
</body>
</html>
