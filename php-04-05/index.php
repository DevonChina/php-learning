<?php

$city = array('北京','武汉','天津','广州');

$test = array(
    'name' => '范小二',
    'day'  => '2016.12.10',
    'artist' => '离开'
);

foreach ($city as $citys){
    echo $citys . '<br>';
}

foreach ($test as $key => $vaule){
    echo $key . ': ' .$vaule . '<br>';
}