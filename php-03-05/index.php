<?php
//嵌套数组

$today = array(
    'title' => '今天',
    'day'   => '2016-12-10',
    'artist' => '天气非常好',
    'city' => array('北京','上海','武汉','天津')
);
//查看数组里是否包含一个项目或者键 (true , false)
echo '<pre>';
    var_dump(
        array_key_exists('localhost',$today)
    );
echo '</pre>';