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
                </div><!--align heading-->
                <div class="resHouse flexCont"><!--result house-->
                    <a class="hImage" href="houseDetails.php">
                        <img src="build/imgs/house-432x239.png" width="432"  height="239" title=""
                             alt="Click for House Details">
                    </a><!--/hImage-->
                    <div class="resStreetName">
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
                       
                        <div class="alignBtn">
                            <input name="Add to Favourites" type="submit" class="btnSubmit" value="Add to Favourites">
                        </div><!--/align-->
                    </div><!--/resStreetName-->
                </div>  <!--/resHouse-->             
            </section><!--/searchResults-->
        </div><!--/mainBody container-->
    </section><!--/ mainBody-->
</main>

<?php include("includes/footer.php"); ?> 

</div><!--/wrapper-->
<!-- add your JS here-->
<script src="build/js/index.js"></script>
<!--/ your JS here-->
</body>
</html>
