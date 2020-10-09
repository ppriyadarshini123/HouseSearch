<?php
/**
 *
 * PHP course project
 * url: admin/signin.php
 */

include("../includes/utilities.php");

//   THIS IS THE BEGINNING OF THE MARKUP

include("../includes/top.php");
include("../includes/header.php");
include("../admin/adminNav.php");
?>

<main>
        <section class="mainBody">           
                <div class="container">
                  <section class="searchResults">                                  
                            <div class="resHouse flexCont"><!--result product-->
                                <div class="hImage align">
                                  <img src="" width="106"  height="106" title=""
                                       alt="">
                                </div><!--/hImage-->
                                <div class="resStreetName align">
                                  <div>                                   
                                    <p class="hStreet"></p>
                                  </div>
                                </div><!--/resStreetName-->
                                <div class="resCity align">
                                  <p class="hCity"></p>
                                </div><!--/resCity-->
                                <div class="resPrice align">
                                  <p class="hPrice"></p>
                                </div><!--/resPrice-->
                                 <div class="align">
                                     <a class="btnSubmit" href="">Add to favourites</a>
                                </div><!--/resPrice-->
                                 <div class="resAction vCentre">
                                  <a href="" class="btnSubmit">Delete</a>
                                </div><!--/resAction-->
                              </div>  <!--/resHouse-->             
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
