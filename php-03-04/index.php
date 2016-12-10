<?php
//嵌套数组

$today = array(
    'title' => '今天',
    'day'   => '2016-12-10',
    'artist' => '天气非常好',
    'city' => array('北京','上海','武汉','天津')
);

echo "我今天想去" . $today['city'][3];
echo '<pre>';
    var_dump(
        $today
    );
echo '</pre>';