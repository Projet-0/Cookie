<?php
$age = array("Peter" => 35, "Ben" =>37, "Joe" => 43);

$jsonobj = '{"Peter":35, "Ben":37, "Joe":43}' ;

$jsonmixed = '{"Peter":35, "Ben":37, "Joe":43, "Langage":["Spanish":"petit texte des familles","Fr":"petit texte different"]}' ; // This is a string same as jsonobj

$obj = json_decode($jsonobj); // The data are stored in a object call $obj   This object is an stdClass object
$arr = json_decode($jsonobj,true); // The data are stored in an array called $arr This object is an array


$objmixed = json_decode($jsonmixed, true); // This line causes issues, it returns NULL




//echo $objmixed["Langage"] ;
//$arrmixed = json_decode($objmixed->Langage,true);

echo $obj->Peter . '<br>'; 	// display the value associate to Peter from the object
echo $arr["Peter"] . '<br>';	// display the value associate to Peter from the array


foreach($obj as $key => $value){	// display the different value associate to each element from an object
	echo $key . "=>" .$value . "<br>" ;
}

foreach($arr as $key => $value) { // display the different value associate to each element from an array
	echo $key . "=>" . $value . "<br>" ;
}


parse_str($jsonmixed, $split) ;
var_dump($split) ;

//var_dump($jsonobj) ;
//echo "<br>" . $jsonmixed["Peter"] ;




?>