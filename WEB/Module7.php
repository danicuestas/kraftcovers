<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

		<?php

function nameDisplay(){
	echo "My name is: ";
	$FirstName = "Dani";
	$LastName = "Cuestas";
	
	$FullName = $FirstName . " " . $LastName;
	print $FullName;
}

nameDisplay();

?>
	
	<br>
	
	<?php
	
echo "My name backwards would be: " ;
	
echo strrev("Dani Cuestas");

	
	?>
	
<body>
</body>
</html>