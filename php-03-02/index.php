<?php

$day = array('北京', '上班', '农民工', '太累太辛苦', '回家');

$day[] = '吃饭';
//追加函数
array_push($day, '生活', '很不容易');
//删除项目数组的名字
array_pop($day);
//删除项目第一个项目(序号也会发生变化) ===重置项目
array_shift($day);
//删除数据对应序号的项目
// unset($day[1]);
echo '<pre>';
var_dump($day);
echo '<pre>';