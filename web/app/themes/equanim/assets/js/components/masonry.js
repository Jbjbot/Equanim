import Masonry from 'masonry-layout'
import InfiniteScroll from 'infinite-scroll'
import imagesLoaded from 'imagesloaded'

if(document.querySelector('.grid-js')) {
    const $elem = document.querySelector('.grid-js');
    setMasonry($elem, '.grid__item-js');
    if(document.querySelector('.pagination')) {
        InfiniteScroll.imagesLoaded = imagesLoaded;
        setInfiniteScroll($elem, '.grid__item-js', setInstance($elem));
    }
}

function setMasonry($element, $columnWidth) {
    // Masonry
    const msnry = new Masonry($element, {
        // selector for entry content
        itemSelector: $columnWidth,
        columnWidth: $columnWidth,
        percentPosition: true,
        stagger: 30,
        // desactivate animation
        transitionDuration: 0,
        // nicer reveal transition
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(100px)', opacity: 0 }
    });

    // initial items reveal
    imagesLoaded($element, function() {
        $element.classList.remove('are-images-unloaded')
        msnry.layout()
    });
}

function setInfiniteScroll($element, $columnWidth, $instance) {
    // Infinite Scroll
    new InfiniteScroll($element, {
        path: '.pagination .next a',
        append: $columnWidth,
        checkLastPage: '.pagination .last a',
        outlayer: $instance,
        hideNav: '.pagination-block',
        status: '.page-load-status',
        responseType: 'document',
        debug: false,
        history: false
    });
}

function setInstance($element) {
    // get Masonry instance
    const msnry = Masonry.data($element);
    return msnry;
}