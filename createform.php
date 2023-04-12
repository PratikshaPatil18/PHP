<?php
if(isset($_GET['name'])&&($_GET['phone'])&&($_GET['address'])&&($_GET['gender'])&&($_GET['email'])&&($_GET['branch']))
{
	echo'Name :'.$_GET['name']."<br>";

	echo'Phone.No :'.$_GET['phone'].'<br>'; 

	echo'Address :'.$_GET['address'].'<br>';

	echo'Gender :'.$_GET['gender'].'<br>';
	
	echo'E-mail :'.$_GET['email'];
	
	echo'Branch :'.$_GET['branch'].'<br>';
}
if(isset($_GET['c'])||isset($_GET['c++'])||isset($_GET['java'])||isset($_GET['python']))
{
	echo'Language :'.$_GET['c'].'<br>';
	echo $_GET['c++'].'<br>';
	echo $_GET['java'].'<br>';
	echo $_GET['python'];
}
?>
