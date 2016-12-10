<!--<?php print_r($_SERVER); ?>-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>php表单</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!--<form action="form.php" method="post">-->
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
        <form action="<?php $_SERVER['SCRIPT_NAME']; ?>" method="post">
            <input type="text" name="username" placeholder="用户名">
            <input type="email" name="email" placeholder="Email">
            <button type="submit">提交</button>
        </form>
        <?php endif; ?>
        <?php if ($_SERVER['REQUEST_METHOD']=== 'POST'): ?>
        <?php 
            if (strlen($_POST['username']) && strlen($_POST['email'])){
                echo '您好:' . $_POST['username'] . ', 您的邮件地址是: ' . $_POST['email'];
            }else {
                echo '请输入正确的用户名与邮件地址.';
            }
        ?>
        <?php endif; ?>
    </body>
</html>