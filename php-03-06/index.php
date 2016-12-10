<?php
//嵌套数组

$today = array(
    'title' => '今天',
    'day'   => '2016-12-10',
    'artist' => '天气非常好',
    'city' => array('北京','上海','武汉','天津')
);
//
$city = array('北京','上海','武汉','天津');
echo '<pre>';
    var_dump(
        // in_array('北京', $city)
        //查找项目的键值
        // array_search('武汉', $city)
        array_search('上海',$today)
    );
echo '</pre>';