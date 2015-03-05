/* Author: Tyrone Stafford

*/

$(document).ready(function(){
  
    $('.menuitem').mouseenter(function(){
        $(this).css('cursor', 'pointer');
    });

//========================================= PAUSE AUDIO AND VIDEO ON NEXT
    var htmlplayer = $('video')
    var audioplayer =$('audio');
    
    $('#handle,#about,#service').click(function(){
        //======STOP VIDEO PLAYBACK
        for(var i=0; i<htmlplayer.length; i++){
            htmlplayer[i].pause();
        }
        for(var i=0; i<audioplayer.length; i++){
            audioplayer[i].pause();
        }
    });
    
//==================================================== FORCE LOAD OF AUDIO FOR SAFARI [THAT MOFO!]
    // the event is 'onstalled' - 'stalled' in the jquery case
   $("audio").bind("stalled", function() { 
        var audio = $(this)[0];
        audio.load();

        // Threw in these two lines for good measure.
        audio.play();
        audio.pause();
    });
    
    

    //========================================= HANDLE MOVEMENT
    $('.next').click(function(){
        $('#clicktoview').css('opacity', '0');
        //======rotate reel
        $('#reel').rotate({angle: 0, animateTo: 20});
        //======move handle
        $(this).css('top', '-67px');
        setTimeout(function(){
           $('.next').css('top', '-97px');
        }, 300);
    });
    
    
    
    $('#service').click(function(){
        $('#arrow').css('left', '-152%');
        $('#arrow').css('border-color', '#0099cc transparent transparent transparent');
        //=============================== BRING SERVICES INTO PLACE
        $('#services').css('left', '0');
        $('#services').css('opacity', '1');
        //=============================== SEND ABOUT OUT
        $('#aboutus').css('left', '100%');
        $('#aboutus').css('opacity', '0');
        //=============================== SEND GALLERY OUT
        $('#galleries').css('left', '100%');
        $('#galleries').css('opacity', '0');
    });
    
    $('#about').click(function(){
        //============================== ALPHA 1 ON NOTICE
        $('#clicktoview').css('opacity', '1');
        $('#arrow').css('left', '-50%');
        $('#arrow').css('border-color', '#90a722 transparent transparent transparent');
        //=============================== BRING ABOUT INTO PLACE
        $('#aboutus').css('left', '0');
        $('#aboutus').css('opacity', '1');
        //=============================== SEND SERVICES OUT
        $('#services').css('left', '-100%');
        $('#services').css('opacity', '0');
        //=============================== SEND GALLERY OUT
        $('#galleries').css('left', '100%');
        $('#galleries').css('opacity', '0');
    });
    
    $('#gallery').click(function(){
        $('#arrow').css('left', '46%');
        $('#arrow').css('border-color', '#fc29a3 transparent transparent transparent');
        //=============================== BRING ABOUT INTO PLACE
        $('#galleries').css('left', '0');
        $('#galleries').css('opacity', '1');
        //=============================== SEND SERVICES OUT
        $('#services').css('left', '-100%');
        $('#services').css('opacity', '0');
        //=============================== SEND GALLERY OUT
        $('#aboutus').css('left', '100%');
        $('#aboutus').css('opacity', '0');
    });
});



