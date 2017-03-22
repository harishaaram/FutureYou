<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("includes/header.php");?>
<h2>Enter your personalities detail:<h2>
        <h3><form action ="insert.php" method="POST">

                <label type="text">Personality Name</label></br>
                <input style="width: 80%;" type="text" class="form-control" name="n" placeholder="Name of the Personality"/>

            </br></br>
                <label type="text">Year of Birth</label></br>
                <input style="width: 80%;" type="text" class="form-control" name="bi" placeholder="Eg: 1869, 1991...."/>

            </br></br>
                <label type="text">Birthplace[state]</label></br>
                <input style="width: 80%;" type="text" class="form-control" name="b" placeholder="Eg: Goa, New york..."/>

            </br></br>
                <label type="text">Residence</label></br>
                <input style="width: 80%;" type="text" class="form-control" name="r" placeholder="Eg: London, chennai..."/>

            </br></br>
                <label type="text">Alma mater</label></br>
                <input style="width: 80%;" type="text" class="form-control" name="a" placeholder="College Universities(if more than one add that also)"/>

            </br></br>
                <label type="text">Category</label></br>
                <input style="width: 80%;" type="text" class="form-control" name="c" placeholder="Eg: Education, Cinema, Entreprenuership..."/>

            </br></br>
                <label type="text">Area of Expertise</label></br>
                <input style="width: 80%;" type="text" class="form-control" name="aoe" placeholder="Eg: Physicist, soldier..."/>

            </br></br>
                <label type="text">At what age he got Famous?</label></br>
                <input style="width: 80%;" type="text" class="form-control" name="d" />


            </br></br>
                <label type="text">What are his significant contribution that made him a personality whom we know?</label></br>
                <textarea style="width: 80%;" type="text" class="form-control" name="w" placeholder="Comment..."></textarea>
            </br></br>
                <button class="btn btn-success btn-lg" name="submit">Submit</button>

        </form>
<a href="index.php">Return to Main page</a></h3>
<?php include("includes/footer.php");?>