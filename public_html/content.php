<?php include("includes/header.php");?>

            <h3><table>
                <tr><td>
                <label type="text">Name:</label>
                <label style = "color:blue;"><?php echo "".$_GET[0]."";?>
            </td></tr>
            <tr><td>
                <label type="text">Year of Birth: </label><label style = "color:blue;"><?php echo "".$_GET[1]."";?></label>
            </td></tr>
            <tr><td>
                <label type="text">Birthplace: </label><label style = "color:blue;"><?php echo "".$_GET[2]."";?></label>
            </td></tr>
            <tr><td>
                <label type="text">Residence: </label><label style = "color:blue;"><?php echo "".$_GET[3]."";?></label>
            </td></tr>
            <tr><td>
                <label type="text">Alma mater: </label><label style = "color:blue;"><?php echo "".$_GET[4]."";?></label>
            </td></tr>
            <tr><td>
                <label type="text">Category: </label><label style = "color:blue;"><?php echo "".$_GET[5]."";?></label>
            </td></tr>
            <tr><td>
                <label type="text">Area of Expertise: </label><label style = "color:blue;"><?php echo "".$_GET[6]."";?></label>
            </td></tr>
             <tr><td>
                <label type="text">Why is he a personality?: </label><label style = "color:blue;"><?php echo "".$_GET[8]."";?></label>
            </td></tr>
</table>
<a href="index.php">Return to Main page</a></h3>

<?php require("includes/footer.php");?>