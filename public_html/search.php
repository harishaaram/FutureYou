<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php

    // 2. Select a database to use 
    

        $category = $_POST[c];
        $alma = $_POST[a];
        $aoe = $_POST[aoe];
        $resident = $_POST[r];
        $age = $_POST[d];
        $birth = $_POST[birth];


    if ($category){
        $query .= "SELECT * FROM personality WHERE category LIKE '%$category%'";
    if ($alma){
        $query .= "AND alma LIKE '%$alma%'";
        }
    if ($aoe){
        $query .= "AND aoe LIKE '%$aoe%'";
        }
    if ($resident){
        $query .= "AND resident LIKE '%$resident%'";
        }
    if ($age){
        $query .= "AND age LIKE '%$age%'";
        }
        if ($birth){
        $query .= "AND birth_place LIKE '%$birth%'";
        }
    }
        elseif ($alma){
        $query .= "SELECT * FROM personality WHERE alma LIKE '%$alma%'";
    if ($category){
        $query .= "AND category LIKE '%$category%'";
        }
    if ($aoe){
        $query .= "AND aoe LIKE '%$aoe%'";
        }
    if ($resident){
        $query .= "AND resident LIKE '%$resident%'";
        }
    if ($age){
        $query .= "AND age LIKE '%$age%'";
        }
        if ($birth){
        $query .= "AND birth_place LIKE '%$birth%'";
        }
    }
        elseif ($aoe){
        $query .= "SELECT * FROM personality WHERE aoe LIKE '%$aoe%'";
    if ($alma){
        $query .= "AND alma LIKE '%$alma%'";
        }
    if ($category){
        $query .= "AND category LIKE '%$category%'";
        }
    if ($resident){
        $query .= "AND resident LIKE '%$resident%'";
        }
    if ($age){
        $query .= "AND age LIKE '%$age%'";
        }
        if ($birth){
        $query .= "AND birth_place LIKE '%$birth%'";
        }
    }
        elseif ($resident){
        /**/
        $query .= "SELECT * FROM personality WHERE resident LIKE '%$resident%'";
    if ($alma){
        $query .= "AND alma LIKE '%$alma%'";
        }
    if ($aoe){
        $query .= "AND aoe LIKE '%$aoe%'";
        }
    if ($category){
        $query .= "AND category LIKE '%$category%'";
        }
    if ($age){
        $query .= "AND age LIKE '%$age%'";
        }
        if ($birth){
        $query .= "AND birth_place LIKE '%$birth%'";
        }
    }
        elseif ($age){
        $query .= "SELECT * FROM personality WHERE age LIKE '%$age%'";
    if ($alma){
        $query .= "AND alma LIKE '%$alma%'";
        }
    if ($aoe){
        $query .= "AND aoe LIKE '%$aoe%'";
        }
    if ($resident){
        $query .= "AND resident LIKE '%$resident%'";
        }
    if ($category){
        $query .= "AND category LIKE '%$category%'";
        }
        if ($birth){
        $query .= "AND birth_place LIKE '%$birth%'";
        }
    }

elseif ($birth){
        $query .= "SELECT * FROM personality WHERE birth_place LIKE '%$birth%'";
    if ($alma){
        $query .= "AND alma LIKE '%$alma%'";
        }
    if ($aoe){
        $query .= "AND aoe LIKE '%$aoe%'";
        }
    if ($resident){
        $query .= "AND resident LIKE '%$resident%'";
        }
    if ($category){
        $query .= "AND category LIKE '%$category%'";
        }
        if ($age){
        $query .= "AND age LIKE '%$age%'";
        }
    }    

        $result = mysqli_query($db,$query);
        
    
?>
<?php include("includes/header.php");?>
            <div class="section-header">
                <h4>Results</h4>
            </div>
            <h3><?php
    // 3. Perform database query
    //$result = mysqli_query( $db, $query);
    //if (!$result) {
      //  die("Database query failed: " . mysql_error());
    //}
    
    // 4. Use returned data\

    if (mysqli_num_rows($result) == 0) {
        echo "<h3>You will Find him soon...</h3>";
    }
    while ($row = mysqli_fetch_array($result)) {
        echo "<label type=\"text\"><a href='content.php?0=".$row[0]."
        &1=".$row[1]."&2=".$row[2]."&3=".$row[3]."&4=".$row[4]."
        &5=".$row[5]."&6=".$row[6]."&8=".$row[8]."''>".$row[0]."</a></label><br>";
    }
    
    ?>
    </h3>
                                 
        </div>
    </div>
</section>
 
<h3><a href="index.php">Return to Main page</a></h3>                     
<?php require("includes/footer.php");?>
