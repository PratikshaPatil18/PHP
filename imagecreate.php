<?php
header('Content-type:image/png');
$img=ImageCreate(100,80);
imagecolorallocate($img,0,255,0);
imagepng($img);
?>