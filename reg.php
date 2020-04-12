<?php session_start();
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
	if(isset($_POST['sup']))
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$mail= $_POST['mail'];		
		$phn = $_POST['phn'];


		/*$quer= mysqli_query("SELECT * from user where email='$mail'");
		if ($conn->query($quer) === TRUE) {
			echo '<script language="javascript">';
			echo 'alert("User Already Exists")';
			echo '</script>';
		//echo "New record created successfully";

		} 
		else{*/
		$query= mysqli_query($conn,"SELECT * from user where email='$mail'");
		$row=mysqli_num_rows($query);
		if($row==0)
		{
			$sql = "INSERT INTO user (name, email, pass,phone)
			VALUES ('$name','$mail', '$pass','$phn')";
		//	}
			if ($conn->query($sql) === TRUE) {
				
				header("location: index.html");
				echo '<script language="javascript">';
				echo 'alert("Thank You for Signing Up")';
				echo '</script>';

			//echo "New record created successfully";

			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("User Already Exists")';
			//echo 'window.location.href= "http://localhost/login/login/src/index.php"';
			echo '</script>';
			

		}
		//header("location: index.html");

			$conn->close();
	}

	
	if(isset($_POST['sin']))
	{
		$username=$_POST['email'];
		$password=$_POST['passw'];
		
		$_SESSION['superhero'] = $username;

		$conn=mysqli_connect("localhost","root","","opt");
		

		$query= "SELECT * from user where pass='$password' AND email='$username'";
		//$row=mysqli_num_rows($query);
		$result = $conn->query($query);
		if ($result->num_rows == 1) 
		{
			while($row = $result->fetch_assoc()) 
			{
				$atype = $row['accounttype'];
			}
				$_SESSION['superhero'] = $username;
				
				if($atype=='Customer')
					header("location: dashboard.php");
					if($atype=='Admin')
					header("location: admindashboard.php");

		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Incorrect Username or Password")';
			echo '</script>';
		}
		mysqli_close($conn);
	}

	if(isset($_POST['buy']))
	{
		$left = $_POST['left'];
		$right = $_POST['right'];
		//$mail= $_POST['mail'];		
		//$phn = $_POST['phn'];
		$sql1 = "INSERT into orders (pid, productname,price,lpower,rpower,cid,imgad) 
		values ($pidd,'$namee',$price,$left,$right,$a,$pidd)";
//		$sql2 = "INSERT INTO orders (orderid, pid, productname, price, lpower, rpower, status,orderdate, cid, imgad) 
//		VALUES (NULL,$row['pid'],'$row['productname']',$row['dprice'],$left,$right,NULL,NULL,$a,$row['pid']);";
//		INSERT INTO `orders` (`orderid`, `pid`, `productname`, `price`, `lpower`, `rpower`, `status`, `orderdate`, `cid`, `imgad`) 
		//VALUES (NULL, '20001', 'aaa', '123', '12', '12', 'Processing', 'current_timestamp()', '10001', '20001');
		// "INSERT INTO user (name, email, pass,phone)
		//VALUES ('$name','$mail', '$pass','$phn')";
		//	}
		if ($conn->query($sql1) === TRUE) {
			//;header("location: index.html");
			echo '<script language="javascript">';
			echo 'alert("Thank You for Signing Up")';
			echo '</script>';
			//echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>