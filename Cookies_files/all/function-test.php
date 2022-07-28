<?php
// This function allows us to redirect, it will be used with cookie's data 
	function redirect($url) {
	$string = "http://127.0.0.1/" .$url . ".php"  ; //
	header("Location: $string" ); // 
}

	function preferences($cookie_langage,$relative_path) {
	
		$jsondata = file_get_contents($relative_path);
		$json = json_decode($jsondata,true);
		global $result ;

		foreach($json['Preference'] as $preference) {
			if ($preference['lang'] == $cookie_langage) {
				$result = $preference['paragraph'] ;
			}
		}
		echo $result ;
		return $result ;
}


?>
