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
        <div id="contentwrap_2" class="clearfix">
            <?php include 'includes/coverall.php' ?>
            <!-- ///////////////////////////// SECTION ONE \\\\\\\\\\ -->
            <div class="left block clearfix">
                <a href="index.php">
                    <div class="left inner_single white_BG">
                        <img src="img/logo.png" alt="Integrated Solutions Logo" />
                    </div>
                </a>
                <div class="left inner_single white_BG">
                    <h2 class="generic_heading_h2 blue_light">What<br /><span class="border_top_grey">They Say</span></h2>
                </div>
                <div class="left inner_single no_padding_single">
                    <img src="img/triangles.jpg" alt="Triangle deoration" />
                </div>
                
                <div class="left inner_single blue_light_BG">
                    <h1>Leading change.</h1>
                    <h2>Project Construction Management</h2>
                </div>
                <div class="left inner_double white_BG">
                    <p class="grey">At Integrated Solutions, we pride ourselves on the experience each and every client or partner has with our company. And if the opinions featured here are anything to go by, we’re constantly doing ourselves proud.</p>
                </div>
                
                <!--/// 3 GENERIC LINKS IN FIRST BLOCK \\\-->
                <?php include 'includes/generic3.php' ?>
                
            </div>
             <!-- ///////////////////////////// SECTION TWO \\\\\\\\\\ -->
            <div class="block left clearfix">
                <div class="left inner_single blue_dark_BG">
                    <h2 class="generic_heading_h2_cap">Jacky<br /><span class="border_top_white">Steyn</span></h2>
                </div>
                <div class="left inner_double white_BG">
                    <p class="grey">"No project was too big or too small for Integrated Solutions. They were always willing to assist and always dealt with the matters on hand in a very professional way."</p>
                    <p><a>Jacky Steyn, Site Coordinator, Itron Projects</a></p>
                </div>
                
                <div class="left inner_single blue_light_BG">
                    <h2 class="generic_heading_h2_cap">Matthew<br /><span class="border_top_white">Carbutt</span></h2>
                </div>
                <div class="left inner_double white_BG">
                    <p class="grey">"As a Project Management company, Integrated Solutions has proven that they have a wide knowledge base to draw from with regards to the various disciplines required within the building industry."</p>
                    <p><a>Matthew Carbutt, Fast Fire & Security National</a></p>
                </div>
                
                <div class="left inner_single grey_BG">
                    <h2 class="generic_heading_h2_cap">Jacques<br /><span class="border_top_white">Moolman</span></h2>
                    <div class="shadowed_single"></div>
                </div>
                <div class="left inner_double white_BG">
                    <p class="grey">"The fact that they were able to project manage it to such detail on a day-to-day scale, and the way they did it, was just amazing."</p>
                    <p><a>Jacques Moolman, General Manager: Beacon Island Lifestyle Resort</a></p>
                </div>
            </div>
             
        </div>

        
        
        
        <!-- ===================================================
                        GOOGLE ANALYTICS        
        ===================================================== -->
            <?php include 'includes/footer.php'; ?>
    </body>
</html>
