<!DOCTYPE HTML>
<?php
	//---------------- Include -------------------//
	//include the file containing the functions (redirect() and get_json())
	require __DIR__ . '/function.php' ;

	//---------------- Variables -------------------//
	// variable $_HERE which is a kind of id card of the web page
	$_HERE = array("place" => "greenway hub");
	global $preference ;

	//---------------- Check if the cookie is set ---------------- //

	//if the cookie entitled "preference" is not set, you will be redirected to the home page where you can
	//choose the parameters of the cookies.

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
		<h1>DIT Grangegorman</h1>
		<a href="CQ.php"><img src="./img/tu-dublin-logo.svg" ></a>
		
		<!-- this division is a global presentation of the campus. It stays for every web page of this site -->
	</div>
	<div class='content'>	

		<!-- this division is here to adapt the content of the web page following the cookies chosen by the user  -->
		
		<h2><?php echo get_json($_HERE['place'],$preference['type'],$preference['language'],'title') ; ?></h2>
		<!--displays the title following the cookie "preference" and the place -->

		<img src="<?php echo get_json($_HERE['place'],$preference['type'],$preference['language'],'image') ; ?>">
		<!-- displays the picture following the place -->

		<p><?php echo get_json($_HERE['place'],$preference['type'],$preference['language'],'paragraph') ;?></p>
		<!-- displays the paragraph that describe the place following the cookie "preference" and the place -->

		
		
	</div>
	</body>
</html>