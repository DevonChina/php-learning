<?php

$num = [5,7,2,10];

echo '<pre>';
    var_dump(
        $num,
        // sort($num, SORT_NUMERIC),
        rsort($num),
        $num
    );
echo '</pre>';