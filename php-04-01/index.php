<?php

$user_name = '范小二';
$user_role = 'admin';
$is_login = true;

if($is_login && $user_role === 'admin') {
    echo "您好管理员:" . $user_name;
}elseif($is_login){
    echo "您好:" . $user_name;
}else {
    echo "请先登录";
}