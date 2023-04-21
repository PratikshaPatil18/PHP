<?php

 $name="user";
 $value="pratiksha";
 setcookie($name,$value,time()+(86400*30)); //86400=1 day
 if(!isset($_COOKIE[$name]))
	{
		echo"Cookie Name : ".$name." is not set";
	}
 else
	{
		echo"cookie ".$name." is set<br>";
		echo "cookie value is ".$value;
	}
?>