<?php
//connect to Mariadb
$conn = mysqli_connect("127.0.0.1", "tudublin", "tudublin") or die(mysqli_error($conn));
//select the database (there could be many on one dbms
mysqli_select_db($conn,"employees") or die(mysqli_error($conn));
//construct a query and issue it to the database
// Anything begining with a dollar sign is parsed as a variable
$result = mysqli_query($conn,"SELECT * FROM employee_data") or die(mysqli_error($conn));
//Close our PHP (for now) and write our HTML page
?>
<html>
<head>
	<title>Employees Page</title>
	<!-- This reloads the page every 10 seconds -->
	<meta http-equiv="refresh" content="10">
</head>
<body>
	<h1>Employee Table</h1>
	<p>

	Here we retrieve the employee records from the `employee_data`
	table in the employees database and write it out as a HTML table.
	</p>
	<p align="center">
		<table border="1" cellpadding="3">
			<tr>
				<th>Name</th>
				<th>Title</th>
				<th>Age</th>
				<th>Years of Service</th>
				<th>Salary</th>
				<th>Perks</th>
				<th>Email Address<th>
			</tr>
<?php
// Now use a PHP while loop to output data as HTML table rows
while($data = mysqli_fetch_array( $result ))
// Retrieve each row in $result & store it in the array '$data'
{
echo "<tr>"; // HTML command to start a table row
echo "<td>" . $data['f_name'] . " " . $data['l_name'] .
"</td>"; // Concatenate the first name and last name with a space between them and wrap it in HTML table data (<td>) tags
echo "<td>" . $data['title'] . "</td>";
// the array keys are referenced by column names from database
echo "<td>" . $data['age'] . "</td>";
echo "<td>" . $data['yos'] . "</td>";
echo "<td>" . $data['salary'] . "</td>";
echo "<td>" . $data['perks'] . "</td>";
echo "<td>" . $data['email'] . "</td>";
echo "</tr>";// Close the table row
}
?>
</table>
</p>
</body>
</html>