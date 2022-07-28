<?php
	$preference = ['name' => 'name_test', 'email' => 'test@test.com' , 'age' => 32  ] ;
	$preference = serialize($preference); // it allows us 


	setcookie('preference',$preference, time() + (86400 *7), "/" ) ;


	if(isset($_COOKIE['preference'])) {
		$preference = unserialize($_COOKIE['preference']); // now it's an array
		echo 'The value of the cookie s name is : ' . $preference['name'] . '<br>' ;
		echo 'The value of the cookie s address is : ' . $preference['email'] . '<br>' ;
		echo 'The value of the cookie s age is : ' . $preference['age'] . '<br>' ;
}


?>