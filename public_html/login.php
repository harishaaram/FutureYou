<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	
	if (logged_in()) {
		redirect_to("index.php");
	}

	
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.
		$errors = array();

		// perform validations on the form data

		$username = trim(($_POST[username]));
		$password = trim(($_POST[password]));
		$hashed_password = sha1($password);
		
		if ( empty($errors) ) { 
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT * FROM users WHERE username = '$username' AND hashed_password = '$hashed_password' LIMIT 1";
			$result_set = mysqli_query($db,$query);

			if (mysqli_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysqli_fetch_array($result_set);
				if($found_user[confirmed] != 1)
				{
					die("<h1>Please Verify by Clicking the link sent to your given email Id</h3></h1>");

				}
				else{
				$_SESSION[user_id] = $found_user[user_id];
				$_SESSION[username] = $found_user[username];
				
				redirect_to("index.php");}
			} else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
		
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
		$username = "";
		$password = "";
	}
?>
<?php include("includes/header.php"); ?>
            
            <h3> Login
			<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
			<?php if (!empty($errors)) { display_errors($errors); } ?>
			<form action="login.php" method="post">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Login" /></td>
				</tr>
				
			</table>
			</form>

<a href="reset.php">Forget Password</a></br>
<a href="index.php">Return to Main page</a></h3>

<?php include("includes/footer.php"); ?>