<?php

$cookie_name = "user" ;
$cookie_value = "Hello it is the value of the cookie";
$cookie_expire = time()+(60*60*24*7); // I set cookies for 1 week;
setcookie($cookie_name, $cookie_value, $cookie_expire , '/'); //  '/' allow us to use the same cookie for the whole tree structure ; 

?>
<!DOCTYPE HTML>
<html>
<head><title> Cookies Page</title></head>
<body>
	<?php
	$user = isset($_COOKIE["user"])? $_COOKIE["user"] : "" ; // Cookie is case sensitive so
	//it has to be capitalzed ;

	echo "This is the latest cookies: " . $user;


	?>

	

</body>
</html>