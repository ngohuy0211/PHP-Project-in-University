<!DOCTYPE html>
<html>
<head>
	<title>Get data</title>
<?php
    $ketnoi['host'] = 'localhost';
    $ketnoi['dbname'] = 'hpshop';
    $ketnoi['username'] = 'root';
    $ketnoi['password'] = '';
    @mysql_connect(
        "{$ketnoi['host']}",
        "{$ketnoi['username']}",
        "{$ketnoi['password']}")
    or
        die("Can not connect to database");
    @mysql_select_db(
        "{$ketnoi['dbname']}") 
    or
        die("Can not choose database");
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
        if (mysql_num_rows(mysql_query("SELECT username FROM account WHERE username='$user'")) > 0)
        {
        echo "Username is already in use. Please choose another username!. <a href='javascript: history.go(-1)'>Come back</a>";
        exit;
        }
		//tao cau truy van
		$sql = mysql_query("INSERT INTO account (username, password) VALUES ('$user', '$pass')");
		//chay cau truy van
	    if ($sql)
           {
                header("location:http://localhost:8080/Assigment/manageaccount.php");
           }
	    else
	        echo "ADD is fail!. <a href='manageacount.php'>Try again!</a>";
	}
?>
</body>
</html>