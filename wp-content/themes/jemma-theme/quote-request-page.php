<?php

/* 
template name: Custom Quote Request Page
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
            <h1>Submit Quote Request</h1>
            <div class="space">
           <hr id="dotted"/>
            </div>
         <div class="col-md-12">
    
            
            <div class="design-guide-video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/gFoQc6Obdm0" frameborder="0" allowfullscreen></iframe>
            </div>
         </div>
         <div class="space">
         
         </div>
         <div class="col-md-12">
            <p>We here at Silicone Dynamics, Inc. value every quote request and will do our best to quickly provide you a quote for your project.  To move forward with a quote, please send us your CAD file (.IGS and/or .STP) of the part to quote along with a PDF of that drawing.  If you only have a sketch or rough drawing, we may be able to assist you in completing your design. Please email or call us and one of our friendly engineers will be happy to assist you.</p>
            <p>&nbsp;</p>
            <p>When submitting for a quote please include your estimated annual usage, target price for setup, per part target price and any deadlines you are working against. Once we have your quote request, one of our engineers will review your project and will contact you if they have any questions about the project. After all questions are cleared up, our estimator will send your quote to you via email.</p>
            <p>&nbsp;</p>
            <p>We have valuable resources that many design engineers find helpful when designing a new silicone rubber keypad.  The first is our <a href="/design-guide/">Free Design Guide</a>, which goes from the basics of silicone rubber and injection molding up to more complex questions and diagrams of keypad intricacies.  The second and most popular resource is our <a href="/sample-keypad/">Free Engineering Sample</a>, which incorporates many different features, textures and feels of buttons making it easier for to get a better idea of what your final keypad will be like.</p>
            <p>&nbsp;</p>
            <p>Our ultimate goal is to work with you to insure that you wind up getting the best end product.</p>
            <p>&nbsp;</p>
            <p>Please fill out the form below so we can get started on your quote request.</p>
            
            
         </div>
         <div class="space">
         
         </div>
         <div class="col-md-12" id="ship-holder">
                     <div class="alert-success">
                        <p><strong>Success!</strong> &nbsp; Your Quote Request has been sent.</p>
                    </div>
                    <div class="alert-error">
                        <p><strong>Error!</strong> &nbsp; Please fill in the required field(s).</p>
                    </div>
                <form method="POST" class="requestForm" id="design-guide-form" action="/quote-request/" enctype="multipart/form-data">
                <h3 id="move-left">Personal Information</h3>
                    <div class="col-md-12">
                        <label>Firstname</label><input type="text" name="fname" />
                        <span id="fname">Firstname is required</span>
                    </div>
                    <div class="col-md-12">
                    <label>Lastname</label><input type="text" name="lname" />
                    <span id="lname">Lastname is required</span>
                    </div>
                    <div class="col-md-12">
                        <label>Title</label><input type="text" name="title" />
                        
                    </div>     
                    <div class="col-md-12">
                    <label>Company Name</label><input type="text" name="comp_name" />
                    <span id="comp_name">Compant Name is required</span>
                    </div>    
                    <div class="col-md-12">
                    <label>Phone</label><input type="text" name="phone" />
                    </div>           
                    <div class="col-md-12">
                    <label>Quantities to Quote</label><input type="text" name="quantitiestoquote" />
                    </div>
                    <div class="col-md-12">
                    <label>Estimated Annual Usage (EAU)</label><input type="text" name="eau" />
                    </div>
                    <div class="col-md-12">
                    <label>Target Price Each</label><input type="text" name="targetprice" />
                    </div>
                    <div class="col-md-12">
                    <label>Email</label><input type="text" name="email" />
                    <span id="email">Email is required</span>
                    </div>
                    <div class="col-md-12">
                    <label>Confirm Email</label><input type="text" name="cemail" />
                    <span id="cemail">Email do not match</span>
                    </div>
                    <div class="space">
                    
                    </div>
                    <div class="col-md-12" id="ship-holder">
                        <p>Upload Your Drawings and Competitive Quotes for Best Pricing</p>
                        
                        <div class="col-md-12">
                            <input type="file" name="drawing1" />
                        </div>
                        <div class="col-md-12">
                            <input type="file" name="drawing2" />
                        </div>
                        <div class="col-md-12">
                            <input type="file" name="drawing3" />
                        </div>
                        <div class="col-md-12">
                            <input type="file" name="drawing4" />
                        </div>
                    </div>
                    <div class="space">
                    
                    </div>
                    <div class="col-md-12">
                        <p>Comments/Notes</p>
                        <div class="col-md-12">
                        <textarea name="comments" rows="5" placeholder="Project Notes..."></textarea>
                        </div>
                        <input type="submit" name="btn-quote-request" value="Send" />
                    </div>
                   
                </form>
         </div>
          
    </div>
 </div> <!-- end main container -->
<?php } ?>


<?php genesis(); ?>
<?php
include('siliconeClass.php');
$siliconeCass = new siliconeClass();
$siliconeCass->sendQuoteRequest();
?>