<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "opt";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		
		if(isset($_POST['forget']))
		{
			$username=$_POST['ft'];
			

			$conn=mysqli_connect("localhost","root","");
			$db=mysqli_select_db($conn,"opt");

			$query= mysqli_query($conn,"SELECT * from user where email='$username'");
			$row=mysqli_num_rows($query);
			if($row == 1)
			{
				header("location: dashboard.html");
			}
			else
			{
				//header("location: index.html");
				echo '<script language="javascript">';
				echo 'alert("There is no User")';
				//echo $username;
				echo '</script>';
			}
			mysqli_close($conn);
		}
	}
?>