<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css" type=text/css" media="screen" >
</head>
<body>
<table> 
<?php
for($i = 0; $i < 10; $i++)
{
	echo "<tr>";
	for($j = 0; $j < 10; $j++)
	{
		echo "<td></td>";	
	} 
	echo "</tr>";
}
?>
</table>
</body>
</html>
