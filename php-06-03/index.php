<?php
session_start();

if (!isset($_SESSION['is_login'])) {
    header('Location: login.php');
    exit();
}

echo '您好: ' . $_SESSION['username'] . '<a href="logout.php">登出</a>';