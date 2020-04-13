import * as $ from 'jquery'

$(document).ready(function() {
    if($('#nav-main').length > 0) {
        marker($('#nav-main li'))
    }
    if($('.article-header').length > 0) {
        background($('.article-header'))
    }
    if($('.page-header').length > 0) {
        background($('.page-header'))
    }
})

/*
 *
 * Background
 *
 */

function background(element) {
    element.each(function() {
        if($(this).length > 0 ) {
            var img = $(this);
            var url = img.data('src');
            img.css({
                'background-image' : 'url('+url+')',
                'background-repeat' : 'no-repeat',
                'background-position' : 'center center',
                'background-size' : 'cover',
            });
        }
    });
}

/*
 *
 * Marker on current page
 *
 *
 */

function marker(element) {
    element.each(function() {
        let currentPage = $(this).find('a').attr('href');
        currentPage = currentPage.replace('http://'+ window.location.hostname, "");
        if(currentPage === window.location.pathname){
            let parentLink = $(this).parents().eq(1);
            if(parentLink.hasClass('menu-item-has-children')) {
                $(this).addClass('active');
                parentLink.addClass('active');
            } else {
                $(this).addClass('active');
            }
        }
    });
}
