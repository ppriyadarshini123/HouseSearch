<?php
/**
 *
 * PHP course project
 * url: /index.php
 */
include("includes/utilities.php");

//   THIS IS THE BEGINNING OF THE MARKUP

include("includes/top.php");
include("includes/header.php");
?>
</div><!--/topHeader-->
</header>
<main>
    <section class="mainBody">           
        <div class="container housedetails">
            <section class="searchResults">
                <div class="resHouse flexCont"><!--result house-->                   
                    <img src="build/imgs/house-432x239.png" width="432"  height="239" title=""
                         alt="">                   
                </div>  <!--/resHouse-->                 
                    <div class="flexAlign headingHouseDetails">
                        <div class="divDetails" id="divDetails">Details</div>                        
                        <div class="divFloorPlan" id="divFloorPlan">Floor Plan</div>                       
                    </div><!--/flexAlign-->
                    <div class="resStreetName" id="clickedDivDetails">
                        <div>
                            <p class="hRentSale">House for Rent/Sale</p>
                        </div>
                        <div>
                            <p class="hPrice">Price: £ 400k</p>
                        </div>
                        <div>                                   
                            <p class="hStreet">35 Osier Way, Cambridge, CB1 5FR</p> 
                        </div><!--/resStreetName-->  
                        <div>                                   
                            <p class="hDetails">4 bedroom detached house for sale</p> 
                        </div><!--/resDetails-->
                        <div>                                   
                            <p class="hPD">Property Dealer: Malcolms</p> 
                        </div><!--/resPD-->
                        <div class="flexAlignInline">
                            <div class="alignBtnFav">
                               <input name="AddtoFavourites" type="submit" class="btnSubmit" value="Add to Favourites">
                            </div><!--/align-->
                            <div class="alignBtnFav">
                                <input name="ContactPropertyDealer" type="submit" class="btnSubmit" value="Contact Property Dealer">
                            </div><!--/align-->
                        </div>
                    </div><!--/clickedDivDetails-->
                    <div class="clickedDivFloorPlan" id="clickedDivFloorPlan">
                        <img src="build/imgs/floor-plan.jpg" width="200" height="200" alt="alt"/>                        
                    </div><!--/clickedDivFloorPlan-->               
        </div><!--/container housedetails-->
    </section><!--/searchResults-->
</div><!--/mainBody container-->
</section><!--/ mainBody-->
</main>

<?php include("includes/footer.php"); ?> 

</div><!--/wrapper-->

<!-- add your JS here-->
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="build/js/index.js"></script>
<!--/ your JS here-->
</body>
</html>
