<!DOCTYPE HTML>

<?php
	$cookie_name = 'user' ; // We have to declare it even if it's already existed, to use it after to get the previous cookie value
	global $cookie_value_test ; 
	$cookie_value_test =  $_COOKIE[$cookie_name] ;


?>

<html>
<head>
</head>


<body>

<?php

	echo "<br> Value is " . $cookie_value_test . " <br>" ;



if( count($_COOKIE) > 0) {
	echo "cookies are enabled. <br>" ;
}
else {
	echo "cookies are disabled <br>" ;
}


?>

</body>
</html>