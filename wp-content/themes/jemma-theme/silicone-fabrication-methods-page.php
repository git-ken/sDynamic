<?php

/* 
template name: Custom Silicone Fabrication Methods Page
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
            <h1>Fabrication Methods for Silicone Rubber</h1>
            <div class="space"><hr id="dotted" /></div>
            
            <p>Selecting the appropriate fabrication method for your molded product requires a detailed investigation before choosing. There are various types of fabrication methods. Here, the discussion centers on six basic fabrication methods, their respective benefits, and production challenges. The following fabrication methods are: extrusion, injection molding, liquid injection molding, compression molding, calendering, and transfer molding.</p>
            <p>&nbsp;</p>
            <p>Each of these fabrication methods may have variations from the basic fabrication process. Some of these variation methods include: blow molding, rotational (rotomolding) molding, reaction injection molding, vacuum or thermoforming, matched molding, low pressure molding, and so forth</p>
            <p>&nbsp;</p>
            <p><strong>Extrusion</strong></p>
            <p>&nbsp;</p>
            <p>This method of fabrication is designed for creating uncured raw material by using a die to form the product, which is a uniform cross-sectional shape. The process of extrusion takes the raw material through an extruder, with temperature changes and rotating action of the screw. The material is forced though a designed heated dye that shapes the product before curing. Next, the product is washed and cooled, either by water or air, before cleaning at room temperature. At this stage, the material is cut into the final product specification.</p>
            <p>&nbsp;</p>
            <p>There are many other forms that use the extrusion method. Such forms include blow molding, film extrusion, sheet extrusion, to name a few. Each method type has different benefits in making the final product for the customer.</p>
            <p>&nbsp;</p>
            <div class="faq-img-child">
                <img src="/wp-content/uploads/2015/07/extrusion-molding2.jpg" />
            </div>
            <p><strong>Some benefits to using an extrusion process are as follows:</strong></p>
            <ul>
                <li>1. Low price materials can be used.</li>
                <li>2. Tooling costs are less than molding processes.</li>
                <li>3. Large production quantities.</li>
                <li>4. Short lead times.</li>
                <li>5. Ideal for tubing rods, larger gaskets, seals, wire insulation.</li>
                
            </ul>
            <p>&nbsp;</p>
            <p><strong>Production Challenges for the Extrusion Method</strong></p>
            <ul>
                <li>1. Per part price varies depending upon complexity of dye or part.</li>
                <li>2. A complex dye cost can be resolved by post forming activities to basic shapes.</li>
                <li>3. A slow detailed mechanical process.</li>
                <li>4. Short piece extrusion.</li>
                <li>5. Difficult to maintain tolerance criteria.</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>Type of Products</strong><br />Gaskets, tubing, seals.</p>
            <p>&nbsp;</p>
            
            <p>Injection Molding</p>
            <p>&nbsp;</p>
            <p>Injection molding is designed for creating product material in a more complex process than compression, transfer molding, or liquid injection molding. It is arguably the most common molding method. It is a robust method in which the product can vary greatly in size, complexity, and application. The difference from liquid injection molding is that there are mold halves and the material is forced into the hot cavity with a ram or screw-type plunger. The mold halves are clamped together before inserting the material.</p>
            <p>&nbsp;</p>
            <div class="faq-img-child">
                <img src="/wp-content/uploads/2015/07/injection-molding-process.jpg" />
            </div>
            <p>Short cycle cure times and low viscosity makes injection molding an excellent fit for a variety of products. Mold design, sprue size, and location are critical factors in optimizing the injection mold process. Additionally, high pressure and quick mold fill, as well as short cure time can be designed into the product.</p>
            <p>&nbsp;</p>
            <p><strong>Eight benefits to using an injection molding process are as follows:</strong></p>
            <p>&nbsp;</p>
            <ul>
                <li>1. Accommodates high output production.</li>
                <li>2. Multiple materials can be used at the same time.</li>
                <li>3. Can be automated.</li>
                <li>4. Low per-part production price.</li>
                <li>5. Short molding cycles.</li>
                <li>6. No preform preparation.</li>
                <li>7. No trimming required with correct mold design.</li>
                <li>8. Ideal for products requiring close dimensional tolerances or uniformity.</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>Type of Products</strong><br />Small parts, automobile body panels.</p>
            
            <p>&nbsp;</p>
            <p><strong>Liquid Injection Molding</strong></p>
            <p>Liquid injection is designed for creating product material in cavities. The process accomplishes this by using liquid material through an injection nozzle in the mold cavity. This method differs from other injection molding methods because it relies on mechanical mixing of the raw material. Liquid injection is a ‘high-volume’ process that has heated cavities. The raw material is forced into the closed heated cavity with pressure and the raw material takes the form of the cavity. In this method there is little flash, which means fast turn-around time.</p>
            <p>&nbsp;</p>
            <div class="faq-img-child">
                <img src="/wp-content/uploads/2015/07/Injection-moulding.jpg" />
            </div>
            <p>The mixing of the raw materials are apportioned and dispensed via a series of plungers. One plunger contains the base material, which may be reinforced with additives and fibers. The other plunger holds the catalyst compound that will activate the mixing reaction. The compounded material is then injected into the mold cavity. After hardening, the finished product is ejected from the cavity.</p>
            <p>&nbsp;</p>
            <p><strong>Seven benefits to using a liquid injection molding process are as follows:</strong></p>
            <p>&nbsp;</p>
            <ul>
                <li>1. Shorter cure time than compression and transfer molding.</li>
                <li>2. Ideal for intricate designs, high precision, and close tolerance parts.</li>
                <li>3. Automation increases the cost effectiveness and may decrease the run time.</li>
                <li>4. Suitable for mass production.</li>
                <li>5. Fast cure time.</li>
                <li>6. It is recommended to use an automated process for high production runs, while low production runs are best using manual a process.</li>
                <li>7. Thermal imaging technology may be used to identify potential production errors such as molding flaws or design problems.</li>
            </ul>
            
            <p>&nbsp;</p>
            <p><strong>Production Challenges for the Liquid Injection Molding Method</strong></p>
            <ul>
                <li>1. Flash can be a problem because of low viscosity, which creates secondary operations.</li>
                <li>2. Keeping the cavities clean for identification.</li>
                <li>3. The molding machine relies on a metered pumping system.</li>
                <li>4. Possible increase in maintenance due to cavity wear.</li>
                <li>5. Curing of the product.</li>
                <li>6. Prevention of leakage within mold cavity.</li>
                
            </ul>
            <p>&nbsp;</p>
            <p><strong>Type of Products</strong><br />Gaskets, seals, o-rings, key pads, cable boots, shielding, electronic contacts.</p>
            <p>&nbsp;</p>
            <p><strong>Compression Molding</strong></p>
            <p>&nbsp;</p>
            <p>This method of fabrication is designed for creating product in cavities by placing preform rubber into a heated mold. A pre-measured amount of material (e.g., granules, powders, or pellets) is deposited into the open heated cavity. A heated plunger closes the cavity and applies pressure, usually 15,000 to 20,000 psi. As the material melts, it is driven into all parts of the cavity. The heat and pressure is maintained until the material has cured. Then the cavity is opened and the part is removed. There can be various heating system and multiple cavities employed.</p>
            <p>&nbsp;</p>
            <div class="faq-img-child">
                <img src="/wp-content/uploads/2015/07/Compression-Molding1.jpg" />
            </div>
            <p>It is a relatively low-cost method to produce curved or intricate parts. It consists of two plates to form the cavity. This, in turn, uses a press to force the raw material to melt into the form of the respective mold cavity.</p>
            <p>&nbsp;</p>
            <p><strong>Some benefits to using a compression molding process are as follows:</strong></p>
            <p>&nbsp;</p>
            <ul>
            <li>1. Economical method for short or start-up production runs.</li>
            <li>2. Low to medium production rates.</li>
            <li>3. Suitable for mass production.</li>
            <li>4. Can accommodate small parts as well as larger or more complex shapes.</li>
            <li>5. Short set-up time.</li>
            <li>6. Low waste, providing that the mold cavity is correct.</li>
            </ul>
            
            <p>&nbsp;</p>
            <p><strong>Production Challenges for the Compression Molding Method</strong></p>
            <ul>
                <li>1. Flash can be a problem.</li>
                <li>2. Mold surface finish can affect material flow, including part removal time.</li>
                <li>3. Keeping the cavities clean and identification of both halves of the mold cavity.</li>
                <li>4. Curing of the product.</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>Type of Products</strong><br />Gaskets, seals, o-rings, cushioning pads, automotive parts, such as hoods and fenders.</p>
            <p>&nbsp;</p>
            <p><strong>Calendering</strong></p>
            <p>&nbsp;</p>
            
            <p>Calendering is designed to create product in a continuous sheeting method before processing into the final product. This process uses multiple rollers, either three or four rolls, to compress the soft or semi-liquid raw material into a uniform thick sheet of material. The process is a variable speed process, depending upon the product specific criteria.</p>
            <div class="faq-img-child">
                <img src="/wp-content/uploads/2015/07/calender-machine.jpg" />
            </div>
            <p>&nbsp;</p>
            <p>The main advantage of the calendaring process is to produce long and continuous sheets of uniform thickness. The sheet material may be implemented into a carrier fabric or laminated onto a film or other means.</p>
           <p>&nbsp;</p>
           
           <p><strong>Five benefits to the calendering process are as follows:</strong></p>
           
           <ul>
            <li>1. Calendering can produce product up to a rate of three surface meters per minute.</li>
            <li>2. Most compounds will benefit from mill freshening before processing on a calendar.</li>
            <li>3. Product can be coated onto fabrics.</li>
            <li>4. Silicone rubber is usually calendered at room temperature.</li>
            <li>5. The process may be supported or unsupported.</li>
           </ul>
           <p>&nbsp;</p>
           <p><strong>Production Challenges for the Calendering Molding Method</strong></p>
           <ul>
            <li>1. It is important to heat the rolls to prevent sticking.</li>
            <li>2. Overheating the process may cause scorching of the product.</li>
            <li>3. The selection of roll speed helps to remove air out of the product.</li>
            <li>4. Transfer to fabric may produce poor or intermittent results due to insufficient tack.</li>
            <li>5. When using a release liner, strip the sheet while warm, when possible to prevent tears or sticks.</li>
            <li>6. Creeping of the product is a concern.</li>
           </ul>
           <p>&nbsp;</p>
            <p><strong>Type of Products</strong><br />Die-cut seals and thin sheets of material.</p>
            <p>&nbsp;</p>
            <p><strong>Transfer Molding</strong></p>
            
            <p>&nbsp;</p>
            <p>Transfer molding is designed for creating silicone rubber from cavities. This process involves forcing the material into the mold cavity. This is left until it cools and takes shape of the cavity. A plunger is used to force the material into the cavity through a funnel or sprue. The cavity is heated to melt the material and the mold is kept closed until it cures.</p>
            <p>&nbsp;</p>
            <div class="faq-img-child">
                <img src="/wp-content/uploads/2015/07/transfer-molding.jpg" />
            </div>
            <p>Transfer molding along with compression molding requires a secondary raw material preparation into preset forms. The difference from compression molding is that the preforms are located between the top plate and the plunger in an area known as the ‘pot’.</p>
            <p>&nbsp;</p>
            <p>The primary disadvantage of transfer molding is the increase of waste or excess flash left in the ‘pot’ once the molded product is produced. The removal of the waste material is accomplished by manual trimming, cryogenic processing, tumbling, or precision grinding. These methods depend upon the product material, part size, die tolerance, and quantity of flash.</p>
            <p>&nbsp;</p>
            
            <p><strong>Five benefits to using the transfer molding process are as follows:</strong></p>
            <ul>
                <li>1. Short production cycles.</li>
                <li>2. Smaller tolerances are possible than compression molding.</li>
                <li>3. More complex shapes can be created than using compression molding.</li>
                <li>4. If part configuration traps air, transfer molding is a better option.</li>
                <li>5. Tighter control of dimensional tolerance.</li>
            </ul>
            <p>&nbsp;</p>
            
            <p><strong>Production Challenges for the Transfer Molding Method</strong></p>
            <ul>
            <li>1. Pressure sensitive to ensure quality product.</li>
            <li>2. Flash can become problematic with poor designed molds.</li>
            <li>3. Temperature consistency is important.</li>
            <li>4. Cavity control and identification.</li>
            <li>5. If using a warm or hot transfer pot, it is best to minimize the time that the material is in contact with heat before it fills out the mold.</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>Type of Products</strong><br />Smaller and more detailed parts</p>
            <p>&nbsp;</p>
            <p>In summary, the selection of the correct product molding fabrication process is dependent upon many variables. The final product design criteria, cost, production quantity, delivery time all play a part in the decision. Each of the fabrication methods has its advantages and disadvantages. It is important to understand the sensitivities of the various fabrication methods for converting a raw material compound into a functional and profitable product.</p>
            <p>&nbsp;</p>
            <p>The process cost differences between labor-intensive techniques and more automated choices must be part of the overall decision-making process we well. Process experience and material knowledge is critical in matching and troubleshooting compounds. It is up to the respective organization to choose the best method for their needs.</p>
            
            
            
            
         </div>
          
    </div>
 </div> <!-- end main container -->
<?php } ?>


<?php genesis(); ?>