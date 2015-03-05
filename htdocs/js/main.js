$(document).ready(function(){
    //===============================================================
    //                    RETINA CHECK
    //   http://stackoverflow.com/questions/13747364/media-queries-target-retina-macbook-pro-only
    //===============================================================
    var retina = (window.retina || window.devicePixelRatio > 1);
    if(retina){
        $('#contentwrap').css('width','4500px');
        $('#contentwrap_1').css('width','1000px');
        $('#contentwrap_2').css('width','1700px');
        $('#contentwrap_3').css('width','2550px');
        $('#contentwrap_4').css('width','3380px');
        $('#contentwrap_5').css('width','4800px');
    }
    
    
     //===============================================================
    //                      COOKIE STUFF
    //===============================================================
        if(cookiecheck.cookiestuff === 0){
           $.growl.notice({message: 'Please scroll to see more content'});
        }
    
    
    
    //===============================================================
    //                      FANCYBOX INIT
    //===============================================================
    $(".fancybox").fancybox();
    
    //===============================================================
    //                      HIDE/SHOW FEATURE TEXT
    //===============================================================
    $('.slideshow_text').mouseenter(function(){
        $(this).stop();
        $(this).animate({bottom: '0'}, 'fast');
    });
    
    $('.slideshow_text').mouseleave(function(){
        $(this).stop();
        $(this).animate({bottom: '-80px'}, 'slow');
    });
    
    
    //===============================================================
    //                SIDE SCROLLING STUFF
    //===============================================================
    //make side scrolling happen, also pre built JS
    $('body, html').mousewheel(function(event, delta) {
            this.scrollLeft -= (delta * 30);
            event.preventDefault();
    });

        

    
    
    
    //===============================================================
    //                    CYCLE SLIDER
    //===============================================================
    //==== SLIDESHOW IMAGES ON HOME PAGE
    $('.slideshow').cycle({
        fx: 'scrollLeft',
        delay: 9000,
        timeout: 9000
    });
    //==== SLIDESHOW TEXT ON HOME PAGE
    $('.slideshow_text').cycle({
        fx: 'fade',
        delay: 9000,
        timeout: 9000
    });
    
    //===============================================================
    //                SLIDE OUT NAVIGATION
    //===============================================================
    $('#navigation').mouseenter(function(){
        $(this).stop();
        $(this).animate({'left': 0}, 'fast');
    });
    
    $('#navigation').mouseleave(function(){
        $(this).stop();
        $(this).animate({'left': -250}, 'fast');
    });
    
    
    //===============================================================
    //                     FANCY OVERLAYS
    //===============================================================
    
    //----------- OVERLAYS JS FOR BLOCKS
    $('.link_block').mouseenter(function(){
        $(this).find('.title').stop();
        $(this).find('.overlay, .overlay_double_rowspan2, .overlay_single_col2').stop();
        $(this).find('.overlay, .overlay_double_rowspan2, .overlay_single_col2').animate({opacity: '1'}, 'fast');
        $(this).find('.title').css('display', 'block');
    });
    
    $('.link_block').mouseleave(function(){
        $(this).find('.overlay, .overlay_double_rowspan2, .overlay_single_col2').stop();
        $(this).find('.overlay').animate({opacity: '0'}, 'slow');
        $(this).find('.overlay_double_rowspan2, .overlay_single_col2').animate({opacity: '0'}, 'slow');
        $(this).find('.title').css('display', 'none');
    });
    
    //----------- OVERLAYS JS FOR IMAGE BLOCKS
    $('.link_block_graphic').mouseenter(function(){
        $(this).find('.title').stop();
        $(this).find('.overlay, .overlay_double_rowspan2, .overlay_single_col2').stop();
        $(this).find('.overlay, .overlay_double_rowspan2, .overlay_single_col2').animate({height: '100%'}, 'fast');
        $(this).find('.title').css('display', 'block');
    });
    
    $('.link_block_graphic').mouseleave(function(){
        $(this).find('.overlay, .overlay_double_rowspan2, .overlay_single_col2').stop();
        $(this).find('.overlay').animate({height: '0'}, 'slow');
        $(this).find('.overlay_double_rowspan2, .overlay_single_col2').animate({height: '0'}, 'slow');
        $(this).find('.title').css('display', 'none');
    });
    
    
    
    //===============================================================
    //                    VALIDATION / GROWL ALERTS
    //===============================================================
    //-- check for empty fields
    $('.form_submit').click(function(){
        var valid_name = validate('#name');
        var valid_email = validate_email('#email');
        
        if(valid_name && valid_email){
            $.ajax({
               url: 'mail.exec.php',
               type: 'POST',
               data: $('#contactform').serialize(),
               success: function(result) {
                   var res = result.trim();
                   if(res === 'success'){
                       $.growl.notice({message: 'Thank you, you will recieve a confirmation email of you request shortly.'});
                   }else{
                       console.log(res);
                   }
               },
               error: function(result) {
                    console.log(result);
               }
            });
        }else{
            $.growl.error({message: 'Please fill in all the required form fields correctly before submitting.'});
        }

    });
    
});
