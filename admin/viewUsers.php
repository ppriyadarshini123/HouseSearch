<?php
/**
 *
 * PHP course project
 * url: admin/viewUsers.php
 */

include("../includes/utilities.php");

//   THIS IS THE BEGINNING OF THE MARKUP

include("../includes/top.php");
include("../includes/header.php");
include("../admin/adminNav.php");
?>

<main>
        <section class="mainBody">           
                <div class="contain">
                  <section class="searchResults">  
                       <div class="headingCenter">
                            <h1>View Users</h1>
                        </div><!--align heading-->
                            <div class="resUserDetails flexCont"><!--result product-->
                                <div class="uRole alignView">
                                   <p class="uRole"></p>
                                </div><!--/uRole-->
                                <div class="uName alignView">
                                  <div>                                   
                                    <p class="uName"></p>
                                  </div><!--/uName-->
                                </div><!--/uName-->
                                <div class="uEmail alignView">
                                  <p class="uEmail"></p>
                                </div><!--/uEmail-->
                                <div class="uPhone alignView">
                                  <p class="uPhone"></p>
                                </div><!--/uPhone-->                                
                                 <div class="resAction vCentre">
                                  <a href="" class="btnSubmit">Delete</a>
                                </div><!--/resAction-->
                              </div>  <!--/resUserDetails-->             
                    </section><!--/searchResults-->
                </div><!--/container-->
            </section><!--/ mainBody-->
        </main>

 <?php include("../includes/footer.php");?> 

</div><!--/wrapper-->
    <!-- add your JS here-->
    <script src="build/js/index.js"> </script>
    <!--/ your JS here-->
</body>
</html>

