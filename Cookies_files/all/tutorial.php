<!DOCTYPE HTML>
<?php

$cookie_name ;
$cookie_name = "user" ;
$cookie_value = "John Doe" ;
setcookie($cookie_name, $cookie_value, time() + (86400 * 7 ), "/") ; 
?>


<?php
	function myTEST($x) {
	$a = 5 ;
	$b = 2 ;
	return $a * $x + $b ;

}


?>

<html>
<head>
	<script>
		function myFunction() {
			var x;
			var r = confirm (" Choose History or Art path");
			if (r == true ) {
				x = "you choose History path ! " ;
			}
			else {
				x = "you choose Art path !" ;
			}
			document.getElementById("demo").innerHTML = x ;
	} 

	</script>
</head>
<body>

<?php
$cookie_name = "new_name" ; // add this line to check if the cookie's name is set
$cookie_value = "John Fisher" ; // 
setcookie($cookie_name, $cookie_value, time() + (86400 * 7 ), "/") ; 


// Name statement
if(!isset($_COOKIE[$cookie_name])) {
	echo "Cookie name " .$cookie_name . " is not set!" ;
} 
else {
	echo "Cookie '"  . $cookie_name . "' is set!<br>" ;
	echo "<br> name is " . $_COOKIE[$cookie_name] . " <br>" ;
	echo mytest(1) . "<br>" ;

}


// Value statement
if(!isset($_COOKIE[$cookie_value])) {
	echo "Cookie value " .$cookie_value . " is not set!" ;
} 
else {
	echo "Cookie '"  . $cookie_value . "' is set!<br>" ;
	echo "<br> value is " . $_COOKIE[$cookie_value] . " <br>" ;
	echo mytest(1) . "<br>" ;

}








if( count($_COOKIE) > 0) {
	echo "cookies are enabled. <br>" ;
}
else {
	echo "cookies are disabled <br>" ;
}


//setcookie($cookie_name, $cookie_value, time() - 3600 ) ; // Add this line to close the cookie

?>

<button onClick="myFunction()" > Choose the path ! </button>
<p id="demo"></p>



<p><strong>Note :</strong> You might have to reload the page to see the value of the cookie .</p> ;

</body>
</html>