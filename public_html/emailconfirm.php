<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php

$username = $_GET[username];
$code = $_GET[code];


$query = "SELECT * FROM users WHERE username = '$username'";

        $result = mysqli_query($db,$query);

        if ($result) {

				echo "<h3 style=\"text-align:center;\">Successfully created.</h3>";
			} else {
				$message = "The user could not be created.";
				$message .= "<br />" . mysqli_error();
				echo "<h3 style=\"text-align:center;\">".$message."</h3>";
			}

while($row = mysqli_fetch_assoc($result))
{
	$db_code = $row[confirmcode];
}
if($code == $db_code)
{

	mysqli_query($db, "UPDATE users SET confirmed = '1' WHERE username = '$username'");
	mysqli_query($db, "UPDATE users SET confirmcode = '0' WHERE username = '$username'");

	echo "<h3 style=\"text-align:center;\">Thank You. Your email has been confirmed and You may now Login.</h3>";

}
?>
<?php include("includes/footer.php"); ?>