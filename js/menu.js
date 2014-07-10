/**
 * Created by ben on 7/9/14.
 */
$(document).ready(function() {
    $('#navbar a').hover(
        function() {
            var target = $(this).attr("data-menu");
            console.log($('.dropDownMenu.' + target));
//            $('.dropDownMenu.' + target).velocity({
//                top: '48px'
//            }, 1000, "transition.slideDownOut");
            $('.dropDownMenu.' + target).velocity(
               "transition.slideDownIn"
            );
        },
        function() {
            var target = $(this).attr("data-menu");
            $('.dropDownMenu.' + target).velocity(
                "reverse"
            );
        }

    );
});
