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
                <div class="container">
                    <section class="signinpage">                                  
                            <div class="signin flexCont"><!--result product-->
                                <div class="email align">
                                    <input name="email" type="email" placeholder="john@johndoe.com" required>
                                </div><!--/email-->
                                <div class="password align">
                                  <div>                                   
                                      <input name="password" type="password" placeholder="" required>
                                  </div>
                                </div><!--/password-->                               
                              </div>  <!--/signin-->             
                    </section><!--/signinpage-->
                </div><!--/container-->
            </section><!--/ mainBody-->
        </main>

 <?php include("../includes/footer.php");?> 

</div><!--/wrapper-->
    <!-- add your JS here-->
    <script src="build/js/index.js"> </script>
    <!--/ your JS here-->
</body>
</html>
