import * as $ from 'jquery'

$(document).ready(function() {
    $('#nav-overlay').on('click', function(){
        $(this).removeClass('nav-is-visible');
        $('#nav-responsive').removeClass('nav-is-visible');
        $('#site-wrapper').removeClass('scale-down nav-is-visible');
    });

    $('#nav-trigger').on('click', function(){
        toggle3dBlock(!$('#site-wrapper').hasClass('nav-is-visible'));
    });

    $('#nav-close').on('click', function(){
        toggle3dBlock(!$('#site-wrapper').hasClass('nav-is-visible'));
    });

    function toggle3dBlock(addOrRemove) {
        if(typeof(addOrRemove)==='undefined') addOrRemove = true;
        $('#nav-responsive').toggleClass('nav-is-visible', addOrRemove);
        $('#nav-overlay').toggleClass('nav-is-visible', addOrRemove);
        $('#site-wrapper').toggleClass('scale-down nav-is-visible', addOrRemove);
    }

    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, el) {
            var classes = el.className.split(" ").filter(function(c) {
                return c.lastIndexOf(prefix, 0) !== 0;
            });
            el.className = $.trim(classes.join(" "));
        });
        return this;
    };
})