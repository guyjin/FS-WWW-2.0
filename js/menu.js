/**
 * Created by ben on 7/9/14.
 */
$(document).ready(function() {
    $('#navbar li').hover(
        function() {
            $(this).children('.dropDownMenu').slideToggle('fast');
        }

    );
});
