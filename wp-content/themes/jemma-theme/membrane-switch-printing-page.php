<?php

/* 
template name: Custom Membrane Switch Printing Page
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
            <h1>Comparison of Membrane Switch Printing Technologies</h1>
            
            <div class="space"><hr id="dotted" /></div>
            
            <div class="col-md-12">
                <p>The history of printing started from the era when images were duplicated by means of stamps. The use of round seals for rolling an impression into clay tablets dates back to early Mesopotamian civilization before 3000 BCE. The seals were the most common art work for survival. Later, printing press was invented, which made possible for books, newspapers, and magazines to be produced in great number. Today, advancement in printing technology has made it possible to be used beyond education material especially in membrane switch technology.</p>
                <p>&nbsp;</p>
                <p>Membrane switch technology has become a reliable front panel solution, especially where there are environmental concerns or frequent cleaning is required. Membrane switch designers have been using various design and printing technologies. Some of them are following:</p>
                <p>&nbsp;</p>
                <ul>
                    <li>-Digital</li>
                    <li>-Screen printing</li>
                    <li>-Lithographic printing</li>
                    <li>-Flexographic printing</li>
                </ul>
                
                <p>&nbsp;</p>
                <p><strong>Digital Printing</strong></p>
                <p>&nbsp;</p>
                <p>Digital printing does not use any substrate or special ink. In this process, information is sent from a device, like computer or portable storage device, to the printer in the form of PDFs or other graphic files.</p>
                <p>&nbsp;</p>
                <div class="faq-img-child">
                    <img src="/wp-content/uploads/2015/07/digital-printed-membrane-switch.jpg" />
                </div>
                <p>&nbsp;</p>
                <p>Because of substantially low production costs, digital printing has replaced the screen printing. G. Scott Wood, product manager at EFI VUTEk, says that the digital printing has a major impact on this market. It has a streamlined process and gives you print-on-demand services. Digital printing is ideal for membrane switch design. It enables you to put effects such as fading, textures that are often required in 3D-graphics.</p>
                <p>&nbsp;</p>
                <p>Digital printing is an emerging area. New methods have been developed and tested to increase its compatibility, keeping in view the specific needs and increasing demand of various industries. Recently, laser printing has been introduced which can help produce high quality text and graphics. Because of its results, laser printing became a viable option for consumer and business market.</p>
                <p>&nbsp;</p>
                
                <p><strong>Screen Printing</strong></p>
                <p>&nbsp;</p>
                <p>Screen printing technique has been dated back to China during the “Song Dynasty” (960 – 1279 AD). In screen printing, the desired shape is produced by using a woven mesh, which is actually used to support ink-blocking stencil. Screen printing is a relatively complex process when multicolored image is needed. However, several screens can be used when multiple colors are involved.</p>
                <p>&nbsp;</p>
                <p>Screen printing is used to print the circuit directly on plastic substrate in membrane switch production. This process involves silver or carbon conductive ink.</p>
                <p>&nbsp;</p>
                <p>Screen printing is a best candidate for many membrane switch applications. However, the rise of digital printing has offered flexible options. This is because the screen printing cannot maintain level of profit when the demand of batch production is low say 100 parts per week. This limitation is pushing membrane switch manufacturers towards more cost-effective digital printing option.</p>
                <p>&nbsp;</p>
                <p>Screen printing is still a widely used printing method. In some cases, it is used side-by-side with digital printing to achieve desired results. For instance, screen printing may be used for some components, such as at the circuit layer and digital printing may be used for graphic overlays.</p>
                <p>&nbsp;</p>
                                
                <p><strong>Lithographic Printing</strong></p>
                <p>&nbsp;</p>
                <p>Lithography (or offset lithography) is a technique that depends on two different wetting characteristics to produce any desired image. This technique may also use photographic processes to make negatives.</p>
                <p>&nbsp;</p>
                
                <div class="faq-img-child">
                    <img src="/wp-content/uploads/2015/07/lithographic-printing.jpg" />
                </div>
                <p>&nbsp;</p>
                <p>The lithography plate is a plastic printing plate or flexible aluminum. Modern printing plates have a roughened texture and are covered with a photosensitive emulsion. A photographic negative of the desired image is placed in contact with the emulsion and the plate is exposed to light. After development, the emulsion shows a reverse of the negative image. It is thus a duplicate of the original (positive) image. The plate is then chemically treated so the positive image is receptive to printing inks. The plate is affixed to a drum on a printing press. Rollers apply water (in form of the fountain solution), which wets the non-image areas of the plate and ink. This causes an adherence to the positive image areas. If this image were directly transferred to paper, it would create a positive image This process would wet the paper as well. Instead, the plate rolls against a drum covered with a rubber blanket, which squeezes away the water and picks up the ink. The paper rolls over the blanket drum and the image is transferred to the paper. Because the image is first gets transferred, or offset to the rubber drum, this reproduction method is called offset lithography or offset printing.</p>
                <p>&nbsp;</p>
                <p><strong>Flexographic Printing</strong></p>
                <p>&nbsp;</p>
                <p>Flexographic printing process is a rotary relief method of printing. It uses a printing plate made up of plastic, rubber, or some other flexible material. Recently, the usage of photopolymers has been shown to increase the lifetime and resolution. The image pattern is raised on the plate just like the raised areas on a rubber stamp. To print in a rotary fashion, the plate is attached to a plate cylinder. Ink is applied to a raised image on the plate using an engraved roller, which is called anilox. The anilox roller has small cells or wells all over its surface. The wells transfer a precise volume of ink. Excess ink is wiped off by a doctor blade before printing. This helps in depositing a controlled and limited amount of the ink to the substrate.</p>
                <p>&nbsp;</p>
                
                <div class="faq-img-child">
                    <img src="/wp-content/uploads/2015/07/flexographic.jpg" />
                </div>
                <p>&nbsp;</p>
                <p>Only the raised part (image part) on the plate receives the ink, and the pattern is transferred to the substrate by the pressure of the impression cylinder. Non-image areas are beneath the printing surface and do not reproduce. You can adjust the thickness of the film by controlling the rotating speed and the pressure applied on the substrate.</p>
                
                <p>&nbsp;</p>
                <div class="col-md-12">
                    <h2>Table 1: Comparison of Membrane Switch Printing Technologies</h2>
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table-striped">
                                <thead>
                                    <th></th>
                                    <th>Digital Printing</th>
                                    <th>Lithographic <br /> Printing</th>
                                    <th>Flexographic <br /> Printing</th>
                                    <th>Screen <br /> Printing</th>
                                </thead>
                                <tbody>
                                        <tr><!--1st tr -->
                                            <td><strong>Tools</strong></td>
                                            <td>You only need printer, computer and ink cartridges.</td>
                                            <td>This printing method generally involves many equipment.</td>
                                            <td>More or less, Flexography has similar equipment as compared to Lithography.</td>
                                            <td>This process involves making stencils using a drawn/digitized images.</td>
                                        </tr><!--1st tr -->
                                        <tr><!--2nd tr -->
                                            <td><strong>Efforts</strong></td>
                                            <td>Digital printing is easy to operate by touching of few keys. It is relatively quicker.</td>
                                            <td>Lithographic printing is done from metal plates, with the help of an offset process. It basically goes from the plate cylinder to the blanket cylinder and onto the printed material. It is a relatively a complex process.</td>
                                            <td>Flexographic printing is a simple process, similar to rotary letterpress.</td>
                                            <td>Screen printing is a time consuming process because screens need to be made.</td>
                                        </tr><!--2nd tr -->
                                        <tr><!--3rd tr -->
                                            <td><strong>Quality</strong></td>
                                            <td>The ink doesn’t spread but fades quicker as compared to screen printing. You can create colorful images; you don’t need separate screens for multiple colors.</td>
                                            <td>It is generally used for printing stationary and food packaging cartons.</td>
                                            <td>It is flexible for plastic materials. Hence, it is a good option printing for membrane switch technology.</td>
                                            <td>It offers better quality as the ink gets deeply absorbed and lasts longer.</td>
                                        </tr><!--3rd tr -->
                                        <tr><!--4th tr -->
                                            <td><strong>Cost</strong></td>
                                            <td>There is a one-time investment of computer and printer.</td>
                                            <td>Production cost can be more and presses can be expensive.</td>
                                            <td>Production cost is less but set up cost can be higher as compared to lithographic printing.</td>
                                            <td>Costs get higher with number of screens. If a person want complex image with multiple colors, then slides for every color needs to be created. </td>
                                        </tr><!--4th tr -->
                                </tbody>
                        </table>
                    </div>
                    
                </div>
                
                <p>&nbsp;</p>
                <p>Digital printing, screen printing, flexographic printing, and lithographic printing are widely used technologies in membrane switch applications. However, the ideal printing method depends largely on desired aesthetics and functionality, functional requirements, and cost considerations. While membrane design team can advise you on functional requirements, cost, and aesthetics, understanding these technologies will help product manufacturers.</p>
                <p>&nbsp;</p>
                <p>Within the next few years, printing technology space will see many incredible advancements. Many of which will surprise, fascinate, and stun us. You may come across a wide range of amazing and unusual printers including concrete printers, glass printers, bioprinters, and some of the printers that print on toast.</p>
                
           
            </div>
         </div>
          
    </div>
 </div> <!-- end main container -->
<?php } ?>


<?php genesis(); ?>