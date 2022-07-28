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
		<title>Central Quad <?php echo preferences($preference[	])?></title>

	</head>
	<body>
	 <p>
		echo preferences($preference['langage']) ;
	</p>

	</body>
</html>