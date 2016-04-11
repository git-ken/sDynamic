<?php

/* 
template name: Custom Design Guide Page
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
            <h1>Design Guide Request</h1>
            </div>
            <div class="space">
                <hr  id="dotted"/>
            </div>
          <div class="col-md-12">
          
                <div class="design-guide-video">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/EF5UwffDuKw" frameborder="0" allowfullscreen></iframe>
                </div>
          </div>
           <div class="space">
           
            </div>
          <div class="col-md-12">
                <p>Is this your first venture into designing silicone rubber parts? Download our Design Guide for free!</p>
                <p>&nbsp;</p>
                <p>Our guide covers almost everything you wanted to know about silicone - its history, physical and chemical characteristics, applications in different industries and molding information. This guide contains basic technical design tips, considerations and guidelines to aid you with establishing molded silicone's manufacturing limits and tolerances.</p>
                <p>&nbsp;</p>
                <p>Please fill out the form below and the next page will lead you to Silicone Dynamic's Custom Silicone Rubber Design Guide.</p>
          </div>
          <div class="space">
          
          </div>
          <div class="col-md-12" id="ship-holder">
          <div class="alert-success">
                        <p><strong>Success!</strong> &nbsp; Please check your email to see the download link of our Design Guide.</p>
                    </div>
                     <div class="alert-error">
                        <p><strong>Error!</strong> &nbsp; Please fill in the required field(s).</p>
                    </div>
                <form method="POST" action="/design-guide/" id="design-guide-form" class="requestForm">
                    <div class="col-md-12">
                        <h3>Personal Information</h3>
                           <p>All fieds are Required</p>
                     
                        <div class="col-md-12">
                            <label>Firstname</label><input type="text" name="fname" />
                             <span id="fname">Firstname is required</span>
                        </div>
                        <div class="col-md-12">
                            <label>Lastname</label><input type="text" name="lname" />
                            <span id="lname">Lastname is required</span>
                        </div>
                        <div class="col-md-12">
                            <label>Email</label><input type="email" name="email" />
                            <span id="email">Email is required</span>
                        </div>
                        <div class="col-md-12">
                            <label>Confirm Email</label><input type="email" name="cemail" />
                            <span id="cemail">Email do not match</span>
                        </div>
                         <div class="col-md-8">
                           <input type="submit" name="btn-design-guide" value="Send" />
                        </div>
                        
                    </div>
                
                </form>
          </div>
    </div>
 </div> <!-- end main container -->
<?php } ?>


<?php genesis(); ?>
<?php
include('siliconeClass.php');
$siliconeClass = new siliconeClass();
$siliconeClass->sendDesignGuide();
?>