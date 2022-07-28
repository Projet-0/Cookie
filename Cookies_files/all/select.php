<!DOCTYPE HTML>
<?php
$cookie_name = "user" ;
$cookie_value = "John Doe" ;
setcookie($cookie_name, $cookie_value, time() + (86400 * 7 ), "/") ; 
?>


<?php
	function myTEST($x) {
	$a = 5 ;
	$b = 2 ;
	return $a * $x + $b ;
	global $select_val ;

}


?>

<html>
<head>
</head>
	<body>
		<form action="" method="post">
		<select name="Preference">
			<option value="History" >History</option>
			<option value="Art" >Art</option>
			<option value="Fun" >Fun</option>
			<option value="Comedy" >Comedy</option>
			<option value="Default" >Default</option>
		</select>
		<input type = "submit" name="submit" value="Get selected value" />
		</form>
		<?php
		if(isset($_POST['submit'])) {
		$select_val = $_POST['Preference'] ; 
		echo "You have selected :" . $select_val ;

		$cookie_value = $_POST['Preference'] ;	//We will try to modify the cookie here with the value selected on the drop down menu
		echo "Test to see if the value of the cookie was modify" . $cookie_value ; 
		}
		?>

	</body>
</html>