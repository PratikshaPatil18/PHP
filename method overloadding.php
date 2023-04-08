<?php
class add
{
 function __call($name_of_function,$arg)
 {
  if($name_of_function=='add')
	  {
	    switch(count($arg))
			{
				case 1:
				return $arg[0];
				
				case 2:
				return $arg[0]+$arg[1];
				
				case 3:
				return $arg[0]+$arg[1]+$arg[2];
				
				case 4:
				return $arg[0]+$arg[1]+$arg[2]+$arg[3];
			}
	  }
 
 }
}
$s=new add();
echo "Addition of 0 arg :".$s->add(7)."<br>";
echo "Addition of 2 arg :".$s->add(7,6)."<br>";
echo "Addition of 3 arg :".$s->add(7,9,6);

?>