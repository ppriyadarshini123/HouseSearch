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
include("includes/banner.php");
?>
</div><!--/topHeader-->
</header>
<main>
    <section class="mainBody">           
        <div class="contain">
            <section class="searchResults">
                <div class="headingCenter">
                    <h1>Search Results</h1>
                </div><!--headingCenter-->
                <div class="resHouse flexCont"><!--result house-->
                    <a class="hImage" href="houseDetails.php">
                        <img src="build/imgs/house-432x239.png" width="432"  height="239" title="Click for House Details"
                             alt="Click for House Details">
                    </a><!--/hImage-->
                    <div class="resStreetName">
                        <div>
                            <p class="hRentSale">House for Rent/Sale</p>
                        </div><!--/hRentSale-->
                        <div>
                            <p class="hPrice">Price: £ 400k</p>
                        </div><!--/hPrice-->
                        <div>                                   
                            <p class="hStreet">35 Osier Way, Cambridge, CB1 5FR</p> 
                        </div><!--/hStreet-->  
                        <div>                                   
                            <p class="hDetails">4 bedroom detached house for sale</p> 
                        </div><!--/hDetails-->
                        <div class="alignBtn">                            
                             <button type="button" class="btnSubmit">Add to Favourites</button>
                        </div><!--/alignBtn-->
                    </div><!--/resStreetName-->
                </div>  <!--/resHouse-->             
            </section><!--/searchResults-->
        </div><!--/mainBody container-->
    </section><!--/ mainBody-->
</main>

<?php include("includes/footer.php"); ?> 

</div><!--/wrapper-->
<!-- add your JS here-->

<!--/ your JS here-->
</body>
</html>
