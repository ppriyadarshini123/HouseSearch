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

        </div><!--container-->

        <div class="container">
            <section class="editAddItem">               
                <h2 class="sectionTitle"></h2>
                <form method="post" enctype="multipart/form-data" action="#" class="">
                    <div class="form">
                        <div class="align">
                            <h1>Add/Edit House</h1>
                        </div>
                        <div class="align">
                            <label for="hPostcode">POSTCODE</label>
                            <input class="formField" type="text" id="hPostcode" name="hPostcode" value="">
                        </div><!--align postcode-->
                        <div class="align">
                            <label for="hHouseNumber">HOUSE NUMBER</label>
                            <input class="formField" type="text" id="hHouseNumber" name="hHouseNumber" value="">
                        </div><!--align house number-->                       
                        <div class="align">
                            <label for="hCity">CITY</label>
                            <input class="formField" type="text" id="hCity" name="hCity" value="">
                        </div>
                        <div class="align">
                            <label for="hPropertyDealer">PROPERTY DEALER</label>
                            <input class="formField" type="text" id="hPropertyDealer" name="hPropertyDealer" value="">                                
                        </div><!--/align-->
                        <div class="align">
                            <label for="hImage">PICTURE</label>
                            <div class="fileUploadBlock">
                                <div class="flexCont">
                                    <label for="hImage" class="">CHOOSE FILE</label>
                                    <p>
                                        <span class="formField uploadFileSpan" id="uploadPic">No file selected</span>
                                    </p>
                                </div><!--flexCont-->
                                <input class="hiddenFileUpload" type="file" id="pImage" name="pImage" value="">
                            </div><!--/fileUploadBlock-->
                        </div><!--align picture-->
                        <div class="align">
                            <button type="submit" name="submit" class="btnSubmit">Submit</button>                                
                        </div>
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
