<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php");?>

            <div class="section-header">
                <h4>Contact Us</h4>
                <span class="bar green"></span>
            </div>
            <form method="POST">
            <h3>Any query, Let us Know.
            	<h1 ><textarea name="comment" style="width:80%;" placeholder="Type your comment here."></textarea><br>
            		<input name ="commentmail"type="email" placeholder="Your email Id" style="width:80%;"/>
            	</h1></br>
            	<button type="submit" style="text-align: center;" name="submit"> Submit </button></h3>
            	</form>
                    

<h3><a href="index.php">Return to Main page</a></h3>
<?php 

if (isset($_POST['submit'])) {

	$msg = $_POST[comment];
       mail("harishgandhi.r@gmail.com",$_POST[commentmail], $msg, "FutureYou: Dont Reply to this mail");

           redirect_to("index.php");
            }	?>

<?php include("includes/footer.php");?>