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
        <div class="contain housedetails">
            <div class="headingCenter">
                        <h1>House Details</h1>
                    </div><!--headingCenter-->
            <section class="searchResults">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="build/imgs/house-432x239.png" alt="First slide">
                           </div><!-- carousel-item active-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="build/imgs/house-insideview-432x239.png" alt="Second slide">
                            </div><!-- carousel-item-->
                            <div class="carousel-item">
                                <img class="d-block w-100" src="build/imgs/houseinsideview2-432x239.png" alt="Third slide">
                            </div><!-- carousel-item-->
                        </div><!-- carousel-inner-->
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div><!-- carousel slide-->

                <div class="flexAlign headingHouseDetails">
                    <div class="divDetails" id="divDetails">Details
                    </div> <!-- divDetails-->                       
                    <div class="divFloorPlan" id="divFloorPlan">Floor Plan
                    </div><!-- divFloorPlan-->                 
                </div><!--/flexAlign-->
                <div class="resStreetNameDetails" id="clickedDivDetails">
                    <div>
                        <p class="hRentSale">House for Rent/Sale</p>
                    </div><!-- rent/sale-->
                    <div>
                        <p class="hPrice">Price: £ 400k</p>
                    </div><!-- price-->
                    <div>                                   
                        <p class="hStreet">35 Osier Way, Cambridge, CB1 5FR</p> 
                    </div><!--/StreetName-->  
                    <div>                                   
                        <p class="hDetails">4 bedroom detached house for sale</p> 
                    </div><!--/hDetails-->
                    <div>                                   
                        <p class="hPD">Property Dealer: Malcolms</p> 
                    </div><!--/hPD-->
                    <div class="flexAlignInline">
                        <div class="alignBtnFav">
                            <input name="AddtoFavourites" type="submit" class="btnSubmit" value="Add to Favourites">
                        </div><!--/alignBtnFav-->
                        <div class="alignBtnFav">
                            <input name="ContactPropertyDealer" type="submit" class="btnSubmit" value="Contact Property Dealer">
                        </div><!--/alignBtnFav-->
                    </div><!--/flexAlignInline-->
                </div><!--/resStreetNameDetails-->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="build/js/index.js"></script>
</body>
</html>
