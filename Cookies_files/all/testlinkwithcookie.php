<!DOCTYPE HTML>
<?php
	//---------------- Include -------------------//
	require __DIR__ .'/function.php' ;
	

	global $preference ;


	if(isset($_COOKIE['preference'])) {
	$preference = unserialize($_COOKIE['preference']);
	echo 'preference1 ' . $preference['preference1'] . ' is set <br>' ;
	echo 'langage ' . $preference['langage'] . ' is set <br>' ;
} else {
	echo 'preference is not set' ;
	redirect("home") ;
}

	echo preferences($preference['langage']) ;

?>