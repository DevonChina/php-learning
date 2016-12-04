<?php 
// trim ltrim rtrim 函数的使用 
$email = " admin@fanxiao2.net \r\n ";
echo '<pre>';
var_dump(
    $email,
    //去掉左右字符  去掉前后字符及回车符
    trim($email, " \r"),
    //去掉左边字符
    ltrim($email),
    //去掉右边字符
    rtrim($email)
);

echo '</pre>';
