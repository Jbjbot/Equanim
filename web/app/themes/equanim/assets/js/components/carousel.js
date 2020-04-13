import Flickity from 'flickity'
import matchesSelector from 'desandro-matches-selector'

if(document.querySelector('.carousel-js')) {
    let elem = document.querySelector('.carousel-js');
    let flkty = new Flickity(elem, {
        //autoPlay: true,
        draggable: '>4',
        wrapAround: true,
        cellAlign: 'left',
        prevNextButtons: true,
        pageDots: false,
        fade: true,
        selectedAttraction: 0.01,
        friction: 0.15
    });
}
