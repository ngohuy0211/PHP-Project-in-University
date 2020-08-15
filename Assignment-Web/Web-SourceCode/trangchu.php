<!DOCTYPE html>
<html>
<head>
	<title>Online shop</title>
	<style type="text/css">
		body
		{
			background-color: #C8C8C8;
		}
		.trang
		{
			width: 1500px;
			height: 100%;
		}
		.dautrang
		{
			width: 1500px;
			height: 200px;
			background-color: #85AAF6;
		}
		.logo
		{
			width: 200px;
			height: 180px;
			margin-top: 10px;
			margin-left: 20px;
			float: left;
		}
		.search
		{
			width: 800px;
			height: 50px;
			float: left;
			margin: 40px 70px 70px 70px;
		}
		.login
		{
			width: 70px;
			height: 50px;
			float: left;
			margin-top: 70px;
			margin-bottom: 70px;
			font-size: 20px;
		}
		.registration
		{
			width: 200px;
			height: 50px;
			float: right;
			margin-top: 70px;
			margin-bottom: 70px;
			margin-right: 70px;
			font-size: 20px;
		}
		.detail1
		{
			margin: 12px 12px 12px 12px;
		}
		.detailOfSearch
		{
			width: 770px;
			height: 50px
			box-sizing: border-box;
			border: 1px solid black;
			border-radius: 4px;
			outline:none;
			padding: 16px 14px;
		}
		.topnav 
		{
		    overflow: hidden;
		    background-color: #414040;
		}
		.topnav a
		{
		   	float: left;
		  	display: block;
		    color: #FFFFFF;
		    padding: 18px 20px;
		    text-decoration: underline;
		}
		.topnav a:hover
		{
		    background-color: #A29D9D;
		   	color: #1722FC;
		}
		.than
		{
			width: 100%;
			height: 2500px;
			border: 1px solid #000000;
			margin-top: 20px;
		}
		.detail1
		{
			margin: 12px 12px 12px 12px;
		}
		.khoi
		{
			float: left;
			border: 1px solid #525050;
			width: 300px;
			height: 330px;
			margin: 10px auto;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
			margin-left: 60px;
		}
		.khoi a
		{
			text-decoration: none;
		}
		.tieude
		{
			background-color: #8C8C8C;
			font-size: 18px;
			font-weight: bold;
			color: #000000
		}
	</style>
</head>
<body>
<div class="trang">
	<div class="dautrang">
		<div class="logo">
			<img src="image/1.PNG" width="180px" height="180px">
		</div>
		<div class="search">
			<marquee direction="right"><div style="font-size: 20px">HP SHOP: Buy And Sell Phones Online</div></marquee>
        	<input type="text" name="search" placeholder="Search..." class="detailOfSearch">
		</div>
		<div class="login">
			<div class="detail1">
				<a href="dangnhap.html">Login</a>
			</div>
		</div>
		<div class="registration">
			<div class="detail1">
				<a href="dangky.html">Create new account</a>
			</div>
		</div>
	</div>
	<div class="topnav" style="font-size: 18px">
		<a href="trangchu.php">Home</a>
<?php
require_once './dp.php';
$sql = "SELECT * FROM category";
$rows = query($sql);
for($i=0; $i<count($rows); $i++)
{
?>
	<a href="trangchu.php?CatId=<?=$rows[$i][0]?>"><?=$rows[$i][1]?></a>
<?php
}
?>
		<a href="">Cart</a>
		<a href="">Order</a>
		<a href="">Help</a>
		<a href="">MyAccount</a>
	</div>
<div class="than">
<?php
if(isset($_GET['CatId']))
{
	$CatId = $_GET['CatId'];
	$sql = "SELECT * FROM product WHERE CatId=" . $CatId;
}
else
	$sql = "SELECT * FROM product";
$rows = query($sql);
for($i=0; $i<count($rows); $i++)
{
?>
	<div class="khoi">
		<div class="tieude"><?=$rows[$i][1]?></div>
		<div>
			<a href="product.php?id=<?=$rows[$i][0]?>">
			<img src="<?=$rows[$i][3]?>" alt="" width="300px " height="300px"> 
			</a>
		</div>
	</div>
<?php
}
?>
</div>
</div>
</body>
</html>