<?php 

$email = 'admin@fanxiao2.net';
$site = 'www.fanxiao2.net';

// echo strstr($email, '@', true);

//从前往后查找 第一个点出现的
// echo trim(strstr($site, '.'), '.');
//从后往前查找
echo strrchr($site, '.');