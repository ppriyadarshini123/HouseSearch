<?php
/**
 * Training Dragon
 *
 * PHP course project
 * url: /includes/banner.php
 */
?>
<div class="banner">     
    <div class="containerSearchPanel">  
        <h1 class="mainName">Search</h1>
        <div class="redDash"></div><!-- redDash -->
        <form method="post" action="#" class="fields">
            <div class="centerAlign">
            <div class="alignView">
                <span class="spSaleRent">Sale/Rent : </span>
                <select id="ddSaleRent" title="ddSaleRent" name="dropdown" class="ddSaleRent">
                    <option value="sale">For Sale</option>
                    <option value="rent">For Rent</option>
                </select>             
            </div>  <!-- saleRent -->
            <div class="alignView">
                <span class="spPostcode">Postcode : </span>               
                <input name="cityPostcode" title = "postcode" type="text" id="citypostcode" class="fields" placeholder="City/Postcode" required>
            </div><!-- City/Postcode -->
            <div class="alignView">
                <span class="spMin">Min : </span>
                <input name="min" type="number" placeholder="0" required>
            </div><!-- Min -->
            <div class="alignView">
                <span class="spMax">Max : </span>
                <input name="max" type="number" placeholder="450k" required>
            </div><!-- Max -->   
            <div class="indexSubmit">
                <input name="Submit" type="submit" class="btnSubmit">
            </div><!-- submit Button -->
            </div>
        </form>
    </div><!--/container-->
</div><!--/banner-->
