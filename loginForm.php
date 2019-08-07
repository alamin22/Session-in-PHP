<?php
include"connection.php";

 if (isset($_POST['submit_value'])) {
 	$email=$_POST['email'];
 	$password=$_POST['password'];
 	$sql="select * from login where email='$email'AND password='$password'";
 	$stmt=$conn->prepare($sql);
  	$stmt->execute();
  	$data=$stmt->fetchAll();
  	$count=count($data);

 if ($count>0) {
 		session_start();
 		$_SESSION['man']='alamin';
 		header('location:valid_user.php');
 	}
 	else{
 	   header('location:loginForm.php');	
 	}
 }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Session Login</title>
	<style type="text/css">
		td{
			padding: 6px 12px;
		}
		body{
			margin-top:120px; 
			background: #dddd;
			width: 100%;
			
		}
		input{
			width: 323px;
			height: 24px;		}
		#submit{
			width: 80px;
			height: 32px;
			background: blue;
			border: none;
			float: right;
			color: white;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<center>
   <h3></h3>
     <form method="post">
     	 <h3>Login</h3>
     	<table>
     		<tr>
     			<td>Email: </td> <td><input type="email" name="email" required></td>
     		</tr>
     		<tr>
     			<td>Password: </td> <td><input type="password" name="password" required></td>
     		</tr>
     		<tr>
     			<td> </td> <td><input id="submit" type="submit" value="Submit" name="submit_value"></td>
     		</tr>
     	</table>
     </form><br>

     <strong>Subscribe Not Yet? <a href="registration.php">Click Here</a></strong>

	</center>
   
</body>
</html>