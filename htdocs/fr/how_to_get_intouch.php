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
                    <h2 class="generic_heading_h2 blue_light">Comment<br /><span class="border_top_grey">nous contacter</span></h2>
                </div>
                <div class="left inner_single no_padding_single">
                    <img src="img/triangles.jpg" alt="Triangle deoration" />
                </div>
                
                <div class="left inner_single blue_light_BG">
                    <h1>Leading change.</h1>
                    <h2>Project Construction Management</h2>
                </div>
                <div class="left inner_double white_BG">
                    <p class="grey"><strong>Si vous souhaitez en savoir plus sur Integrated Solutions</strong>, ou simplement nous poser une question, n’hésitez pas à nous contacter.</p>
                </div>
                <!--/// 3 GENERIC LINKS IN FIRST BLOCK \\\-->
                <?php// include 'includes/generic3intouch.php' ?>
                <div class='left inner_single blue_dark_BG'>
                    <h2 class="generic_heading_h2 white">COORDONNÉES</h2>
                    <p>Courriel: <a class='white' href='mailto:info@intsolutions.co.za'>info@intsolutions.co.za</a>
                        <br />
                        Tél.: +27 21 525 1525 
                        <br />
                        Fax: +27 21 551 8625
                    </p>
                    <div class="shadowed_single"></div>
                </div>
                <div class='left inner_single blue_light_BG'>
                    <h2 class="generic_heading_h2 white">ADRESSE</h2>
                    <p class='white'>
                        Lesedi House, 6 Edison Way<br />
                        Century City, Le Cap<br />
                        Afrique du Sud
                    </p>
                    <div class="shadowed_single"></div>
                </div>
                <div class='left inner_single blue_light_BG'>
                    <h2 class="generic_heading_h2 white">COORDONNÉES GPS</h2>
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
                            <input type='text' name='name' id='name' placeholder='Nom:*' />
                            <br />
                            <input type='tel' name='phone' id='phone' placeholder='Tél.:' />
                            <br />
                            <input type='email' name='email' id='email' placeholder='Courriel:*' />
                        </div>
                        
                        <div class="right clearfix">
                            <textarea name="message" placeholder='Message:'></textarea>
                            <br />
                            <p style="text-align: right;">*Champ obligatoire</p>
                            <div class="right button blue_light_BG white form_submit">Envoyer</div>
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
