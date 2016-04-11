<?php

/* 
template name: Custom About Us Page
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
            <h1>About Silicone Dynamics, Inc.</h1>
            <div class="space">
                <hr id="dotted" />
            </div>
            
            <div class="col-md-12">
                <p>
                <a href="http://dev.siliconedynamics.net">Silicone Dynamics, Inc.</a> is a leading manufacturer of silicone rubber keypads and parts. Using silicone rubber injection molding and silicone compression molding we are able to produce a wide range of silicone rubber products.Our sales, marketing, engineering and management are located in Bend, Oregon and our manufacturing facility is located in China. With years of silicone manufacturing experience, we have been able to consistently provide high quality silicone keypads and parts. The key to our quality is operating our manufacturing facility in China with strict quality controls. The last part of our success is owed to our highly skilled engineering and production staff.
                
                </p>
                <p>&nbsp;</p>
                <p>
                Our success in the custom silicone keypad market is a direct result of our ability to deliver unbeatable service and excellent quality while maintaining competitive pricing. With support available throughout the USA, we can respond to inquiries quickly and support your design team with Silicone Rubber Keypads, Rubber Injection Molding, Silicone Injection Molding and prototype injection molding. We are happy to offer free design support for your custom rubber silicone keypad and parts.
                </p>
                <p>&nbsp;</p>
                <p>Contact us today for a <a href="http://dev.siliconedynamics.net/sample-keypad/">free silicone rubber keypad</a> sample or <a href="http://dev.siliconedynamics.net/quote-request/">quote on your custom silicone rubber keypad or part.</a></p>
                <p>&nbsp;</p>
                <p> <a href="http://dev.siliconedynamics.net">Silicone Dynamics, Inc. </a> is an Oregon Corporation located in Bend Oregon, USA.</p>
            </div>
        </div>         
    </div>
 </div> <!-- end main container -->
<?php } ?>
<?php genesis(); ?>