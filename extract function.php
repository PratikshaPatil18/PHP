<html>
<body>
<?php
echo"Extracting variables";
$a["CO"]= "Computer";
$a["IT"]="Information Technology";
$a["ME"]="Mechanical";
extract($a);
echo "<br>". $CO;
echo "<br>".$IT;
echo "<br>".$ME;
?>
</body>
</html>
