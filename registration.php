<?php
include"connection.php";

 if (isset($_POST['R_value'])) {
 	$email=$_POST['email'];
 	$password=$_POST['password'];
 	$confirm_password=$_POST['confirm_password'];
  if ($password==$confirm_password) {
 	$Encrypt_password=sha1(md5($password));
 	$sql="insert into login(email,password)value(?,?)";
 	$stmt=$conn->prepare($sql);
 	$arr=array($email,$Encrypt_password);
  	$stmt->execute($arr);
 	}
  else{
     echo"<b>Password Not Maching!Try Again</b>";
 	}
   
 }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Session Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="//code.jquery.com/jquery-1.10.2.js"></script>


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
     	 <h3>Registration Here</h3>
     	<table>
     		<tr>
     			<td>Email: </td> <td><input type="email" name="email" required></td>
     		</tr>
     		<tr>
     			<td>Password: </td> <td><input type="password" name="password" id="password" required></td>
     		</tr>
     		<tr>
     			<td>Confirm Password: </td> <td><input type="password" name="confirm_password" id="confirm_password" required></td><td><span id="error"></span></td>
     	    </tr>
     		<tr>
     			<td> </td> <td><input id="submit" type="submit" value="Submit" name="R_value"></td>
     		</tr>
     	</table>
     </form><br>
      <strong>Already Subscriber? <a href="loginForm.php">Click Here</a></strong>

	</center>
</body>
</html>
<script type="text/javascript">

	$(document).on('keyup','#confirm_password',function(){
           var password=$('#password').val();
           var confirm_password=$("#confirm_password").val();
           
          if(password!=confirm_password){
            $("#error").html("Password Not Match").css("color","red");
          }else{
          	 $("#error").html("Password Match").css("color","green");
          }
          
  

	});
</script>