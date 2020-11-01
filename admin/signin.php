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
                                    <label for="email" class="spEmail">Email :</label> 
                                    <input name="email" type="email" placeholder="john@johndoe.com" required id="email">
                                </div><!--/email-->
                                <div class="password alignView">                                    
                                    <label for="psw" class="spPsw">Password :</label> 
                                    <input name="password" type="password" placeholder="" required id="psw">                                  
                                </div><!--/password-->                               
                               <div class="alignBtn">
                                    <button type="submit" class="btnSubmit">Submit</button>
                               </div><!-- submit Button --> 
                              </div>  <!--/signin-->             
                    </section><!--/signinpage-->
                </div><!--/container-->
            </section><!--/ mainBody-->
        </main>

 <?php include("../includes/footer.php");?> 

</div><!--/wrapper-->
    <!-- add your JS here-->
   
    <!--/ your JS here-->
</body>
</html>
