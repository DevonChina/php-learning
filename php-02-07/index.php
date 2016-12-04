<?php
//替换 将小二 替换成转向网站的一个连接
// echo str_replace('小二','<a href="http://fanxiao2.net">小二</a>', '范小二');

$title = '美好的明天';
$softname = '兄弟会';

$future = '今天我加入了 <softname> ,这里将会给我带来 <title>';

echo str_replace(array('<title>','<softname>'), array($title, $softname), $future);
