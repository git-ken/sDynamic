<?php

/* 
template name: Custom FAQ Page
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
            <h1>Frequently Asked Questions</h1>
            <div class="space">
                <hr id="dotted" />
            </div>
            <div class="col-md-12">
                <div class="faq-img">
                    <img src="/wp-content/uploads/2015/06/FAQ.jpg"/>
                </div>
                
            </div>
            <div class="space">
            
            </div>
            <div class="col-md-12">
                <p><em><strong>What is the minimum number of pieces that I can order?</strong></em></p>
                <p>&nbsp;</p>
                <p>We are happy to produce any number of parts from 1 piece up to hundreds of thousands of pieces.  When you are looking for 100 pieces or less, we would suggest going with prototype tooling which is usually about 1/3 of the tooling charge of production tooling.  The positive with going this route is the lower setup cost, the negative if your design is successful and you want to get a production run of parts you will need to pay for the production tooling to be built.  Normally, prototype tooling is used for new designs that will likely need to be changed.</p>
                <p>&nbsp;</p>
                <p><em><strong>What is the difference of Prototype vs. Production Tooling?</strong></em></p>
                <p>&nbsp;</p>
                <p>The short answer is the number of cavities in the mold.  Prototype tooling typically has only 1 or 2 cavities, this means with each compression molding (or injection molding) machine cycle two pieces are created.  Production tooling will have many more cavities which means with each machine cycle produces many more parts.  The advantage to production tooling with many cavities is a lower cost per part because there is less machine time needed to create the same number of keypads.  This disadvantage to production tooling is the cost of the tooling which is usually 2 or 3 times more expensive than prototype tooling.</p>
                <p>&nbsp;</p>
                <p>Prototype tooling is normally used when you have a new design this is because if you need to modify the design it may not be possible to modify the mold and you may need to purchase a new mold.  Going with a prototype tool first to test a new design may be a good idea.  Unfortunately a prototype tool cannot be used to make very many parts, it is just for prototyping, once the design is proven you will need to purchase a production tool before getting any larger quantity of parts.</p>
                <p>&nbsp;</p>
                <p>Production tooling is a much larger tool and has multiple cavities.  When we great the production tooling we create a few first articles (or prototypes) from the tooling so that you can approve the mold.  Once approved you can order production quantities of the parts.  The risk going with production tooling on new designs is that you run the risk of having to purchase a new tool if you need to make changes to your design.  If your design is proven and you know it will work then going directly to production tooling would save time and money by skipping the prototype tooling charges.</p>
                <p>&nbsp;</p>
                <p><em><strong>What is the purpose of One-time Setup/NRE?</strong></em></p>
                <p>&nbsp;</p>
                <p>The One-Time Setup/NRE are mostly for the actual mold that will create your parts, programming of the equipment, setup of any fixtures needed to create these parts and any other setup that may be needed to create your parts.</p>
                <p>&nbsp;</p>
                <p><em><strong>What is the normal lead time for prototyping/production?</strong></em></p>
                <p>&nbsp;</p>
                <p>Our typical lead time is about 4 to 5 weeks to create a new mold and create the first articles from that mold.  Once you have approved the production tooling it will typically take about 4 to 5 weeks for a production run of parts to be created, this can vary depending on how many parts you order.  The lead times vary depending on the current work load, once an order is placed and the NRE/Tooling is paid we can get the order into the system and provide an updated timeline.</p>
                <p>&nbsp;</p>
                <p><em><strong>Can you provide quotes without CAD drawings?</strong></em></p>
                <p>&nbsp;</p>
                <p>Unfortunately, "ball park" estimates are rarely accurate and can be misleading.  If you do not have a CAD drawing, contact us to see if we can help you complete your design and create a CAD drawing for your part.  Once you have a drawing, please us an .IGS or .STP along with a .PDF of the drawing and <a href="/quote-request/">we would be be happy to provide you a quote.</a></p>
                
            </div>
         </div>
          
    </div>
 </div> <!-- end main container -->
<?php } ?>


<?php genesis(); ?>