$(function() {
    $('.tab').on('click, focus', function() {
        selectTab($(this));
    });



    $('.tab').on('focus', function() {
        tabKeysOn();
    });

    $('.tab').on('blur', function() {
        tabKeysOff();
    })

    function tabKeysOn() {

        $('.tab').on('keydown', function(event) {

            switch(event.which) {
                case 37:
                    prevTab();
                break;
                case 39:
                    nextTab();
                break;
            }
        })
    }

    function tabKeysOff() {
        $('.tab').off('keydown');
    }

    function prevTab() {
        var prvTb = $('.tab.selected').prev();
        // selectTab(prvTb);
        $(prvTb).focus();
    }

    function nextTab() {
        var nxtTb = $('.tab.selected').next();
        // selectTab(nxtTb);
        $(nxtTb).focus();
    }

    function resetTabs() {
        $('.tab').removeClass('selected').attr('aria-selected', false);
        $('.tabpanel .panel').animate({
            opacity: 0
        },300, function(){
            $(this).hide().css('opacity',1)
        });
    }

    function selectTab(tab){
        resetTabs();
        $(tab).attr('aria-selected', true)
        var panel = '#' + $(tab).attr('aria-controls');
        $(tab).addClass('selected').attr('aria-selected', true);
        $(panel).animate({
            'opacity': 0
        }, 0, function() {
            $(this).show();
            $(this).animate({
                'opacity': 1
            }, 300);
        });
    }

    $('.panel').hide();

    var selected  = '#' +  $('.tab.selected').attr('aria-controls');
    $(selected).show();
});