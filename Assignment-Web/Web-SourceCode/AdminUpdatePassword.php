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
	if (isset($_POST['pass']) && isset($_POST['id'])) 
	{
		$pass = $_POST['pass'];
        $id = $_POST['id'];
		if (!$pass || !$id)
   		{
        	echo "Please enter all of your password and ID!! <br>
        	<a href='javascript: history.go(-1)'>Come Back</a>";
            exit;
    	}
		//tao cau truy van
        $sql = mysql_query("UPDATE account SET password='$pass' WHERE ID = '$id'");
		//chay cau truy van
	    if ($sql)
           {
                header("location:http://localhost:8080/Assigment/manageaccount.php");
           }
	    else
	        echo "Update Fail!. <a href='manageacount.php'>Try again!</a>";
	}
?>
</body>
</html>