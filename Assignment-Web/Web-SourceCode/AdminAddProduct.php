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
	if (isset($_POST['productid']) && isset($_POST['productname']) && isset($_POST['price']) && isset($_POST['image']) && isset($_POST['productdetail']) && isset($_POST['catid'])) 
	{
		$productid = $_POST['productid'];
		$productname = $_POST['productname'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $productdetail = $_POST['productdetail'];
        $catid = $_POST['catid'];
		if (!$productid || !$productname || !$price || !$image || !$productdetail || !$catid)
   		{
        	echo "Please enter all information!! <br>
        	<a href='javascript: history.go(-1)'>Come Back</a>";
            exit;
    	}
        if (mysql_num_rows(mysql_query("SELECT productid FROM product WHERE productid='$productid'")) > 0)
        {
        echo "Product name is already in use. Please choose another Product name!. <a href='javascript: history.go(-1)'>Come back</a>";
        exit;
        }
		//tao cau truy van
		$sql = mysql_query("INSERT INTO product (productid, productname, price, image, productdetail, catid) VALUES ('$productid', '$productname', '$price', '$image', '$productdetail', '$catid')");
		//chay cau truy van
	    if ($sql)
           {
                header("location:http://localhost:8080/Assigment/manageproduct.php");
           }
	    else
	        echo "ADD is fail!. <a href='manageproduct.php'>Try again!</a>";
	}
?>
</body>
</html>