<?php
$host = "studentdb-maria.gl.umbc.edu";
$user = "andylo1";
$pass = "andylo1";
$db = "andylo1";

$con = new mysqli($host,$user,$pass,$db);
if (!$con) {
	echo "There are some problem while connecting the database";
}
// there are no errors so let's get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
// Now we have collected the form data in Variables
// let's insert them to table
$qry = "INSERT INTO `table1`(`name`, `email`, `phone`, `msg`) VALUES ('$name', '$email', '$phone', '$msg')";
$insert = mysqli_query($con,$qry);
if(!$insert) {
		echo "There are some problem while inserting data";
}
else {
		echo "Data Inserted";
}
?>