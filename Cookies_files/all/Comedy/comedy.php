<!DOCTYPE HTML>
<?php
	//---------------- Include -------------------//
	require __DIR__ . '../../function.php' ;
	//require '../function.php' ;

	//---------------- Variables -------------------//
	$_HERE = array("Place" => "Central Quad", "Path" =>"Comedy");
	global $preference ;
			
	// print_r($_HERE) ; // TEST to display the content of $_HERE
	echo ($_HERE['Place']) ;
	echo ($_HERE['Path']) ;

	//---------------- START ---------------- //
?>
	
<html>
<head>
</head>
	<body>
		<?php

			if(isset($_COOKIE['preference'])) {				// WARNING !! THE NAME OF THE VARIABLES HERE ARE WRONG IT CAN CAUSES PROBLEM BECAUSE OF CONFLICT BETWEEN VARIABLES !! IT'S SOMETHING THAT WE HAVE TO TAKE CARE
				$preference = unserialize($_COOKIE['preference']);
				//echo 'preference1 ' . $preference['preference1'] . ' is set <br>' ;
				//echo 'langage ' . $preference['langage'] . ' is set <br>' ;
			} else {
				//echo 'preference is not set' ;
				redirect("home") ;
			}
			//echo $preference['langage'] ;
			//echo get_include_path();
			echo preferences("English") ;
			//echo preferences($preference['langage']) ;

		?>

		
	</body>
</html>