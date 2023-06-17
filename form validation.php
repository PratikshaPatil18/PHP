<?php
if($_SERVER('REQUEST_METHOD')=='POST')
{
	 if (empty($_POST["name"])
		 {
		 echo"Enter Name";
		 }
	 if(!is_numeric($_POST["mob"])
		{
		 echo"Enter Valid Mobile NO";
		}
	$pattern="[A-Za-z][0-9]+@gmail.com";
     if !(preg_match($pattern,$_POST["email"]))
		{
		echo"Enter Valid Email-ID";
		}
}
?>