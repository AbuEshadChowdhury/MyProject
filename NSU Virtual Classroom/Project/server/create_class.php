<?php
	require('config.php');

	   if(isset($_POST["institute"]) && isset($_POST["course_name"]) && isset($_POST["course_code"]) && isset($_POST["instructor_name"])){
	   		$institute = $_POST["institute"];
	   		$course_name = $_POST["course_name"];
	   		$course_code = $_POST["course_code"];
	   		$instructor_name = $_POST["instructor_name"];

	   		$sql = "INSERT into Classroom (institute, course_name, course_code, instructor_name) VALUES('$institute', '$course_name', '$course_code', '$instructor_name')";
		    $result = mysqli_query($conn,$sql);

		    if($result) {
		    	 header("location: ../create_class.html");
		         echo "Class created successfully";
		      }else {
		         echo "Failed to create class";
		      }

	   }
?>