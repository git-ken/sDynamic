<?php
/* 
template name: Custom Product Page
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
            <h1>Products Manufactured by Silicone Dynamics</h1>
            <p>
            We manufacture many different types and configurations of silicone rubber, membrane switches and plastic parts. Below are our top four requested items to be quoted:
            </p>
            <div class="space"><hr id="dotted" /></div>
            <div class="col-md-12">
                <div class="col-md-4">
                    <div id="prod-image-holder">
                    <img src="/wp-content/uploads/2015/06/silicone-rubber-keypad.jpg" />
                    </div>
                </div>
                <div class="col-md-8">
                    <p><strong>Custom Silicone Rubber Keypads:</strong> We manufacture Silicone Rubber Keypads. From the simple silicone rubber keypad to complex silicone rubber keypads, we are the best choice for superior quality and low price.Please allow us to send you a <a href="/sample-keypad/">free sample silicone rubber keypad</a> for your evaluation of our quality and our silicone rubber capabilities.</p>
                    <p>&nbsp;</p>
                    <p>From fast prototype runs to large production runs, we can handle your needs and timelines. Please provide us a drawing of your custom silicone keypad so we can provide you with a competitive quote on your custom silicone rubber keypad needs. You will not find better quality or lower prices than what we have to offer.</p>
                    <p>&nbsp;</p>
                    <p><a href="/quote-request/">Contact us now for a free competitive quote on your Custom Silicone Rubber Keypads.</a></p>
                </div>
            </div>
            <div class="space"></div><div class="space"><hr id="dotted" /></div>
            <div class="col-md-12">
                <div class="col-md-4">
                    <div id="prod-image-holder">
                    <img src="/wp-content/uploads/2015/06/membrane-switches1.jpg" />
                    </div>
                </div>
                <div class="col-md-8">
                    <p><strong>Membrane Switches:</strong> Simple single membrane switches to complete complex membrane switch keypads with multiple switches, we are here to help. Small and fast prototype runs all the way up to large production runs, we can handle your needs and your timelines. Please provide us a drawing of your part so we can provide you with a competitive quote on your membrane switch needs. You will not find better quality or lower prices than what we have to offer. <a href="/quote-request/">Contact us now for a free competitive quote on your Custom Membrane Switch requirements.</a></p>
                    <p>&nbsp;</p>
                </div>
            </div>
          <div class="space"></div>
          <div class="space">
               <hr id="dotted" />
          </div>
          <div class="col-md-12">
                <div class="col-md-4">
                    <div id="prod-image-holder">
                    <img src="/wp-content/uploads/2015/06/injected-plastic-parts-encl.jpg" />
                    </div>
                </div>
                <div class="col-md-8">
                    <p><strong>Custom Injected Molded Plastic Parts and Enclosures:</strong> Nearly every Silicone Rubber Keypad or Custom Membrane Switch requires a plastic enclosure of some type and we are here to help with that need. From simple single cavity plastic boxes to complete complex multiple cavity plastic injected enclosures, we are here to help. Small and fast prototype runs all the way up to large production runs, we can handle your needs and your timelines. Please provide us a drawing of your part so we can provide you with a competitive quote on your custom injected plastic enclosure and/or part needs. You will not find better quality or lower prices than what we have to offer. <a href="/quote-request/">Contact us now for a free competitive quote on your Custom Injected Molded Plastic Part and Enclosure needs.</a></p>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="space"></div>
            <div class="space"><hr id="dotted" /></div>
            <div class="col-md-12">
                <div class="col-md-4">
                    <div id="prod-image-holder">
                    <img src="/wp-content/uploads/2015/06/abs-plastic-parts-buttons.jpg" />
                    </div>
                </div>
                <div class="col-md-8">
                    <p><strong>Custom ABS Plastic Parts and Buttons:</strong> Today's electronics consist of various technologies for user interfaces; ABS plastic is widely used and so are custom plastic buttons. From simple ABS Plastic Parts and buttons to complete complex ABS Plastic keypads, we are here to help. Small and fast prototype runs all the way up to large production runs, we can handle your needs and your timelines. Please provide us a drawing of your part so we can provide you with a competitive quote on your custom ABS Plastic Parts and Button needs. You will not find better quality or lower prices than what we have to offer. <a href="/quote-request/">Contact us now for a free competitive quote on your Custom ABS Plastic Parts and button needs.</a></p>
                    <p>&nbsp;</p>
                </div>
            </div>
          </div>
      </div>
 </div> <!-- end main container -->
<?php } ?>
<?php genesis(); ?>