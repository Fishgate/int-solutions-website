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
                            <h1 class="generic_heading">Comment<br /><span class="border_top_white">nous contacter</span></h1>
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
                                <p class="grey"><strong>Beacon Island Lifestyle Resort</strong> est la première base de loisirs d’Afrique du Sud...<a href="project_beacon_2011.php">voir</a></p>
                            </div>
                            
                            <div class="slide"><!--// SLIDER TEXT 3 \\-->
                                <h1 class="grey">L’équipe d’Integrated Solutions</h1>
                                <br />
                                <p class="grey">L’équipe d’experts d’Integrated Solutions est une équipe de professionnels...<a href="who_we_are.php">voir</a></p>
                            </div>
                            <div class="slide"><!--// SLIDER TEXT 4 \\-->
                                <h1 class="grey">Pezula Resort Hotel & Spa</h1>
                                <br />
                                <p class="grey">Construction d’un nouvel hôtel-boutique 5 étoiles de 78 chambres à Knysna...<a href="project_pezula.php">voir</a></p>
                            </div>
                            <div class="slide"><!--// SLIDER TEXT 4 \\-->
                                <h1 class="grey">Thuo Gaming</h1>
                                <br />ir
                                <p class="grey">Installation de nouveaux bureaux (finitions AAA) au Thuo Gaming...<a href="project_thuo.php">voir</a></p>
                            </div>
                        </div>
                    </div>
                
                    <div class="left inner_double white_BG">
                        <p class="grey">De la conception à l’achèvement, Integrated Solutions met à votre disposition dix années d’expérience, des méthodologies professionnelles avérées et une capacité inégalée à offrir des solutions clés en main pour vos projets.</p>
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
                           <h1 class="generic_heading"><span class="border_bottom_white">Pourquoi</span><br />nous</h1>
                           <img class="icon" src="img/icon_whyus.png" alt="Why Us" />
                           <div class="shadowed_single"></div>
                       </div>
                     </a>
                 </div>
                 
                 <div class="left">
                     <a href="what_we_do.php" class="white">
                        <div class="inner_single blue_dark_BG link_block">
                           <div class="overlay"></div>
                           <h1 class="generic_heading">Ce que<br /><span class="border_top_white">nous faisons</span></h1>
                           <img class="icon" src="img/icon_whatwedo.png" alt="What We Do" />
                       </div>
                     </a>
                     <div class="inner_single_rowspan2 white_BG">
                        <p class="grey"><strong>Integrated Solutions gère et supervise toutes les phases des projets de construction</strong> dont l’organisation des ressources requises et des consultants...<a href="what_we_do.php">voir</a></p>
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
                        <h1 class="generic_heading">Comment<br /><span class="border_top_white">nous travaillons</span></h1>
                        <img class="icon" src="img/icon_howwework.png" alt="How We Work" />
                    </div>
                </a>
                <div class="left inner_double white_BG">
                    <p class="grey"><strong>Notre méthodologie de travail repose sur le principe de l’Ingénierie de la valeur</strong> - trouver le parfait équilibre entre la fonctionnalité et le coût, pour avoir la garantie que chaque projet tire le maximum de valeur des investissements réalisés...<a href="how_we_work.php">voir</a></p>
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
                        <p class="grey"><strong>Leading change</strong> n’est pas seulement un slogan. L’équipe Integrated Solutions est connue pour toujours allier le geste à la parole – et nous avons le portefeuille de projets pour le prouver...<a href="our_work.php">voir</a></p>
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
                            <h1 class="generic_heading">Ce que<br /><span class="border_top_white">nous avons fait</span></h1>
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
                    <p class="grey">L’équipe d’experts d’Integrated Solutions est une équipe de professionnels de la construction, parfaitement expérimentés dans les domaines de la gestion de projets, la gestion de construction, l’économie de la construction et l’architecture intérieure. Forts de ces riches expériences, nous sommes à même de mieux conseiller nos clients et d’encadrer sérieusement nos équipes d’intervenants et de sous-traitants, de bout au bout...<a href="who_we_are.php">voir</a></p>
                </div>
                
                 <div class="left inner_double_rowspan2 no_padding_double link_block_graphic">
                     <div class="overlay_double_rowspan2">
                         <div class="title">L’équipe d’Integrated Solutions</div>
                     </div>
                    <img src="img/image_whoweare.jpg" alt="Team Photo" />
                    <img class="icon" src="img/icon_magnify.png" alt="view image" />
                    <div class="shadowed_double"></div>
                </div>
                <a href="who_we_are.php" class="white">
                    <div class="left inner_single blue_dark_BG link_block">
                        <div class="overlay">
                        </div>
                        <h1 class="generic_heading">Qui nous<br /><span class="border_top_white">sommes</span></h1>
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
                        <h1 class="generic_heading">Ce qu’on<br /><span class="border_top_white">dit de nous</span></h1>
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
                    <p class="left quoted_text grey">Aucun projet n’est trop gros ou trop petit pour Integrated Solutions. Ils veulent toujours aider et gèrent tout de manière très professionnelle.</p>
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
