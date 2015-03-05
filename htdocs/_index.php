<?php

require_once('classes/RandomImage.php');

$randomImgs = new RandomImage('./image_data.json');
$smallImgs = $randomImgs->prepareArray('small');



$exp = time() + 31536000;
setcookie('firsttimer', '1', $exp);


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <!-- ===================================================
                             HEADER
        ===================================================== -->
    <?php include 'includes/header.php'?>
    
    
    <body>
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- ===================================================
                             LANGUAGE SELECT
        ===================================================== -->
        <?php include 'includes/language.php'?>
        
        
        <!-- ===================================================
                             SIDE NAVIGATION
        ===================================================== -->
        <nav id="navigation">
            <div class="decoration"></div>
            <div class="decoration_blue"></div>
            <div class="decoration_white"></div>
            
            <div id="nav_items">
                <?php include 'includes/nav.php'; ?>
            </div>
        </nav>
        
        <nav id="ipad_nav">
            <?php include 'includes/nav_ipad.php'; ?>
        </nav>
        <!-- ===================================================
                               CONTENT
        =====================================================-->
        <div id="contentwrap_5" class="clearfix">
            <?php include 'includes/coverall.php' ?>
            <!-- ///////////////////////////// SECTION ONE \\\\\\\\\\ -->
            <div class="block left clearfix">
                <div class="left">
                    <div class="inner_single white_BG">
                        <img src="img/logo.png" alt="Integrated Solutions Logo" />
                    </div>
                    <div style="margin: 10px 5px" class="inner_single blue_light_BG">
                        <h1>Leading change.</h1>
                        <h2>Project Construction Management</h2>
                    </div>
                    <a href="how_to_get_intouch.php" class="white">
                        <div class="inner_single blue_dark_BG link_block">
                            <div class="overlay"></div>
                            <h1 class="generic_heading">How to<br /><span class="border_top_white">get in touch</span></h1>
                            <img class="icon" src="img/icon_getintouch.png" alt="How to get in touch" />
                            <div class="shadowed_single"></div>
                        </div>
                    </a>
                </div>
                
                    <div class="left inner_double_rowspan2 no_padding_double" style="overflow: hidden;">
                        
                        <div id="next"><img src="img/next.png" alt="next button" /></div>
                        <div id="prev"><img src="img/prev.png" alt="previous button" /></div>
                        <div class="slideshow">
                            <div class="slide" style="position: relative"><!-- /// SLIDER IMAGE 1 \\\-->
                                <img src="img/image_news.jpg" alt="photo" />
                            </div>
                            <!--<div class="slide">
                                <img src="img/image_howwework.jpg" alt="photo" />
                            </div>-->
                            <div class="slide"><!-- /// SLIDER IMAGE 3 \\\-->
                                <img src="img/image_whoweare.jpg" alt="photo" />
                            </div>
                            <div class="slide"><!-- /// SLIDER IMAGE 4 \\\-->
                                <img src="img/projects/Pezula/Featured/pezula_2_featured.jpg" alt="photo" />
                            </div>
                            <div class="slide"><!-- /// SLIDER IMAGE 5 \\\-->
                                <img src="img/projects/ThuoGaming/Featured/thuo_gaming_4_featured.jpg" alt="photo" />
                            </div>
                        </div>
                        <div class="slideshow_text grey_BG">
                            <div class="slide"><!--// SLIDER TEXT 1 \\-->
                                <h1 class="grey">Beacon Island</h1>
                                <br />
                                <p class="grey"><strong>The Beacon Island Lifestyle Resort</strong> is the first leisure resort in South Africa to be closed down for 11 weeks...<a href="project_beacon_2011.php">view more</a></p>
                            </div>
                            
                            <div class="slide"><!--// SLIDER TEXT 3 \\-->
                                <h1 class="grey">The Team</h1>
                                <br />
                                <p class="grey"><strong>The Integrated Solutions team of experts</strong> all come from a construction background and...<a href="who_we_are.php">view more</a></p>
                            </div>
                            <div class="slide"><!--// SLIDER TEXT 4 \\-->
                                <h1 class="grey">Pezula Resort Hotel & Spa</h1>
                                <br />
                                <p class="grey"><strong>Construction of a new 78 room</strong>, 5 star boutique hotel situated in Knysna next to the Pezula Golf course and country club...<a href="project_pezula.php">view more</a></p>
                            </div>
                            <div class="slide"><!--// SLIDER TEXT 4 \\-->
                                <h1 class="grey">Thuo Gaming</h1>
                                <br />
                                <p class="grey"><strong>New office installation (AAA finishes) for Thuo Gaming</strong> – 1600m<sup>2</sup> which incorporated two tenancies...<a href="project_thuo.php">view more</a></p>
                            </div>
                        </div>
                    </div>
                
                    <div class="left inner_double white_BG">
                        <p class="grey">From conception to completion, Integrated Solutions employs 10 years of experience, proven work methodologies and unrivalled dedication to provide a turnkey solution for your project.</p>
                        <div class="shadowed_double"></div>
                    </div>
            </div>
            
             <!-- ///////////////////////////// SECTION TWO \\\\\\\\\\ -->
             <div class="block left clearfix">
                 <div class="left">
                     <a href="<?php echo $smallImgs[0]['project_url']; ?>">
                        <div class="inner_single_rowspan2 no_padding_single_rowspan2 link_block_graphic">
                            <div class="overlay_single_col2">
                                <div class="title"><?php echo $smallImgs[0]['title']; ?></div>
                            </div>
                            <img src="<?php echo $smallImgs[0]['src']; ?>" alt="photo" />
                            <img class="icon" src="img/icon_magnify.png" alt="view image" />
                        </div>
                    </a>
                     <a href="why_us.php" class="white">
                        <div class="inner_single blue_dark_BG link_block">
                           <div class="overlay"></div>
                           <h1 class="generic_heading"><span class="border_bottom_white">Why</span><br />Us ?</h1>
                           <img class="icon" src="img/icon_whyus.png" alt="Why Us" />
                           <div class="shadowed_single"></div>
                       </div>
                     </a>
                 </div>
                 
                 <div class="left">
                     <a href="what_we_do.php" class="white">
                        <div class="inner_single blue_dark_BG link_block">
                           <div class="overlay"></div>
                           <h1 class="generic_heading">What<br /><span class="border_top_white">We Do</span></h1>
                           <img class="icon" src="img/icon_whatwedo.png" alt="What We Do" />
                       </div>
                     </a>
                     <div class="inner_single_rowspan2 white_BG">
                        <p class="grey"><strong>Integrated Solutions manages and monitors all phases of the construction project</strong> including the organisation of the required resources and consultants...<a href="what_we_do.php">view more</a></p>
                        <div class="shadowed_single"></div>
                    </div>
                 </div>
                 
                 <div class="left">
                     <div class="inner_single no_padding_single">
                        <img src="img/triangles.jpg" alt="Triangle deoration" />
                    </div>
                    <a href="<?php echo $smallImgs[1]['project_url']; ?>">
                        <div class="inner_single_rowspan2 no_padding_single_rowspan2 link_block_graphic">
                            <div class="overlay_single_col2">
                                <div class="title"><?php echo $smallImgs[1]['title']; ?></div>
                            </div>
                            <img src="<?php echo $smallImgs[1]['src']; ?>" alt="photo" />
                            <img class="icon" src="img/icon_magnify.png" alt="view image" />
                            <div class="shadowed_single"></div>
                        </div>
                    </a>
                 </div> 
            </div>
            
            <!-- ///////////////////////////// SECTION THREE \\\\\\\\\\ -->
            <div class="block left clearfix">
                <a href="how_we_work.php" class="white">
                    <div class="left inner_single blue_dark_BG link_block">
                        <div class="overlay"></div>
                        <h1 class="generic_heading">How<br /><span class="border_top_white">We Work</span></h1>
                        <img class="icon" src="img/icon_howwework.png" alt="How We Work" />
                    </div>
                </a>
                <div class="left inner_double white_BG">
                    <p class="grey"><strong>Our work methodology is based on the principle of Value Engineering</strong> - finding the perfect balance between functionality and cost to ensure that every project gets maximum value from the capital investment made...<a href="how_we_work.php">view more</a></p>
                </div>
                
                <a href="project_pezula.php">
                    <div class="left inner_double_rowspan2 no_padding_double link_block_graphic">
                        <div class="overlay_double_rowspan2">
                            <div class="title">Pezula</div>
                        </div>
                            <img src="img/image_howwework.jpg" alt="photo" />
                            <img class="icon" src="img/icon_magnify.png" alt="view image" />
                            <div class="shadowed_double"></div>
                    </div>
                </a>
                <a href="<?php echo $smallImgs[2]['project_url']; ?>">
                    <div class="inner_single_rowspan2 no_padding_single_rowspan2 link_block_graphic">
                        <div class="overlay_single_col2">
                            <div class="title"><?php echo $smallImgs[2]['title']; ?></div>
                        </div>
                        <img src="<?php echo $smallImgs[2]['src']; ?>" alt="photo" />
                        <img class="icon" src="img/icon_magnify.png" alt="view image" />
                        <div class="shadowed_single"></div>
                    </div>
                </a>
            </div>
            <!--// END THREE \\-->
            
            <!--///////////////////////////////////////////// SECTION FOUR \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
            <div class="block left clearfix">
                <div class="left">
                    <div class="inner_single_rowspan2 white_BG">
                        <p class="grey"><strong>Leading change</strong> is not just a marketing phrase. The Integrated Solutions team is known for walking the walk - and we’ve got the project portfolio to prove it...<a href="our_work.php">view more</a></p>
                    </div>
                    <div class="inner_single no_padding_single">
                        <img src="img/triangles.jpg" alt="Triangle deoration" />
                        <div class="shadowed_single"></div>
                    </div>
                </div>
                
                <div class="clearfix">
                    <div class="left inner_double_rowspan2 no_padding_double_video">
                        <iframe width="510" height="287" src="http://www.youtube.com/embed/RJ4o5LOJMiM" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <a href="our_work.php" class="white">
                        <div class="left inner_single blue_dark_BG link_block">
                            <div class="overlay"></div>
                            <h1 class="generic_heading">Work<br /><span class="border_top_white">We've Done</span></h1>
                            <img class="icon" src="img/icon_ourwork.png" alt="Our Work" />
                            <div class="shadowed_single"></div>
                        </div>
                    </a>
                    <div class="left inner_single no_padding_single">
                        <img src="img/triangles.jpg" alt="Triangle deoration" />
                        <div class="shadowed_single"></div>
                    </div>
                </div>    
            </div>
            
            <!-- ///////////////////////////// SECTION FIVE \\\\\\\\\\ -->
            <div class="block left clearfix">
                <div class="inner_single_colspan3 white_BG">
                    <p class="grey"><strong>The Integrated Solutions team of experts</strong> all come from a construction background and between us we have a broad base of experience in Project Management, Construction Management. Quantity Surveying and Interior Design. This first-hand experience equips us to better advise our clients and guide the entire professional team of role-players and contractors, from start to finish...<a href="who_we_are.php">view more</a></p>
                </div>
                
                 <div class="left inner_double_rowspan2 no_padding_double link_block_graphic">
                     <div class="overlay_double_rowspan2">
                         <div class="title">The Integrated Solutions Team</div>
                     </div>
                    <img src="img/image_whoweare.jpg" alt="Team Photo" />
                    <img class="icon" src="img/icon_magnify.png" alt="view image" />
                    <div class="shadowed_double"></div>
                </div>
                <a href="who_we_are.php" class="white">
                    <div class="left inner_single blue_dark_BG link_block">
                        <div class="overlay">
                        </div>
                        <h1 class="generic_heading">Who<br /><span class="border_top_white">We Are</span></h1>
                        <img class="icon" src="img/icon_whoweare.png" alt="Who We Are" />
                    </div>
                </a>
                <div class="left inner_single no_padding_single">
                    <img src="img/triangles.jpg" alt="Triangle deoration" />
                    <div class="shadowed_single"></div>
                </div>
            </div>
            
            <!-- ///////////////////////////// SECTION SIX \\\\\\\\\\ -->
            <div class="block left clearfix">
                <a href="project_pezula.php">
                    <div class="left inner_double_rowspan2 no_padding_double link_block_graphic">
                        <div class="overlay_double_rowspan2">
                            <div class="title">Pezula</div>
                        </div>
                       <img src="img/image_whattheysay.jpg" alt="Team Photo" />
                       <img class="icon" src="img/icon_magnify.png" alt="view image" />
                   </div>
                </a>
                <a href="what_they_say.php" class="white">
                    <div class="left inner_single blue_dark_BG link_block">
                        <div class="overlay">
                        </div>
                        <h1 class="generic_heading">What<br /><span class="border_top_white">They Say</span></h1>
                        <img class="icon" src="img/icon_whattheysay.png" alt="What They Say" />
                    </div>
                </a>
                <div class="left inner_single no_padding_single">
                    <img src="img/triangles.jpg" alt="Triangle deoration" />
                </div>
                
                <div class="left inner_double white_BG clearfix">
                    <div class="parenthesis_holder left">
                        <img src="img/icon_quote_open.png" alt="parenthesis" />
                    </div>
                    <p class="left quoted_text grey">No project was too big or too small for Integrated Solutions. They were always willing to assist and always dealt with the matters on hand in a very professional manner.</p>
                    <div class="parenthesis_holder left">
                        <img class="parenthesis_close" src="img/icon_quote_close.png" alt="parenthesis" />
                    </div>
                    <div class="shadowed_double"></div>
                </div>
            </div> 
            

            
        </div>

        
        <!-- ===================================================
                        GOOGLE ANALYTICS        
        ===================================================== -->
            <?php include 'includes/footer.php'; ?>
    </body>
</html>
