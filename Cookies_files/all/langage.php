<?php
	$jsondata = file_get_contents("display.json");
	$json = json_decode($jsondata,true);
	//echo $json['display'][1]['paragraph'];



	function test($var) {
		return($var == "English");
}

	// But recup un paragraphe associe a une langue
	

	function preferences($cookie_langage) {
	
		$jsondata = file_get_contents("display.json");
		$json = json_decode($jsondata,true);
		global $result ;
		

		foreach($json['Preference'] as $preference) {
			if ($preference['lang'] == $cookie_langage) {
				$result = $preference['paragraph'] ;
			}
		}
	return $result ;
}


echo preferences("English") ;
	

?>
	