<?php

/* 
template name: Custom Contact Us Page
*/
// FORCE FULL WIDTH LAYOUT
add_filter ( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

// Homepage CUSTOM LOOP
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'my_custom_loop' );
function my_custom_loop () {
?>
 <div id="main_container">
  <div id="single-post" class="entry-content">

  </div> <!-- end single post -->
    <div class="row">
         <div class="col-md-12">
                <h1>Contact Us</h1>
                <div class="space">
                    <hr id="dotted" />
                </div>
                <div class="col-md-12" id="ship-holder">
                <div class="alert-success">
                        <p><strong>Success!</strong> &nbsp; Your Message has been sent.</p>
                    </div>
                    <div class="alert-error">
                        <p><strong>Error!</strong> &nbsp; Please fill in the required field(s).</p>
                    </div>
                        <div class="col-md-12">
                            <h4>Silicone Dynamics, Inc.</h4>
                        </div>
                     <div class="col-md-6">
                
                            <form method="POST" class="requestForm">
                                <div class="col-md-12" >
                                    <label>Firstname</label><input type="text" name="fname" />
                                    <span id="fname">Firstname is required</span>
                                </div>
                                 <div class="col-md-12">
                                    <label>Lastname</label><input type="text" name="lname" />
                                    <span id="lname">Lastname is required</span>
                                </div>
                                 <div class="col-md-12">
                                    <label>Email&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="email" name="email" />
                                    <span id="email">Email is required</span>
                                </div> 
                                <div class="col-md-12">
                                    <label>Address</label><input type="text" name="address" />
                                </div>
                                <div class="col-md-12">
                                    <label>Zip Code</label><input type="text" name="zip" />
                                </div>
                                <div class="col-md-12">
                                        <?php 
                                            include('siliconeClass.php');
                                        ?>
                                    <label>Country</label>
                                    <select name="country">
                                        
                                        <?php
                                        $siliconeClass = new siliconeClass();
                                        $siliconeClass->displayCountry();
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Phone</label><input type="text" name="phone" />
                                </div>
                                <div class="col-md-12">
                                    <label>Message</label><textarea rows="8" placeholder="Your Message..." id="cTextarea" name="message"></textarea>
                                </div>
                                <div class="col-md-12">
                                   <input type="submit" name="btn-send-contact" value="Send" />
                                </div>
                            </form>
                     </div>
                     <div class="col-md-6">
                        <address>61535 South Hwy. 97<br />
                        Suite 9-511<br />
                        Bend, OR 97702<br />
                        USA<br /><br />
                        Phone: (800) 231-7005<br />
                        Fax: (800) 243-3934<br />
                        <a href="mailto:Sales@SiliconeDynamics.net">Sales@SiliconeDynamics.net</a>
                        
                        </address>
                     </div>
                </div>
         </div>
          
    </div>
 </div> <!-- end main container -->
<?php } ?>
<?php genesis(); ?>
<?php 
    $siliconeClass = new siliconeClass();
    $siliconeClass->sendContact();
?>