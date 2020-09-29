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
        <div class="redDash"></div><!-- redDash -->
        <div class="fields">
            <div class="align">
                <span class="spSaleRent">Sale/Rent : </span>
                <select id="ddSaleRent" title="ddSaleRent" name="dropdown" class="ddSaleRent">
                    <option value="sale">For Sale</option>
                    <option value="rent">For Rent</option>
                </select>             
            </div>  <!-- saleRent -->
            <div class="align">
                <span class="spPostcode">Postcode : </span>
                <input name="cityPostcode" type="text" placeholder="City/Postcode" required>
            </div><!-- City/Postcode -->
            <div class="align">
                <span class="spMin">Min : </span>
                <input name="min" type="number" placeholder="0" required>
            </div><!-- Min -->
            <div class="align">
                <span class="spMax">Max : </span>
                <input name="max" type="number" placeholder="450k" required>
            </div><!-- Max -->            
        </div><!-- fields -->
        <div class="alignBtn">
            <input name="Submit" type="submit" class="btnSubmit">
        </div><!-- submit Button -->
    </div><!--/container-->
</div><!--/banner-->
