jQuery(document).ready(function($) {
    $('.scrunchy').each(function(){
        dd = $(this).children('dd');
            $(dd).each(function(){
                height = $(this).height();
                $(this).attr('rel',height);
                $(this).css({height: 0});
            });

        dt = $(this).children('dt');
            dt.find('p').prepend("<span class='glyphicon glyphicon-play'></span> ");
            dt.addClass('scrunchyLink');
            dt.on('click', function() {
                var that = $(this);
                var t = $(this).next();
                var h = t.attr('rel');
                if(t.height() === 0) {
                    // opening animation
                    that.addClass('active');
                    if($('html').hasClass('csstransforms')){
                        t.stop().animate({
                            height: h + "px"
                        }, 750, "easeOutBack");
                    } else {
                        t.css({'height':h+'px'});
                    }
                } else {
                    if($('html').hasClass('csstransforms')){
                        t.stop().animate({
                            height: "0px"
                        }, 500, "easeInBack", function() {
                            that.removeClass('active');
                        });
                    } else {
                        t.css({'height':'0px'});
                    }
                }
            })
    })

    $('.top').on('click', "a", function(e) {
        e.preventDefault();
        var faq = $(this).attr('data-target');
        $("#" + faq).addClass('open');
    });

    $('.closeFAQ').on('click',function(){
        if($('dt.active').length) {
            $('dt.active').removeClass('active');
            $('dd').animate({
                'height':'0'
            },500, function(){
                $(this).closest('.faqList').removeClass('open');
            })
        } else {
            $(this).closest('.faqList').removeClass('open');
        }





    })
});

