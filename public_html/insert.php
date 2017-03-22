
<?php include("includes/functions.php");?>
<?php include("includes/header.php");?>
<?php
    if (isset($_POST[submit])) {
    
    require_once("includes/connection.php");

    mysqli_query($db,"SELECT * FROM personality");

    //mysqli is not working check it...

    $n = ($_POST[n]);
    $bi = ($_POST[bi]);
    $b = ($_POST[b]);
    $r = ($_POST[r]);
    $a = ($_POST[a]);
    $c = ($_POST[c]);
    $aoe = ($_POST[aoe]);
    $w = ($_POST[w]);
    $d = ($_POST[d]);

mysqli_query($db,"INSERT INTO personality (name, birth_year, birth_place, resident, alma, category, aoe, facts,age)
    VALUES ('$n', '$bi', '$b', '$r', '$a', '$c', '$aoe', '$w', '$d')");

mysqli_close($db);
}
?>
	<h3 style="text-align: center;color:darkgreen;">Kudos! Successfully Submitted</h3>
    <br><br>
    <h4 style="text-align: center;">
     <a href="insertform.php">Contribute Again</a></h4>
     
<h3><a href="index.php">Return to Main page</a></h3>

<?php require("includes/footer.php");?> 