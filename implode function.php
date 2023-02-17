<html>
<body>
<?php
echo"implode function.<br>";
$str=array("hello","world");
//join without separator
$arr=implode($str);
print_r($arr);

//join with separator
print_r("-",$arr);

?>
</body>
</html>