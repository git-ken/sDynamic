<?php

/* 
template name: Custom Sample Keypad Page
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
        <h1>Silicone Rubber Keypad Sample Request</h1>
        <div class="space">
            <hr id="dotted" />
        </div>
         <div class="col-md-12">
            <div class="col-md-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/ZDWaKUX160Q" frameborder="0" allowfullscreen></iframe></div>
            <div class="col-md-6">
            <p>
            We manufactured our free silicone rubber keypad as a free design tool for our potential customers. With all of the different features this keypad is not cheap or easy to produce but we know how useful it can be. Please use the request form to the left to request this free Silicone Rubber Keypad sample be sent to you. We are located in Bend Oregon USA so shipping outside of North America is expensive. This is a free sample, the shipping and handling is also free for addresses located in the US or Canada only.
           </p>
       </div>
         </div>
         <div class="space"></div>
        <div class="col-md-12">
           <p>
            Our Silicone Rubber Keypad shows various features/options available for custom silicone keypads and parts. Here are some of the features on the sample: Shore A 30&deg;, Shore A 40&deg;, Shore A 50&deg;, Shore A 60&deg;, Shore A 70&deg;, Matte Polyurethane Spray Coating, Glossy Polyurethane Spray Coating, Epoxy Coating, Plastic Keycaps, Carbon Pills, Laser Etching, Positive Printing, Negative Printing, 100g Activation Force, 150g Activation Force, 200g Activation Force, 250g Activation Force, various silicone rubber button sizes and shapes. Not only does the sample show the many features/options available, it also shows the quality of our manufacturing capabilities.
            </p>
         </div>
        <div class="col-md-12">
        <div class="col-md-3 sample-image">
          <div id="sample-image-holder">
           <img src="/wp-content/uploads/2015/06/30shore-avs60-shorea.jpg"/>
           </div>
        </div>
        <div class="col-md-3 sample-image">
           <div id="sample-image-holder">
           <img src="/wp-content/uploads/2015/06/100gactuationforcevs200gactuationforce.jpg"/>
           </div>
        </div>
       <div class="col-md-3 sample-image">
      <div id="sample-image-holder">
      <img src="/wp-content/uploads/2015/06/mattevsglossyvsepoxycoating.jpg"/>
      </div>
      </div>
      </div>
                <div class="space"></div>
                <div class="col-md-12" id="ship-holder">
                    <div class="alert-success">
                        <p><strong>Success!</strong> &nbsp; Your request has been sent.</p>
                    </div>
                     <div class="alert-error">
                        <p><strong>Error!</strong> &nbsp; Please fill in the required field(s).</p>
                    </div>
                    <div class="col-md-6" id="border-right">
                        <p>Free Shipping to US &AMP; Canadian Addresses only</p>
                          <form method="POST" action="/sample-request/"  class="requestForm">
                                    <div class="col-md-12">
                                    <div class="space"></div>
                                    <h4>Personal Information</h4>
                                        <label id="req">Note: All fields are required.</label>
                                            <div class="col-md-8">
                                                    <label>Company Name</label><input type="text" name="comp_name" required="" />
                                                    <span id="comp_name">Company name is required</span>
                                            </div>
                                            <div class="col-md-8">
                                                    <label>Firstname&nbsp;</label><input type="text" name="fname" required=""/>
                                                    <span id="fname">Firstname is required</span>
                                            </div>
                                              <div class="col-md-8">
                                                    <label>Lastname&nbsp;</label><input type="text" name="lname" required=""/>
                                                    <span id="lname">Lastname is required</span>
                                            </div>
                                              <div class="col-md-8">
                                                    <label>Email&nbsp;&nbsp;</label><input type="email" name="email" required=""/>
                                                    <span id="email">Email is required</span>
                                            </div>
                                              <div class="col-md-8">
                                                    <label>Confirm Email</label><input type="email" name="cemail" required=""/>
                                                    <span id="cemail">Email do not match</span>
                                            </div>
                                              <div class="col-md-8">
                                                    <label>Address 1&nbsp;&nbsp;</label><input type="text" name="address1" required=""/>
                                                    <span id="address">Address is required</span>
                                            </div>
                                            <div class="col-md-8">
                                                    <label>Address 2(optional)&nbsp;&nbsp;</label><input type="text" name="address2" />
                                            </div>
                                            <div class="col-md-8">
                                                    <label>State&nbsp;&nbsp;</label><input type="text" name="state" required=""/>
                                                    <span id="state">State is required</span>
                                            </div>
                                            <div class="col-md-8">
                                                    <label>City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="city" required=""/>
                                                    <span id="city">City is required</span>
                                            </div>
                                            <div class="col-md-8">
                                                    <label>Zip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="zip" required=""/>
                                                    <span id="zip">Zip is reuired</span>
                                            </div>
                                            <div class="col-md-8">
                                                    <input type="submit" name="btn-send" value="Send" />
                                            </div>
                                            <div class="space"></div>
                                              <div class="col-md-12">
                                                <p><strong>NOTE:</strong> These are complex and expensive samples; in return, please allow us to provide you a competitive quote on your silicone rubber keypads and parts needs.</p>
                                              </div>
                                    </div>
                            </form>
                    </div>
                        <div class="col-md-6" id="div-full-image">
                           <div id="sample-full-image-holder">
                            <img src="/wp-content/uploads/2015/06/full-sample-keypad.jpg" />
                           </div>
                      </div>
                </div>
       </div>
 </div> <!-- end main container -->
<?php } ?>
<?php genesis(); ?>
<?php 
include("siliconeClass.php");
$siliconeClass = new siliconeClass();
$siliconeClass->sendRequestSample();
?>