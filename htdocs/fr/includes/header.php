<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Integrated Solutions</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=1" />
    <meta name="description" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- JQUERY GROWL CSS -->
    <link rel="stylesheet" href="css/jquery.growl.css" />

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>');</script>

    <!-- JQUERY UI AND MOUSEWHEEL STUFF -->
    <script type='text/javascript' src='js/jquery.easing.1.3.js?ver=3.5'></script>
    <script type='text/javascript' src='js/jquery.ui.core.min.js?ver=1.9.2'></script>
    <script type='text/javascript' src='js/jquery.ui.mouse.min.js?ver=1.9.2'></script>
    <script type='text/javascript' src='js/jquery.mousewheel.min.js?ver=3.5'></script>

    <!-- CAPTURE COOKIE STUFF -->
    <script>
        var cookiecheck = {'cookiestuff': 0 };
    </script>
    <?php
    if(isset($_COOKIE['firsttimer']) && !empty($_COOKIE['firsttimer'])){
    ?>
        
    <script>
         cookiecheck = {'cookiestuff': <?php echo $_COOKIE['firsttimer'] ?>};
    </script>
    <?php } ?>
    
    <!-- CYCLE PLUGIN DEPENDENCIES -->
    <script type="text/javascript" src="js/cycle.js"></script>

    <!-- JQUERY GROWL -->
    <script type='text/javascript' src='js/jquery.growl.js'></script>

    <!-- FORM VALIDATION: Author - Kyle @Fishgate -->
    <script type='text/javascript' src='js/validation.js'></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    
    
</head>