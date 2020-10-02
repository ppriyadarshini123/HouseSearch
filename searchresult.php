<?php
/**
 *
 * PHP project
 * url: /searchresult.php
 */


########   HERE SOME PHP SCRIPTING FOR THE PAGE    #########
include("includes/utilities.php");

if(isset($dbok) && $dbok && isset($_GET['q'])){

  // DO NOT FORGET VALIDATION AND SANITATION!!!!
  $key = $_GET['q'];
  /*
    mysql wildcards:
    * => any value
    % => any substring
    _ => any character
  */


  $q = "
    SELECT `house`.`hID`, `rentsale`.`rsRentSale`, `house`.`city`, `house`.`postcode`, `house`.`price`, `house`.`streetname`,
    `house`.`details`, `house`.`image`, `house`.`floorplan`, `house`.`housenumber`
FROM `house` , `rentsale`
LEFT JOIN `house` ON `rentsale`.`rsID` = `house`.`rsID`  AND `house`.`rsID` = `rentsale`.`rsID` 
Where `house`.`rsID` = '$key' OR `house`.`postcode` = '$key' OR `house`.`price` = '$key'     
  ";

  $res = $mysqli->query($q);

  if( $res->num_rows > 0 ) {
    $prods = [];

    while($row = $res->fetch_assoc()){
      array_push($prods, $row);
    } // while
    // trace($prods);
  } else {
    displayMsg('Could not find product or something went frong.', 'f');
  } # select check

} ### search logic

########   THIS IS THE BEGINNING OF THE MARKUP    #########

include("includes/top.php");
include("includes/header.php");
####
?>
</header>
<main>
          
            <section class="mainBody">
                <div class="cont flexCont">
                    <div class="homeCol">
                        <div class="topCol">
                            <img src="build/imgs/Symbols/symbol.png" width="31" height="31" alt="red logo">
                            <h3>Commitment</h3>
                        </div><!--/topCol-->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Quam ante, egestas tristique consequat ut, pulvinar a ante.
                        </p>
                        <a href="#" class="btn moreBtn ckBtn">read more</a>
                    </div><!--/homeCol-->
                    <div class="homeCol">
                        <div class="topCol">
                            <img src="build/imgs/Symbols/symbol.png" width="31" height="31" alt="red logo">
                            <h3>Quality</h3>
                        </div><!--/topCol-->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Quam ante, egestas tristique consequat ut, pulvinar a ante.
                        </p>
                        <a href="#" class="btn moreBtn ckBtn">read more</a>
                    </div><!--/homeCol-->
                    <div class="homeCol">
                        <div class="topCol">
                            <img src="build/imgs/Symbols/symbol.png" width="31" height="31" alt="red logo">
                            <h3>Trust</h3>
                        </div><!--/topCol-->
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Quam ante, egestas tristique consequat ut, pulvinar a ante.
                        </p>
                        <a href="#" class="btn moreBtn ckBtn">read more</a>
                    </div><!--/homeCol-->
                </div><!--/mainBody container-->
            </section><!--/ mainBoby-->
            
            
            
            
            
        </main>

 <?php include("includes/footer.php");?> 

</div><!--/wrapper-->
    <!-- add your JS here-->
    <script src="build/js/index.js"> </script>
    <!--/ your JS here-->
</body>
</html>
