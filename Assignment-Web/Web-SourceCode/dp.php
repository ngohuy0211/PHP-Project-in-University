<?php
//ket noi co so du lieu
$hostname = 'localhost';
$username = 'root';
$password= '';
$dbname= 'hpshop';
$port= 3306;
//tao ket noi
function query($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	$result = $conn->query($sql);
	if (!$result) 
	{
		die($conn->error);
	}
	$rows = mysqli_fetch_all($result);
	return $rows;
}

function execsql($sql)
{
	global $hostname;
	global $username;
	global $password;
	global $dbname;
	global $port;
	$conn = new mysqli($hostname, $username, $password, $dbname, $port);
	$result = $conn->query($sql);
	return $result;
}
?>