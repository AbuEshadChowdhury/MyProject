<?php
	require('config.php');

	   if(isset($_POST["email"]) && isset($_POST["password"])){
	   		$email = $_POST["email"];
	   		$password = $_POST["password"];

	   		$sql = "SELECT * FROM User WHERE email='$email' AND password='$password')";
		    $result = mysqli_query($conn,$sql);
      		//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

		    if(count($result) > 0) {
		         //session_register("myusername");
		         //$_SESSION['login_user'] = $myusername;
		         
		         header("location: ../create_class.html");
		         $msg = "Login successful";
		      }else {
		         $msg = "Your Login Name or Password is invalid";
		      }

		     echo '$msg';
	   }
?>