<?php  
	//----------- Explanation redirect -----------//
		/* This function allows us to redirect, it will be used with cookie's data 
		Take care to precise simple quote when you call the function */

	function redirect($url) {
		$string = "http://127.0.0.1/" .$url . ".php"  ; //
		header("Location: $string" ); // 
}

	//----------- Explanation get_json -----------//
		/* We will get the data from the data.json file and display them on the different web pages
	Variables :
		$json -> array containing all of the data from data.json
		$content -> the content we want to display (ie title,paragraph, image)   		
		$cookie_type -> Path we want i.e history...
		$cookie_language -> Language associate 

	We have to sort the json file in order to get the right information filters by the parameters. So we decided to use a foreach loop that will check for each "element" if type and language are right.
	Finally we get the content associate to the right
		

 */  


	function get_json($cookie_type,$cookie_langage,$content) {

		$jsondata = file_get_contents("data.json");                                                     // If you fill the second parameter with false it will set the use_include_path variable to false 
		$json = json_decode($jsondata,true);         
		global $result ;

		foreach($json['content'] as $preference) {                                                      // It's a For loop, we will look over each element of the array content and we will called it $preference
			if ($preference['type'] == $cookie_type && $preference['language'] == $cookie_langage) {    // If the type of the element (i.e 'art','history'...) is the one set for the cookie AND the language is the one choose for the cookie 
				$result = $preference[$content] ;                                                       // $result get the content of the json file and then we return $result
			}
		}
		return $result ;
}

?>