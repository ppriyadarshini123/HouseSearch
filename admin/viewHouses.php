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
        <div class="contain">
            <section class="searchResults">
                <div class="headingCenter">
                    <h1>View Houses</h1>
                </div><!--align heading-->
                <div class="resHouse flexCont"><!--result house-->
                    <img src="../build/imgs/house-432x239.png" width="432"  height="239" title=""
                         alt="Click for House Details">
                    <div class="resStreetName">
                        <div>
                            <p class="hRentSale">House for Rent/Sale</p>
                        </div><!--house for rent/sale-->
                        <div>
                            <p class="hPrice">Price: £ 400k</p>
                        </div><!--price-->
                        <div>                                   
                            <p class="hStreet">35 Osier Way, Cambridge, CB1 5FR</p> 
                        </div><!--/Street Name-->  
                        <div>                                   
                            <p class="hDetails">4 bedroom detached house for sale</p> 
                        </div><!--/Details-->
                        <div class="alignBtn">                            
                            <button type="button" class="btnSubmit">Add to Favourites</button>
                        </div><!--/alignBtn-->
                    </div><!--/resStreetName-->
                </div>  <!--/resHouse-->             
            </section><!--/searchResults-->
        </div><!--/mainBody contain-->
    </section><!--/ mainBody-->
</main>

<?php include("../includes/footer.php"); ?> 

</div><!--/wrapper-->
<!-- add your JS here-->

<!--/ your JS here-->
</body>
</html>
