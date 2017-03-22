<?php include("includes/header.php");?>
            <div class="section-header">
                <h4 style=" text-align: center;">Fix any Number of field and make your Search</h4>
                <script type="text/javascript" src="jquery.min.js"></script>
                <script type="text/javascript">
                    function searchq(){
                        var searchtxt = $("input[name='d']").val();

                        $.POST("jqsearch.php", {searchval: searchtxt}, function(output){

                            $("#output").html(output);

                        });
                    }
                </script>




                <form method="POST" action="search.php">

            <h3>
                Recognition at ?(Age)
                </br><input onkeydown="searchq();" style="width:80%;" type="text" name="d" placeholder="Eg: 21, 38"/></br></br>
                <div id= "output"/>

                
                    Alma mater
                    </br><input style="width:80%;" type="text" class="form-control" name="a" placeholder="College Universities(if more than one add that also).."/></br></br>
                
                
                    Category
                    </br><input style="width:80%;" type="text" class="form-control" name="c" placeholder="Eg: Education, Cinema, Entreprenuership..."/></br></br>
                
                
                    Area of Expertise 
                    </br><input style="width:80%;" type="text" class="form-control" name="aoe" placeholder="Eg: Physicist, soldier..."/></br></br>

                        
                    Birthplace
                    </br><input style="width:80%;" type="text" class="form-control" name="birth" placeholder="Eg: Goa, New york..."/></br></br>
                
                
                    Residence
                    </br><input style="width:80%;" type="text" class="form-control" name="r" placeholder="Eg: London, chennai..."/></br></br>
                
                
                
                    <td colspan="2"><input type="submit" name="submit" value="SearchNow" />
                
            </h3>
        </form>
    </div>

<h3><a href="index.php">Return to Main page</a></h3>
<?php include("includes/footer.php");?>