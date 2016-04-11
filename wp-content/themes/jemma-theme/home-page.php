<?php

/* 
template name: Custom Home Page
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
                <div class="col-md-6">
                      <div class="home-page-video">
                       <iframe width="100%" height="315" src="https://www.youtube.com/embed/UmpaqbwQy6Q" frameborder="0" allowfullscreen></iframe>
                      </div>  
                </div>
                 <div class="col-md-6">
                    <p>We are a leading manufacturer of silicone rubber keypads and parts. We provide:
                    <ul class="home-ul">
                        <li><img src="/wp-content/uploads/2015/06/check.png"/>High quality silicone rubber keypads</li>
                        <li><img src="/wp-content/uploads/2015/06/check.png"/>Unbeatable service and quality</li>
                        <li><img src="/wp-content/uploads/2015/06/check.png"/>Free engineering design support</li>
                    </ul>
                    </p>
                    <div class="space">
                    
                    </div>
                   <div class="col-md-12">
                    <a id="btn-silicon" href="">Request a Free Quote</a> or <a href="/products/">View Our Services</a>
                   </div>
                    
                </div>
            </div> 
             <div class="space">
            
            </div>
            <div class="space">
                <hr />
            </div>
              <div class="col-md-12">
                    <div class="col-md-2">
                    <img id="stunning-text" src="/wp-content/uploads/2015/06/stunning-text.png" />
                    </div>
                    <div class="col-md-10">
                    <p>
                    Silicone Dynamics is the leading custom silicone rubber keypad manufacturer. We produce high quality <a href="/products/">custom silicone rubber keypads</a> at low prices using injection molding and silicone compression molding. Products range from simple single button keypads to complex multiple key silicone keypads.
                    </p>
                    <p>
                    From small runs of compression molded silicone to large production runs we can help. If you are new to designing silicone keypads contact us for free engineering design support.
                    </p>
                    <p>
                    Our success as a custom silicone keypad manufacturer is a direct result of our ability to deliver unbeatable service and quality while maintaining competitive pricing. Contact us today for an engineering <a href="/sample-keypad/">silicone keypad sample</a> and a competitive <a href="/quote-request/">quote</a>.
                    </p>
                    </div>
            </div>  
            
            <div class="space">
            
            </div> 
            <div class="space">
                <hr />
            </div> 
            <div class="col-md-12">
                <div class="col-md-3">
                    <h2>Silicone Keypad Sample</h2>
                    <p>Our sample silicone rubber keypad was designed to help you with your custom keypad design. It includes different coatings, laser etching, printing, co-molding, multiple shore (hardness), actuation force and more. Request your free silicone keypad sample from us today.</p>
                    <a id="btn-silicon-readmore" href="">Read More</a>
                </div>
                
                  <div class="col-md-3">
                        <h2>About Us</h2>
                        <p>Silicone Dynamics is an Oregon corporation. Our sales, marketing, engineering and management are located in Bend Oregon, our manufacturing facility is located in China. We operate our manufacturing facility in China with strict quality controls to ensure the highest quality keypads.. Our customers get great service, high quality silicone rubber keypads and discounted prices.</p>
                        <a id="btn-silicon-readmore" href="">Read More</a>
               
                </div>
                
                  <div class="col-md-3">
                  <h2>Products</h2>
                  
                  <p>We specialize in manufacturing custom silicone rubber keypads and silicone parts. We also manufacture custom membrane keypads and plastic enclosures.</p>
                    
                    <a id="btn-silicon-readmore" href="">Read More</a>
                
                </div>
            </div>
             <div class="space">
            
            </div> 
            <div class="space">
                <hr />
            </div> 
            
            <div class="col-md-12" id="hide-mobile">
                    <h2>Frequently Asked Questions (FAQ)</h2>
                    <p><strong>Question:</strong> What is the "normal" travel for a button on a silicone keypad?</p>
                    <p><strong>Answer:</strong> If the silicone's button structure (or webbing) provides the actuation force then the travel should be about 0.04? to 0.05?. If there will be a metal dome under the button providing the actuation force then the travel should be 0.00? to 0.01?.</p>
                    <p>&nbsp;</p>
                    
                    <p><strong>Question:</strong> What hardness(or shore) should I use for my custom keypad?</p>
                    <p><strong>Answer:</strong> The answer is different depending on how the actuation force is provided. If there is no metal dome under the button we typically recommend 50-55 shore A (think inner tube or door seal). If there is a metal dome under the button then we would recommend 60 shore A (think windshield wiper blade). Our Sample keypad has: 30 Shore A, 40 Shore A, 50 Shore A, 60 Shore A and 70 Shore A. <a href="/sample-keypad/">Request our engineering sample silicone keypad</a> so you can feel the different shores and decide which is best for your project.</p>
            
            </div>
              <div class="space">
            
            </div>
              <div class="space">
            
            </div>
            <div class="col-md-12" id="hide-mobile">
                <p>More Questions? Visit our FAQ page or call or email us today. Our engineers are ready to help you.</p>
            </div>
    </div>
 </div> <!-- end main container -->
<?php } ?>


<?php genesis(); ?>