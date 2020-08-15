<!DOCTYPE html>
<html>
<head>
	<title>Get data</title>
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
?>
<body>
<?php
	//Lay du lieu client gui len bang bien toan cuc $_Get hoac $_POST
	if (isset($_POST['user']) && isset($_POST['pass'])) 
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if (!$user || !$pass)
   		{
        	echo "Please enter all of your account and password!! <br>
        	<a href='javascript: history.go(-1)'>Come Back</a>";
        	exit;
    	}
		//tao cau truy van
		$sql = "SELECT * FROM account WHERE username='" . $user . "' AND password='" . $pass . "'";
		//chay cau truy van
		$rows = query($sql);

		if (count($rows)==0)
		{
			//neu khong co dong nao
			echo "Login fail!";
		}
		else
		{
			$sql = "SELECT * FROM account WHERE username='" . $user . "' AND password='" . $pass . "' AND position = 1";
			$rows1 = query($sql);
			if (count($rows1)==1)
			{
				header("location:http://localhost:8080/Assigment/Admin.php");
			} 
			else
			{
				header("location:http://localhost:8080/Assigment/customer.php");
			}
		}
	}
?>
</body>
</html>