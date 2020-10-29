<?php
/**
 *
 * PHP course project
 * url: admin/signin.php
 */

include("../includes/utilities.php");

//   THIS IS THE BEGINNING OF THE MARKUP
include("../includes/top.php");
include("../includes/header.php");

?>
</header>
<main>
        <section class="mainBody">           
                <div class="contain">
                    <section class="signinpage">                                  
                            <div class="signin"><!--result product-->
                                <p class="headingCenter">Sign In</p>
                                <div class="email alignView">
                                    <span class="spEmail">Email : </span>
                                    <input name="email" type="email" placeholder="john@johndoe.com" required>
                                </div><!--/email-->
                                <div class="password alignView"> 
                                    <span class="spPsw">Password : </span>
                                    <input name="password" type="password" placeholder="" required>                                  
                                </div><!--/password-->                               
                               <div class="alignBtn">
                                    <input name="Submit" type="submit" class="btnSubmit">
                               </div><!-- submit Button --> 
                              </div>  <!--/signin-->             
                    </section><!--/signinpage-->
                </div><!--/container-->
            </section><!--/ mainBody-->
        </main>

 <?php include("../includes/footer.php");?> 

</div><!--/wrapper-->
    <!-- add your JS here-->
    <script src="./build/js/index.js"> </script>
    <!--/ your JS here-->
</body>
</html>
