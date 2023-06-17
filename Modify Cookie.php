<?php
$name='User';
$value='Pratiksha';
setcookie($name,$value,time()+3600);
echo'Before Modifying Cookie<br>';
if(!isset($_COOKIE[$name]))
 {
	echo'Cookie is not set';
 }
 else{
	 echo'Cookie '.$name.' is set.<br>';
	 echo'Cookie Value '.$value.'.<br><br><br>';
	 }
$name="User";
$value='Prafull';
setcookie($name,$value,time()+(3600));
echo'After Modifying Cookie<br>';
if(!isset($_COOKIE[$name]))
 {
	echo'Cookie is not set';
 }
 else{
	 echo'Cookie '.$name.' is set.<br>';
	 echo'Cookie Value '.$value.'.';
	 }
?>