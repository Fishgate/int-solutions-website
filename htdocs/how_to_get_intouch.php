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
        <div id="contentwrap_3" class="clearfix">
            <?php include 'includes/coverall.php' ?>
            <!-- ///////////////////////////// SECTION ONE \\\\\\\\\\ -->
            <div class="left block clearfix">
                <a href="index.php">
                    <div class="left inner_single white_BG">
                        <img src="img/logo.png" alt="Integrated Solutions Logo" />
                    </div>
                </a>
                <div class="left inner_single white_BG">
                    <h2 class="generic_heading_h2 blue_light">How to<br /><span class="border_top_grey">Get in touch</span></h2>
                </div>
                <div class="left inner_single no_padding_single">
                    <img src="img/triangles.jpg" alt="Triangle deoration" />
                </div>
                
                <div class="left inner_single blue_light_BG">
                    <h1>Leading change.</h1>
                    <h2>Project Construction Management</h2>
                </div>
                <div class="left inner_double white_BG">
                    <p class="grey"><strong>Should you be interested in learning more about Integrated Solutions,</strong> or have any other enquiries, please feel free to contact us.</p>
                </div>
                <!--/// 3 GENERIC LINKS IN FIRST BLOCK \\\-->
                <?php// include 'includes/generic3intouch.php' ?>
                <div class='left inner_single blue_dark_BG'>
                    <h2 class="generic_heading_h2 white">Contact Details</h2>
                    <p>Email: <a class='white' href='mailto:info@intsolutions.co.za'>info@intsolutions.co.za</a>
                        <br />
                        Phone: +27 21 525 1525 
                        <br />
                        Fax: +27 21 551 8625
                    </p>
                    <div class="shadowed_single"></div>
                </div>
                <div class='left inner_single blue_light_BG'>
                    <h2 class="generic_heading_h2 white">Physical Address</h2>
                    <p class='white'>
                        Lesedi House, 6 Edison Way<br />
                        Century City, Cape Town<br />
                        South Africa
                    </p>
                    <div class="shadowed_single"></div>
                </div>
                <div class='left inner_single blue_light_BG'>
                    <h2 class="generic_heading_h2 white">GPS COORDINATES</h2>
                    <p class='white'>-33.881699, 18.520503</p>
                    <div class="shadowed_single"></div>
                </div>
            </div>
             <!-- ///////////////////////////// SECTION TWO \\\\\\\\\\ -->
            <div class="block left clearfix">
                    <iframe style="padding: 5px;" width="771" height="472" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=-33.881699,+18.520503&amp;aq=&amp;sll=-33.915538,18.656059&amp;sspn=1.212558,2.469177&amp;ie=UTF8&amp;t=m&amp;ll=-33.881675,18.52046&amp;spn=0.022089,0.043688&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=-33.881699,+18.520503&amp;aq=&amp;sll=-33.915538,18.656059&amp;sspn=1.212558,2.469177&amp;ie=UTF8&amp;t=m&amp;ll=-33.881675,18.52046&amp;spn=0.022089,0.043688&amp;z=14" style="color:#0084A9; font-weight: bold;text-align:left; position: relative; bottom: 35px; left: 85px; background: rgba(255, 255, 255, 0.8); padding: 5px;">View Larger Map</a></small>
                    <!--<div class="shadowed_double"></div>-->
            </div>
            
            <!-- ///////////////////////////// SECTION THREE \\\\\\\\\\ -->
            <div class="block left clearfix">
                <div class='left inner_full_rowspan2 blue_dark_BG'>
                    <form id="contactform" class='clearfix'>
                        <div class="left">
                            <input type='text' name='name' id='name' placeholder='Name:*' />
                            <br />
                            <input type='tel' name='phone' id='phone' placeholder='Contact Number:' />
                            <br />
                            <input type='email' name='email' id='email' placeholder='Email Address:*' />
                        </div>
                        
                        <div class="right clearfix">
                            <textarea name="message" placeholder='Message:'></textarea>
                            <br />
                            <p style="text-align: right;">*Required Field</p>
                            <div class="right button blue_light_BG white form_submit">Submit</div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>

        
        
        
        <!-- ===================================================
                        GOOGLE ANALYTICS        
        ===================================================== -->
            <?php include 'includes/footer.php'; ?>
    </body>
</html>
