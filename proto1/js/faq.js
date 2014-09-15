jQuery(document).ready(function($) {
    var faqIndex = 0;
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
            dt.on('mousedown', function() {
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

    $('.top').on('mousedown', "a", function(e) {
        e.preventDefault();
        var faq = $(this).attr('data-target');
        $("#" + faq).addClass('open');
    });

    $('.top').on('keydown', "a", function(e) {
        if(e.which === 13){
            openFAQ($(this));
        }
    })

    $('.closeFAQ').on('click',function(){
        closeFAQ();
    })
});

function openFAQ(f) {
    var faq = $(f).attr('data-target');
    $("#" + faq).addClass('open');
    FAQKeysOn();
}

function closeFAQ() {
    if($('dt.active').length) {
        $('dt.active').removeClass('active');
        $('dd').animate({
            'height':'0'
        },500, function(){
            $(this).closest('.faqList').removeClass('open');
            FAQKeysOff();
        })

    } else {
        $('.faqList.open').removeClass('open');
        FAQKeysOff();
    }
}

function FAQKeysOn() {
    var faq = $('.faqList.open');
    $('body').on('keydown', function(e) {
        console.log(e.which);
        e.preventDefault();
        switch(e.which) {
            case 27:
                closeFAQ();
                break;
            case 40:
                nextFAQ();
                break;
            case 39:
                openLine();
                break;
            case 38:
                prevFAQ();
                break;
            case 37:
                closeLine();
                break;
        }

    })
}

function FAQKeysOff() {
    $('body').off('keydown');
}

function nextFAQ() {
    var limit = $('.faqList.open dt.scrunchyLink').length-2;
    if($('p.focused').length === 0) {
        $('.faqList.open dt.scrunchyLink:eq(0) p').addClass('focused');
        faqIndex = 0;
    } else {
        console.log(limit);
        console.log(faqIndex);
        if(faqIndex <= limit){
            $('.focused').removeClass('focused');
            var n = faqIndex  + 1;
            $('.faqList.open dt.scrunchyLink:eq('+n+')>p').addClass('focused');
            faqIndex = n;
        } else {
            $('.focused').removeClass('focused');
            $('.faqList.open dt.scrunchyLink:eq(0) p').addClass('focused');
            faqIndex = 0;
        }

    }
}

function prevFAQ() {
    var length = $('.faqList.open dt.scrunchyLink').length;
    var limit = length-2;
    if($('p.focused').length === 0) {
        $('.faqList.open dt.scrunchyLink:eq(0) p').addClass('focused');
        faqIndex = 0;
    } else {

        if(faqIndex > 0 && faqIndex <= limit){
            $('.focused').removeClass('focused');
            var n = faqIndex-1;
            $('.faqList.open dt.scrunchyLink:eq('+n+')>p').addClass('focused');
            faqIndex = n;
        } else {
            var p = $('.faqList.open dt.scrunchyLink').length-1
            $('.focused').removeClass('focused');
            $('.faqList.open dt.scrunchyLink:eq(0) p').addClass('focused');
            faqIndex = 0;
        }

    }
}



