<?php
/**
 *
 * PHP course project
 * url: admin/viewUsers.php
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
            <section class="searchResults">
                <div class="headingCenter">
                    <h1>View Users</h1>
                </div><!--align heading-->
                <div class="flexCont"><!--result house-->
                     <div class="resUser">
                        <div>
                            <p class="uRole">Role</p>
                        </div><!--user role-->
                         <div>                                   
                            <p class="uName">Name</p> 
                        </div><!--/user Name--> 
                        <div>
                            <p class="uEmail">Email</p>
                        </div><!--user email-->
                        <div>                                   
                            <p class="uPhone">Phone Number</p> 
                        </div><!--/Phone number--> 
                     </div>  <!--/resUser-->   
                    <div class="resUserDetails">
                        <div>
                            <p class="uRole">Property Dealer</p>
                        </div><!--user role-->
                         <div>                                   
                            <p class="uName">Malcolms</p> 
                        </div><!--/user Name--> 
                        <div>
                            <p class="uEmail">info@malcolms.co.uk</p>
                        </div><!--user email-->
                        <div>                                   
                            <p class="uPhone">+44-7654567363</p> 
                        </div><!--/Phone number-->                     
                     
                    </div><!--/resUserDetails-->
                </div><!--/flexCont-->   
            </section><!--/searchResults-->
        </div><!--/contain-->
    </section><!--/ mainBody-->
</main>

<?php include("../includes/footer.php"); ?> 

</div><!--/wrapper-->
<!-- add your JS here-->
<script src="../build/js/index.js"></script>
<!--/ your JS here-->
</body>
</html>

