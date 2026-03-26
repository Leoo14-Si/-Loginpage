<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>
* {margin:0;padding:0;box-sizing:border-box;font-family:sans-serif;}

body {
    height:100vh;
    background:#f4f4f4;
    display:flex;
    justify-content:center;
    align-items:center;
}

.dashboard {
    width:90%;
    height:90%;
    background:white;
    border-radius:20px;
    padding:20px;
}

.nav {
    display:flex;
    justify-content:space-between;
    margin-bottom:20px;
}

.nav button {
    padding:8px 15px;
    border-radius:8px;
    border:none;
    background:black;
    color:white;
    cursor:pointer;
}

.grid {
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
}

.box {
    height:100px;
    border-radius:15px;
    background:#f0f0f0;
}
</style>

</head>
<body>

<div class="dashboard">
    <div class="nav">
        <div>●</div>
    </div>

    <div class="grid">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>
</div>

</body>
</html>