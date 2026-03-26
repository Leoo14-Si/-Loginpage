<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === "admin" && $pass === "123") {
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
* {margin:0;padding:0;box-sizing:border-box;font-family:sans-serif;}

body {
    height:100vh;
    background: linear-gradient(to top,#dfe9f3,#a3c7e7);
    display:flex;
    justify-content:center;
    align-items:center;
}

.card {
    width:320px;
    padding:30px;
    border-radius:20px;
    backdrop-filter:blur(15px);
    background:rgba(255,255,255,0.2);
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
    text-align:center;
}

.icon {
    width:60px;height:60px;margin:auto;
    border-radius:15px;background:white;
    display:flex;align-items:center;justify-content:center;
    margin-bottom:20px;
}

.input {
    width:100%;padding:12px;margin:10px 0;
    border-radius:10px;border:none;
}

.btn {
    width:100%;padding:12px;border-radius:10px;
    border:none;background:linear-gradient(to right,#000,#333);
    color:white;cursor:pointer;
}
</style>

</head>
<body>

<div class="card">
    <div class="icon">→</div>

    <form method="POST">
        <input type="text" name="username" class="input" required>
        <input type="password" name="password" class="input" required>
        <button type="submit" name="login" class="btn">→</button>
    </form>

    <?php if(isset($error)) echo "<p style='color:red;'>!</p>"; ?>
</div>

</body>
</html>