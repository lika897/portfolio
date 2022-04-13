jQuery(document).ready(function () {
    // FORMS
    jQuery('form button').click(function () {
        var form = jQuery(this).closest('form');

        if (form.valid()) {
            var actUrl = form.attr('action');

            jQuery.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function (data) {
                    jQuery('.sps').click();
                },
                error: function () {}
            });
        }
    });


    // скрипт табов //
    $('ul.tabs__caption').on('click', 'li:not(.active)', function () {
        $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
    });
    // скрипт табов //

    $('.slider41').click(function () {
        $('.sld4').removeClass('active');
        $(this).addClass('active');
        $('.block_slider_4').toggleClass('slider-active');
    });
    $('.slider42').click(function () {
        $('.sld4').removeClass('active');
        $(this).addClass('active');
        $('.block_slider_4').toggleClass('slider-active');
    });



    //прикрепляем клик по заголовкам acc-head
    $('#accordeon .acc-head').on('click', f_acc);


    function f_acc() {
        //скрываем все кроме того, что должны открыть
        $('#accordeon .acc-body').not($(this).next()).slideUp(200);
        // открываем или скрываем блок под заголовоком, по которому кликнули
        $(this).next().slideToggle(200);
    }


    jQuery('.frmchck').click(function () {
        jQuery(this).toggleClass('active');
    });

    jQuery('#mobile-menu li').click(function () {
        jQuery('#mobile-menu').toggleClass('show_mobile_menu');
        jQuery('#burger-menu').toggleClass('active');
    });


    jQuery(".totop").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec1").offset().top - 90
        }, 400);
    });

    jQuery(".men1").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec4").offset().top - 90
        }, 400);
    });
    jQuery(".men2").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec3").offset().top - 90
        }, 400);
    });
    jQuery(".men3").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec9").offset().top - 90
        }, 400);
    });
    jQuery(".men4").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec7").offset().top - 90
        }, 400);
    });
    jQuery(".men5").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec5").offset().top - 90
        }, 400);
    });
    jQuery(".men6").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(".sec10").offset().top - 90
        }, 400);
    });

});
