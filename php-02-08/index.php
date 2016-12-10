<?php

$title = '北京|天津|南京|哈尔滨|重庆|成都|上海';
//将字符串转为数据的函数
$title_array = explode('|', $title);
//将数组转为字符串
echo implode('-',$title_array);
echo '<pre>';
var_dump(
    $title_array
);
echo '</pre>';