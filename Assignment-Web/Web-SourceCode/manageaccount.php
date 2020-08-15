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
			width: 100%;
			height: 2500px;
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
			width: 600px;
			height: 100%;
			margin: 0 auto;
		}
		.giua
		{
			float: left;
			width: 400px;
			height: 100%;
			margin-left: 10px;
		}
		.phai
		{
			float: left;
			width: 400px;
			height: 100%;
			margin-left: 10px;
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
			<table border="1" width="600px" height="300px">
				<tr>
					<th>ID</th>
					<th>User name</th>
					<th>Password</th>
				</tr>
			<?php
				require_once './dp.php';
				$sql = "SELECT * FROM account";
				$rows = query($sql);
				for ($i=0; $i < count($rows); $i++) 
				{ 
			?>		
					<tr>
						<td><?=$rows[$i][0]?></td>
						<td><?=$rows[$i][1]?></td>
						<td><?=$rows[$i][2]?></td>
					</tr>
			<?php
				}
			?>
			</table>
		</div>
		<div class="giua">
			<div style="font-size: 25px">Add Account</div><br>
			<form method="POST" action="AdminAddAccount.php"> User Name <br>
				<input type="text" name="user" size="40"><br> Password <br>
				<input type="password" name="pass" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form><br>
			<div style="font-size: 25px">Delete Account</div><br>
			<form method="POST" action="AdminDeleteAccount.php"> 
			ID<br><input type="text" name="id" size="40"><br>
			<input id="button" type="submit" name="submit" value="Delete">
			</form>
		</div>
		<div class="phai">
			<div style="font-size: 25px">Update</div>
			<form method="POST" action="AdminUpdateUser.php"><br>New User name <br>
				<input type="text" name="user" size="40"> <br> ID <br>
				<input type="text" name="id" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form><br>
			<form method="POST" action="AdminUpdatePassword.php"><br>New Password <br>
				<input type="text" name="pass" size="40"> <br> ID <br>
				<input type="text" name="id" size="40"><br>
				<input id="button" type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>
</div>
</body>
</html>