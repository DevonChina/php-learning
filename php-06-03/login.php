<?php 
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_POST['username'] === 'fanxiao2' && $_POST['password'] === '123456'){
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = 'fanxiao2';
            header('Location: index.php');
            exit();
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录页面</title>
</head>
<body>
    <form action="<?php $_SERVER['SCRIPT_NAME']; ?>" method="post">
        <input type="text" name="username" placecholder="用户名">
        <input type="password" name="password" id="" value="密码">
        <button type="submit">登录</button>
    </form>
</body>
</html>