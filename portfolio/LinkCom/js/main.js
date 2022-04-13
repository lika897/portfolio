  $(document).ready(function(){
         
        var $menu = $("#head");
             
        $(window).scroll(function(){
            if ( $(this).scrollTop() <= 100 && $menu.hasClass("head") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("head")
                           .addClass("fixed")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() > 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed")
                           .addClass("head")
                           .fadeIn('fast');
                });
            }
        });        
    });