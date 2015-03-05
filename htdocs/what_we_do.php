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
                    <h2 class="generic_heading_h2 blue_light">What<br /><span class="border_top_grey">We Do</span></h2>
                </div>
                <div class="left inner_single no_padding_single">
                    <img src="img/triangles.jpg" alt="Triangle deoration" />
                </div>
                
                <div class="left inner_single blue_light_BG">
                    <h1>Leading change.</h1>
                    <h2>Project Construction Management</h2>
                </div>
                <div class="left inner_double white_BG">
                    <p class="grey"><strong>Integrated Solutions manages and monitors all phases of the construction project</strong>, including the organisation of the required resources and consultants.</p>
                </div>
                
                <!--/// 3 GENERIC LINKS IN FIRST BLOCK \\\-->
                <?php include 'includes/generic3.php' ?>
                
            </div>
             <!-- ///////////////////////////// SECTION TWO \\\\\\\\\\ -->
            <div class="block left clearfix">
                <div class="left white_BG inner_double_rowspan2">
                    <div class="left half grey">
                        <p><span class="blue_light">Our management services include:</span></p>
                        <ul>
                            <li>Project Management</li>
                            <li>Construction Management</li>
                            <li>Cost Control</li>
                            <li>Interior Design</li>
                        </ul>
                    </div>
                    
                    <div class="left half grey">
                        <p><span class="blue_light">We focus on the following sectors:</span></p>
                        <ul>
                            <li>Hospitality</li>
                            <li>Industrial</li>
                            <li>Commercial</li>
                            <li>Corporate</li>
                        </ul>
                    </div>
                    
                    <p class="grey">We follow a hands-on approach with sound knowledge of Mechanical, Electrical, Plumbing, Air-conditioning, Life &amp; Safety and IT infrastructure enabling us to provide a strong infrastructure backbone for new and refurbished buildings.</p>
                    
                    <p class="grey">With vast experience of working in Africa, we can advise on systems that are suited to Africa's conditions - keeping in mind location, service intervals and response times without compromising on international standards.</p>
                </div>
                <a href="project_pezula.php">
                    <div class="left inner_single no_padding_single link_block_graphic">
                        <div class="overlay">
                            <div class="title">Pezula</div>
                        </div>
                        <img src="img/projects/Pezula/Small/pezula_6_small.jpg" alt="photo" />
                        <img class="icon" src="img/icon_magnify.png" alt="view image" />
                    </div>
                </a>
                <a href="project_hazyview.php">
                    <div class="left inner_single no_padding_single link_block_graphic">
                        <div class="overlay">
                            <div class="title">Hazyview</div>
                        </div>
                        <img src="img/projects/Hazyview/Small/hazyview_3_small.jpg" alt="photo" />
                        <img class="icon" src="img/icon_magnify.png" alt="view image" />
                    </div>
                </a>
                
                <div class="left inner_single no_padding_single">
                    <img src="img/triangles.jpg" alt="Triangle deoration" />
                    <div class="shadowed_single"></div>
                </div>
                <a href="project_beacon_2011.php">
                    <div class="left inner_single no_padding_single link_block_graphic">
                        <div class="overlay">
                            <div class="title">Beacon Island</div>
                        </div>
                        <img src="img/projects/BeaconIsland/Small/beacon_island_1_small.jpg" alt="photo" />
                        <img class="icon" src="img/icon_magnify.png" alt="view image" />
                        <div class="shadowed_single"></div>
                    </div>
                </a>
            </div>
             
        </div>

        
        
        
        <!-- ===================================================
                        GOOGLE ANALYTICS        
        ===================================================== -->
            <?php include 'includes/footer.php'; ?>
    </body>
</html>
