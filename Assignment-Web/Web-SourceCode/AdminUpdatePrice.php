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
	if (isset($_POST['price']) && isset($_POST['productid'])) 
	{
		$price = $_POST['price'];
        $productid = $_POST['productid'];
		if (!$price || !$productid)
   		{
        	echo "Please enter all information!! <br>
        	<a href='javascript: history.go(-1)'>Come Back</a>";
            exit;
    	}
		//tao cau truy van
        $sql = mysql_query("UPDATE product SET price='$price' WHERE productid = '$productid'");
		//chay cau truy van
	    if ($sql)
           {
                header("location:http://localhost:8080/Assigment/manageproduct.php");
           }
	    else
	        echo "Update Fail!. <a href='manageproduct.php'>Try again!</a>";
	}
?>
</body>
</html>