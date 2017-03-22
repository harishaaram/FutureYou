<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php
if (isset($_POST['searchval'])) { // Form has been submitted.

        
        $searchq = ($_POST['searchval']);

       $query = mysqli_query("SELECT * FROM personality WHERE age ='$searchq'");
        $result = mysqli_query($db,$query);
      }
      echo "".$result[age]."" ;
    echo "hhaha";
?>

