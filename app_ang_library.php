<?php
require_once 'dbconnect.php';
function get_all_expenses() {
	$sql = 'SELECT * FROM app_expenses';
	$server = '50.62.209.120:3306';
	$user = 'jyotirmay';
	$pass = 'Shaan@123.';
	$db = 'jyotirmay_appdata';
	$con = get_dbobj($server, $user, $pass, $db);
	$result=mysqli_query($con,$sql);
	if (!$result)
	{
		return 'No Value rerurn or something is wrong...';		
	} 
	$retstring = '[{';
	if($row=$result->fetch_assoc()) {
		$retstring .= '"'.$row['id'].'":'.json_encode($row).',';
    }
    $retstring = rtrim($retstring, ",");
    $retstring .= '}]';
	
    mysqli_free_result($result);
	mysqli_close($con);
    return $retstring;
}