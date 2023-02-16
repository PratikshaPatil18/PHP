<html>
<body>
<?php
echo"<h2>Multidimentional Array</h2>";
$emp=array(
		array(1,"Pratiksha","Manager",50000),
		array(2,"Darshan","CO",40000),
		array(3,"Sai","Employee",25000),
		array(4,"Siddhi","Employee",25000)
	);

	for($row=0;$row<4;$row++){
		
		for($col=0;$col<4;$col++){
			echo $emp[$row][$col]," ";
	  }
	 echo"</br>";
	}
	
?>
</body>
</html>