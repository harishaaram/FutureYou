<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.

		
		$fname = ($_POST[fname]);

		$lname = ($_POST[lname]);

		$username = ($_POST[username]);
		$password = ($_POST[password]);

		$cpassword = ($_POST[cpassword]);

		$email= ($_POST[email]);
		$hashed_password = sha1($password);

		if ( $username != "" && $password != "" && $email != "" && $lname !="" 
			&& $fname != "" && $password == $cpassword)
			{
			$confirmcode = rand();
			$query = "INSERT INTO users (fname, lname,username, hashed_password,email,confirmed,confirmcode) 
			VALUES ('$fname','$lname','$username', '$hashed_password' , '$email', '0', '$confirmcode')";
        $msg = "Hey $username,


Please verify your account with us by visiting the following link.

http:www.futureyou.in/emailconfirm.php?username=$username&code=$confirmcode

Thanks
FutureYou Team";

      
        $result = mysqli_query($db,$query);
       mail($email,"Confirm email", $msg, "FutureYou: Dont Reply to this mail");
       


				redirect_to("login.php");

		}
		 else {
		 	if ($password != $cpassword) {
		 		$message = "Password does not match";
		 	}

			else if (count($errors) == 1) {
				$message = "There was 1 error in the form";
			} else {
				$message = "There were errors in the form";
			}
		}	
	} 
?>
<?php include("includes/header.php"); ?>

            <h3>Create New User
			<?php if (!empty($message)) {echo "<p style=\"color: red; text-align: center;\"class=\"message alert\">" . $message . "</p>";} ?>
			<?php if (!empty($errors)) { display_errors($errors); } ?>
			<form action="new_user.php" method="post">
			<table>
				<tr>
					<td>Firstname:</td>
					<td><input type="text" name="fname" maxlength="30" value="<?php echo htmlentities($fname); ?>" /></td>
				</tr>
				<tr>
					<td>Lastname:</td>
					<td><input type="text" name="lname" maxlength="30" value="<?php echo htmlentities($lname); ?>" /></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>" /></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email"  value="<?php echo htmlentities($email); ?>" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" id="password" maxlength="30" value="<?php echo htmlentities($password); ?>" /></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="cpassword" id="cpassword" maxlength="30" value="<?php echo htmlentities($cpassword); ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Register"/></td>
				</tr>
			</table>
			</form>
<h3><a href="index.php">Return to Main page</a></h3>

<?php include("includes/footer.php"); ?>