<?php
// function say_hello($name) {
//     return '你好' . $name;
// }

// echo say_hello('fanxiao2');

// function m_list($source, $container = 'ul') {
//     if (is_array($source)) {
//         $lists = '';
//         foreach ($source as $item) {
//             $lists .= '<li>' . $item . '</li>';
//         }
//         return "<$container>$lists</$container>";
//     }
//     return '请提供数组类型数据';
// }

// $name = array('Beijing', 'ShangHai', 'Wuhan', 'TianJing');
// echo m_list($name, 'ol');




// $title = "向前冲";
// function become_strong(&$string) {
//     $string = "<strong>$string</strong>";
// }

// become_strong($title);

// echo "<pre>";
//     var_dump($title);
// echo "</pre>";


// function make_link($attributes = array()){
//     return '<a href="' . $attributes['url'] . '">' . $attributes['title'] . '</a>';
// }
// echo make_link(array('url' => 'http://www.fanxiao2.net', 'title' => '范小二博客'));


$title = '今天天气不错';

function get_title(){
    global $title;
    $label = "晴天";
    return $title;
}

echo get_title();
echo $label();
