<!DOCTYPE html>
<html lang="en">

<html>
   <head>
      <title>Signin/Signup</title>

      <link rel="stylesheet" href="style.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">-->

      


   </head>
   <body>
<!--<form method="post" action="reg.php">-->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<div class="wrapper">
        <div class="container">
            <h1>Sign In / Sign Up</h1>
            <div class="container-sign" id="container-sign">
                <div class="signin-signup">
                    <div class="sign-in">
                        <h2>Sign in</h2>
                        <form method="post" action="php/reg.php">
                            <input type="email" placeholder="Email" required>
                            <input type="password" placeholder="Password" required>
                            <a href="#">Forgot your Password?</a>
                            <button type="submit" name="sin" value="submit" >sign in</button>
                        </form>
                    </div>
                    <div class="sign-up">
                        <h2>Create Account</h2>
                        <form method="post" action="php/reg.php">
                            <input type="text" name="name" placeholder="Name" required>
                            <input type="email" name="mail" id="" placeholder="Email" required>
                            <input type="password" name="pass" placeholder="Password">
                            <button type="submit" name="sup" value="submit" >sign up</button>
                        </form>
                    </div>
                </div>
                <div class="mark">
                    <div class="mark-sign-in">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button id="btn-sign-in">sign in</button>
                    </div>
                    <div class="mark-sign-up">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button id="btn-sign-up">sign up</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
        <script src="script.js"></script>
    <!--<<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
   </body>
</html>

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
if(isset($_POST['sup']))
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$mail= $_POST['mail'];
		$sql = "INSERT INTO user (name, email, pass)
		VALUES ('$name','$mail', '$pass')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
?>
