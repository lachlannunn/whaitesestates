<?php

Include 'dbconnect.php';
?>
<h2> Register new user </h2>
<p> Please complete below </p>
<form action="signup.php" method="post">
  first name:<br> 	<input type="text" name="firstname" value="">
  <br>
  Last name:<br> 	<input type="text" name="surname" value="">
  <br>
  Email:<br> 		<input type="text" name="email" value="">
  <br>
  Phone number:<br> <input type="text" name="phone" value=""> 
  <br>
  Login:<br> 		<input type="text" name="login" value="">
  <br>
  Password:<br> 	<input type="password" name="password" value="">
  <br>				<input type="submit" name="submit" value="Sign up">
</form>
<?php
if (isset($_REQUEST['submit']))
{
	// echo 'form values submited';
	$firstname = $_REQUEST['firstname'];
	$surname = $_REQUEST['surname'];
	$email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$login = $_REQUEST['login'];
	$password = $_REQUEST['password'];
	$sql = "INSERT INTO users (firstname, surname, email, phone, login, password)
			VALUES ('$firstname', '$surname', '$email', '$phone', '$login', '$password')";
if (mysqli_query($conn, $sql)) {
	echo 'your account has been created. <a href="login.php"> Click here to login </a>';
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}
}
?>