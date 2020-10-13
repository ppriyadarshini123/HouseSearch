<?php
/**
 *
 * PHP course project
 * url: admin/addUser.php
 */
include("../includes/utilities.php");

//   THIS IS THE BEGINNING OF THE MARKUP

include("../includes/top.php");
include("../includes/header.php");
include("../admin/adminNav.php");
?>
<main>
    <section class="mainBody">
     

        <div class="contain">
            <section class="editAddItem">               
                <h2 class="sectionTitle"></h2>
                <form method="post" enctype="multipart/form-data" action="#" class="">
                     <div class="headingCenter">
                            <h1>Add/Edit User</h1>
                        </div><!--align heading-->
                    <div class="form">
                        <div class="editAddHouseAlign">                       
                        <div class="align">
                            <label for="uRole">Role:</label>
                             <input list="roles" name="role">
                                <datalist id="roles">
                                </datalist>
                        </div><!--align role-->
                        <div class="align">
                            <label for="uEmail">EMAIL :</label>
                            <input class="formField" type="text" id="uEmail" name="uEmail" value="">
                        </div><!--align email address-->  
                         <div class="align">
                            <label for="uPsw">PASSWORD :</label>
                            <input class="formField" type="text" id="uPsw" name="uPsw" value="">
                        </div><!--align password--> 
                         <div class="align">
                            <label for="uHouseAssigned">HOUSE ASSIGNED :</label>
                            <input list="houses" name="house">
                                <datalist id="houses">
                                </datalist>
                        </div><!--align password--> 
                        <div class="align">
                            <label for="uName">NAME :</label>
                            <input class="formField" type="text" id="uName" name="uName" value="">
                        </div><!--align name--> 
                        <div class="align">
                            <label for="uPhoneNumber">PHONE NUMBER :</label>
                            <input class="formField" type="text" id="uPhoneNumber" name="uPhoneNumber" value="">                                
                        </div><!--/align phone number-->                       
                        <div class="alignBtn">
                            <button type="submit" name="submit" class="btnSubmit">Submit</button>                                
                        </div><!--/align submit--> 
                        </div><!--/editAddHousealign-->
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
