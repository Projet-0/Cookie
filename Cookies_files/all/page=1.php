<!DOCTYPE HTML>
<?php
	//---------------- Include -------------------//
	require __DIR__ .'/function.php' ;
	//---------------- Variable ------------------//
	global $preference ;
	//---------------- Beginning of code -------------------//
	if(count($_COOKIE) > 0) {
	echo 'There are ' . count($_COOKIE) . ' cookies saved <br>' ;
} else {
	echo 'There are no cookie <br>' ;
}

	if(isset($_COOKIE['preference'])) {
	$preference = unserialize($_COOKIE['preference']);
	echo 'preference1 ' . $preference['preference1'] . ' is set <br>' ;
	echo 'langage ' . $preference['langage'] . ' is set <br>' ;
} else {
	echo 'preference is not set' ;
	redirect("home") ;
}


	
?>

<html>


<head>
	<title> DIT GG visit program</title>
</head>

<body>
<?php
	if(isset($_COOKIE['preference'])) {
	echo " <h1>The cookie is set !! </h1>" ;
	redirect(strtolower($preference['preference1']) ) ;
} else {
	echo " <h1>The cookie is not set unfortunately. Go back to the previous page </h1>" ;
}
	

?>

</body>
	




</html>