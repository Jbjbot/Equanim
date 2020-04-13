const header = document.querySelector('.header')

window.addEventListener('scroll', function() {
    if(pageYOffset >= header.clientHeight) {
        header.classList.add('is-sticky')
        if(document.querySelector('#wpadminbar')) {
            header.style.top = document.querySelector('#wpadminbar').clientHeight + 'px'
        }
    } else {
        header.classList.remove('is-sticky')
    }
})
