<!--http协议-->
<!--客户端与服务端对话的方法   无状态协议-->
<!--session 会话-->
<?php

setcookie('color', 'bule');
setcookie('name', 'xiao2');

echo $_COOKIE['color'] . '<br>' . $_COOKIE['name'];
