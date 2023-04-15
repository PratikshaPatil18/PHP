<?php
if(isset($_POST['name']))
{
 echo "<p> Name :".$_POST['name']."</p>";
}
else if(isset($_POST['address']))
{
 echo "<p> Address :".$_POST['address']."</p>";
}
?>