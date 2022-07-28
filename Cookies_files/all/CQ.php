<!DOCTYPE HTML>
<?php
	//---------------- Include -------------------//
	require __DIR__ . '/function.php' ;

	//---------------- Variables -------------------//
	$_HERE = array("place" => "central quad");
	global $preference ;

	//---------------- Check if the cookie is set ---------------- //

	if(isset($_COOKIE['preference'])) {		
		$preference = unserialize($_COOKIE['preference']);
	} else {
		//echo 'preference is not set' ;
		redirect('home') ;
	}

?>
	
<html>
<head>
		<link rel="stylesheet" href="./style/style-page.css">
</head>
	<body>
	<div class="title">
		<h1>DIT Grangegorman Central Quad</h1>
		
		<a href="CQ.php"><img src="./img/tu-dublin-logo.svg" ></a>
	</div>
	<div class='content'>	
		<h2><?php echo get_json($_HERE['place'],$preference['type'],$preference['language'],'title') ; ?></h2>
		<img src="<?php echo get_json($_HERE['place'],$preference['type'],$preference['language'],'image') ; ?>">
		<p><?php echo get_json($_HERE['place'],$preference['type'],$preference['language'],'paragraph') ;?></p>
		
	</div>
	</body>
</html>