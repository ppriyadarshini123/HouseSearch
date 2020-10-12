<?php
/**
 *
 * PHP course project
 * url: admin/addHouse.php
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
            <section class="editAddItem">               
                <form method="post" enctype="multipart/form-data" action="#" class="">
                     <div class="headingCenter">
                            <h1>Add/Edit House</h1>
                        </div><!--headingCenter-->
                    <div class="form">
                        <div class="align">
                            <div>
                                <label for="hPostcode">POSTCODE</label>
                            </div><!--label postcode-->
                            <div>
                                <input class="formField" type="text" id="hPostcode" name="hPostcode" value="">
                            </div><!--input postcode-->
                        </div><!--align postcode-->
                        <div class="align">
                            <div>
                                 <label for="hHouseNumber">HOUSE NUMBER</label>
                            </div><!-- label house number -->
                            <div>
                                 <input class="formField" type="text" id="hHouseNumber" name="hHouseNumber" value="">
                            </div><!--input housenumber-->
                        </div><!--align house number-->                       
                        <div class="align">
                            <div>
                                 <label for="hCity">CITY</label>
                            </div><!-- label city -->
                            <div>
                                <input class="formField" type="text" id="hCity" name="hCity" value="">
                            </div><!-- input city -->
                        </div><!-- align city -->
                        <div class="align">
                            <div>
                                 <label for="hPropertyDealer">PROPERTY DEALER</label>
                            </div><!-- label propertydealer -->
                            <div>
                                <input list="hPropertyDealer" name="propertydealer">
                                <datalist id="hPropertyDealer">
                                </datalist>   
                             </div><!-- input propertydealer -->
                        </div><!--/align-->
                        <div class="align">
                            <div>
                                 <label for="hImage">PICTURE</label>
                            </div><!-- label picture -->
                            <div>
                                <div class="fileUploadBlock">
                                <div class="flexCont">
                                    <label for="hImage" class="">CHOOSE FILE</label>
                                    <p>
                                        <span class="formField uploadFileSpan" id="uploadPic">No file selected</span>
                                    </p>
                                </div><!--flexCont-->
                                <input class="hiddenFileUpload" type="file" id="pImage" name="pImage" value="">
                            </div><!--/fileUploadBlock-->
                            </div><!-- file upload -->
                        </div><!--align picture-->
                        <div class="alignBtn">
                            <button type="submit" name="submit" class="btnSubmit">Submit</button>                                
                        </div><!-- alignBtn -->
                </form><!--/editAddHouse-->
            </section><!--/editAddHouse-->
        </div><!--/container-->    
    </section><!--/ mainBody-->
</main>
<?php include("../includes/footer.php"); ?> 
</div><!--/wrapper-->
<!-- add your JS here-->
<script src="build/js/index.js"></script>
<!--/ your JS here-->
</body>
</html>
