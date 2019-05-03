<?php
	require('config.php');

	   if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])){
	   		$username = $_POST["name"];
	   		$email = $_POST["email"];
	   		$password = $_POST["password"];

	   		$sql = "INSERT into User (name, email, password) 
		      						VALUES('$username', '$email', '$password')";
		    $result = mysqli_query($conn,$sql);

		    if($result) {
		         //session_register("myusername");
		         //$_SESSION['login_user'] = $myusername;
		         
		         header("location: ../create_class.html");
		         $msg = "Registration successful";
		      }else {
		         $msg = "Your Login Name or Password is invalid";
		      }

		     echo '$msg';
	   }
?>