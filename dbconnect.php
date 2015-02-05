<?php

//Local database
/*$server = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'app_ang_db';*/

//Jms database.
$server = '50.62.209.120:3306';
$user = 'jyotirmay';
$pass = 'Shaan@123.';
$db = 'jyotirmay_appdata';

function get_dbobj($server, $user, $pass, $db) {
	$con=mysqli_connect($server, $user, $pass, $db);
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	return $con;
}


 // Database Variables (edit with your own server information)
 /*function get_dbobj() {


 // Connect to Database
 $connection = mysql_connect($server, $user, $pass, $db);
 return $connection;
 }*/
?>