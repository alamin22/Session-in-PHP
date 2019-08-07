<?php
ob_start();
session_start();
if ($_SESSION['man']!='alamin') {
	header('location:loginForm.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Valid_User_Page </title>
	<style type="text/css">
		*{margin:0;padding: 0;}
		.menu {
			width: 100%;
			height: 50px;
			background: black;
			list-style: none;
		}
		.menu ul li{
			float: right;
			line-height: 50px;
			width: 7%;
			height: 50px;
			text-align: center;
		}
		.menu ul li a{
			text-decoration: none;
			color: white;
			display: block;
		}
			.menu ul li a:hover{
			background: blue;
		}
	</style>
</head>
<body>
	<div class="menu">
		<ul>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
	<center>
		<h3>This is only for valid user page</h3>
    <section>
    	<strong>Dear User,</strong>
    	<p>Welcome to the valid user page.this is only for you.</p>
    </section>

	</center>
    

       
</body>
</html>