<?php
	// Array
	$my_array = array (1,2,3,4);
	// We reference array items with integer keys

	echo $my_arr[0];
	echo $my_arr[1];
	echo $my_arrr[2];
	echo $my_arr[3];
	echo '<br \>';

	// Array can also contains string 

	$my_arr = array('apples', 'oranges', 'pears', 'plums');
	echo $my_arr[0];
	echo $my_arr[1];
	echo $my_arrr[2];
	echo $my_arr[3];
	echo '<br \>';	


	//Associative arrays 
	$my_arr = array ('fruits' =>'apple', 'colour'=>'red', 'college'=>'DIT', 'course_year'=>2  );
	// See how an array can contain a combination of types (
	// both string and integers in this example)

	echo $my_arr['fruit'];
	echo $my_arr['colour'];
	echo $my_arr['college'];
	echo $my_arr['course_year'];
	echo '<br />';
	
	// Associatievs arrays
	echo $my_arr[0];
	echo $my_arr[1];
	echo $my_arr[2];
	echo $my_arr[3];
	echo '<br />';

	// String concatenation with array items
	echo 'My favourite fruit is the' . $my_arr['fruit'] . 'My favourite color is ' . $my_arr['colour'] . 'My college is ' . $my_arr['college'] . ' And I am in year ' . $my_arr['course_year'] ; 
	echo '<br />';

?>