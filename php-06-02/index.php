<?php
//session 相对于cookie更加的安全

session_start();

$_SESSION['username'] = 'fanxiao2';
unset($_SESSION['username']);
echo $_SESSION['username'];
sesion_destroy();

$_SESSION = array();