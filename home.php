<!DOCTYPE HTML>

<!---------------------- PHP ---------------------->

<?php
	//---------------- Include -------------------//
	require __DIR__ .'/function.php' ;

	//---------------- Variables -----------------//
	global $personal_information ;
	$personal_information = ['first_name'=>'first_name','age'=>0,'fitness_level'=>'Bad'];
	
	//---------------- START ---------------- //

	if(isset($_POST['submit'])) { 							                // we check if the input 'submit' is done 
	$preference = ['type' => 'type', 'language' => 'language'] ; 	        // We choose to work with an array of preference so the cookie contains an array of data

	$preference['type'] = htmlentities($_POST['type']) ;
	$preference['language'] = htmlentities($_POST['language']) ;
	
	$preference = serialize($preference);                                   // We need to serialiaze the data to set the cookie

	setcookie('preference', $preference, time() + 86400 * 7, "/"); 			// Cookie is called preference, set for 1 week, and reachable for all of the web pages ( because of "/") 		
}
?>

<!---------------- HTML PAGE ------------------>

<html>
<head>
	<link rel="stylesheet" href="./style/style.css">
</head>
	<body>
		<h1>Welcome to DIT</h1>
		<form action="" method="POST">                                      <!--POST associate to the input 'submit' the user fills the form and after the statement check if the input is done -->
			<select name="type">
				<option value="history" >History</option>
				<option value="art" >Art</option>
			</select>
			<select name="language">
				<option value="english" >English</option>
				<option value="french" >French</option>
				<option value="irish" >Irish</option>
				<option value="german" >German</option>
				<option value="spanish" >Spanish</option>

			</select>
		<input type = "submit" name="submit" value="Get selected value" />
		</form>

		<p>Do you consent to give your personal information ?</p>            <!-- Get the agreement (or not) of the user  -->
		<form action="" method="POST"> 
			<input type = "submit" name="agree_submit" value="Consent" />
		</form>	
<?php
	if(isset($_POST['agree_submit']) ) { ?>
		<form action="" method="POST">
			<input type="text" name="first_name" placeholder="First name">
			<input type="text" name="age" placeholder="Age">
			<select name="fitness_level">
				<option value="Good" >Good</option>
				<option value="Medium" >Medium</option>
				<option value="Bad" >Bad</option>
			</select>
			<label for ="fitness_level">Fitness level</label>
			<input type = "submit" name="personal_submit" value="get selected" />
		</form>  
<?php	}	
?>
		<?php
			if(isset($_COOKIE['preference'])) {                             // WARNING !! THE NAME OF THE VARIABLES HERE ARE WRONG IT CAN CAUSES PROBLEM BECAUSE OF CONFLICT BETWEEN VARIABLES !! IT'S SOMETHING THAT WE HAVE TO TAKE CARE
				$preference = unserialize($_COOKIE['preference']);
				echo 'type ' . $preference['type'] . ' is set <br>' ;
				echo 'language ' . $preference['language'] . ' is set <br>' ;
			} else {
				echo 'preference is not set' ;
			}
		?>
	</body>
</html>

<?php
	//Creating connection with the database 
if(isset( $_POST['personal_submit']) ) {                                                // Statement to check if the personal information are set  
 	$personal_information['first_name'] = htmlentities($_POST['first_name']) ; 
	$personal_information['age'] = htmlentities($_POST['age']) ;
	$personal_information['fitness_level'] = htmlentities($_POST['fitness_level']) ;

	
	$conn = mysqli_connect("localhost","tudublin","tudublin", "tudublin_db" ) ;         // Connection to the database Position of the different parameters : server_name, username, password , db_name	

	echo "TEST"	;
	 

	if(!$conn) { 								                                        //Statement to check if the connection failed
		die("Connection failed" . mysqli_connect_error()) ;
	}
	
	$query = "INSERT INTO users (first_name,age,fitness_level) VALUES (" ;              // SQL Request
	//$query .= $personal_information['first_name'] . ",". $personal_information['age'] . "," . $personal_information['fitness_level'] ;
	

	$query .= " ' " . $personal_information['first_name'] . " ' " . "," . $personal_information['age'] . "," . "'" . $personal_information['fitness_level'] . "'"  ;

	$query .= ")" . ";" ;
	
	echo $query ;
	
	mysqli_query($conn,$query) ;
	echo "Fin de test" ;


	if(mysqli_query($conn,$query)) { // Check if the datas were updated into the database     
		echo "We saved your data" ;
	} else {
		echo "Error" . $query . "<br>" . mysqli_error($conn) ;
	}
}
mysqli_close($conn) ;
?>






