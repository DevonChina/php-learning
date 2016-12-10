<!--php变量的使用-->
<?php 
    $site_name = "这是PHP变量test代码"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $site_name; ?></title>
</head>
<body>
    <h1><?php echo $site_name; ?></h1>
    <?php 
        $name = "范小二";
        echo "Hello," . $name . "</br>";

        $name = "张球球";
        echo "Hello," . $name;
    ?>
</body>
</html>