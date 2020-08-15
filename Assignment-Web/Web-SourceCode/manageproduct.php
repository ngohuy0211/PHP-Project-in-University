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
			margin: 70px 70px 70px 70px;
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
			width: 1500px;
			height: 4000px;
			border: 1px solid #000000;
			margin-top: 20px;
		}
		.detail1
		{
			margin: 12px 12px 12px 12px;
		}
		.logout
		{
			width: 100px;
			height: 50px;
			float: left;
			margin-top: 70px;
			margin-bottom: 70px;
			font-size: 20px;
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
		.trai
		{
			float: left;
			width: 900px;
			height: 100%;
		}
		.giua
		{
			float: left;
			width: 300px;
			height: 100%;
			margin-left: 0px;
		}
		.phai
		{
			float: left;
			width: 300px;
			height: 100%;
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
		<div class="logout">
			<div class="detail1">
				<a href="logout.php">Log-Out</a>
		</div>
		</div>
	</div>
	<div class="topnav" style="font-size: 18px">
		<a href="manageproduct.php">ManageProduct</a>
		<a href="manageaccount.php">ManageAccount</a>
		<a href="">MyAccount</a>
	</div>
	</div>
	<div class="than">
		<div class="trai">
			<table border="1" width="890px" height="300px">
				<tr>
					<th>ProductID</th>
					<th>ProductName</th>
					<th>Price</th>
					<th>Image</th>
					<th>ProductDetail</th>
					<th>CatId</th>
				</tr>
			<?php
				require_once './dp.php';
				$sql = "SELECT * FROM product";
				$rows = query($sql);
				for ($i=0; $i < count($rows); $i++) 
				{ 
			?>		
					<tr>
						<td><?=$rows[$i][0]?></td>
						<td><?=$rows[$i][1]?></td>
						<td><?=$rows[$i][2]?></td>
						<td><?=$rows[$i][3]?></td>
						<td><?=$rows[$i][4]?></td>
						<td><?=$rows[$i][5]?></td>
					</tr>
			<?php
				}
			?>
			</table>
		</div>
		<div class="giua">
			<div style="font-size: 25px">Add Product</div><br>
			<form method="POST" action="AdminAddProduct.php"> ProductID <br>
				<input type="text" name="productid" size="40"><br> ProductName <br>
				<input type="text" name="productname" size="40"><br> Price <br>
				<input type="text" name="price" size="40"><br> Image <br>
				<input type="text" name="image" size="40"><br> ProductDetail <br>
				<input type="text" name="productdetail" size="40"><br> CatId <br>
				<input type="text" name="catid" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form><br>
			<div style="font-size: 25px">Delete Product</div><br>
			<form method="POST" action="AdminDeleteProduct.php"> 
			ProductID<br><input type="text" name="productid" size="40"><br>
			<input id="button" type="submit" name="submit" value="Delete">
			</form>
		</div>
		<div class="phai">
			<div style="font-size: 25px">Update Product</div>
			<form method="POST" action="AdminUpdateProductName.php"><br>New ProductName <br>
				<input type="text" name="productname" size="40"> <br> ProductID <br>
				<input type="text" name="productid" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form>
			<form method="POST" action="AdminUpdatePrice.php"><br>New Price <br>
				<input type="text" name="price" size="40"> <br> ProductID <br>
				<input type="text" name="productid" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form>
			<form method="POST" action="AdminUpdateImage.php"><br>New Image <br>
				<input type="text" name="image" size="40"> <br> ProductID <br>
				<input type="text" name="productid" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form>
			<form method="POST" action="AdminUpdateProductDetail.php"><br>New ProductDetail <br>
				<input type="text" name="productdetail" size="40"> <br> ProductID <br>
				<input type="text" name="productid" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form>
			<form method="POST" action="AdminUpdateCatid.php"><br>New CatID <br>
				<input type="text" name="catid" size="40"> <br> ProductID <br>
				<input type="text" name="productid" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
</body>
</html>