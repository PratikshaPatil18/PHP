<?php
$name='user';
$value='pratiksha';
setcookie($name,$value,time()+(-3600));
echo'cookie is deleted';
?>