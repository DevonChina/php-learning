<?php
$results = 8.9;

switch ($results){
    case $results > 10:
        echo "很棒";
        break;
    case $results >9:
        echo "优秀";
        break;
    case $results > 8:
        echo "可以";
        break;
    case $results >= 7:
        echo "及格";
        break;
    default:
        echo "太差继续加油";
        break;
}