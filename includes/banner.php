<?php
/**
 * Training Dragon
 *
 * PHP course project
 * url: /includes/banner.php
 */
?>


<div class="banner">     
    <div class="container">  
        <h1 class="mainName">Search</h1>
        <div class="tabs">
            <ul class="ultab">
                <li><a>For Sale</a></li>
                <li><a>To Rent</a></li>                    
            </ul>
        </div><!-- tabs -->          
        <div class="redDash"></div><!-- redDash -->

        <div class="fields">
            <div>
                <input name="cityPostcode" type="text" placeholder="City/Postcode" required>
            </div><!-- City/Postcode -->
            <div>
                <input name="min" type="number" placeholder="Min." required>
            </div><!-- Min -->
            <div>
                <input name="max" type="number" placeholder="Max." required>
            </div><!-- Max -->            
        </div>  <!-- fields -->
        <div>
             <input name="Submit" type="submit" class="btnSubmit">
        </div><!-- submit Button -->
    </div><!--/container-->
</div><!--/banner-->
