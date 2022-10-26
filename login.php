<?php
session_start() ;
	include("connections.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];
		if(!empty($user_name) && !empty($password)){
		
			$query="select * from users where user_name= '$user_name' limit 1";
			$result=mysqli_query($con,$query);
			if($result){

				if($result && mysqli_num_rows($result)>0){

					$user_data= mysqli_fetch_assoc($result);

					if($user_data['password']==$password){
						$_SESSION['user_id']=$user_data['user_id'];
						header("location:index.php");
						die();
						

					}
				}
		}
			echo" wrong user name or password";
		}
		else{
			echo" enter valid info";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<title>Login</title>
</head>
<body>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background-image: url("https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000");
			backgroud-size: cover;
			background-position: center;
		}
		#text{
			height: 40px;
			border-radius: 20px;
			padding: 4px;
			border: solid thin #aquamarine;
		}

		#button{
			padding: :10px;
			width: 100px;
			color: white;
			background-color: purple;
			border: 5px;
			border-radius: 20px;
		}

		#box{
			background-color: lavender;
			margin: auto;
			width: 300px;
			padding: 20px;
			margin: 8% auto 0;
		}
		
       hr{
       	margin-top: 10px;

       }

       
	</style>
	
<div id="box">

	<form method="post" class="box">
		<div style="font-size: 25px; margin: 5px; color: purple;">login</div>
		<input id="text" type="text" name="user_name" class="textbox" placeholder=" username">
			<br><br>
		<input id="text" type="password" name="password" class="textbox" placeholder=" password">
			<br><br>
		<input id="button" type="submit" value="login" class=" submit">
			<br><br>
		<hr>
		<a href="signup.php" class="button">
          <span class="glyphicon glyphicon-user"></span> signup
        </a>
		
	</form>
</div>
</body>
</html>