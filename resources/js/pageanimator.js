var pageAnimator = {
    elems: {
        'logo': document.querySelector('.logo-title'),
        'sun': document.querySelector('.logo-circle'),
        'subtitle': document.querySelector('.sub-title'),
        'titleLeft': document.querySelector('.logo-title-left')
    },

    init: function() {
        var elems = pageAnimator.elems;
        if(elems.logo) {
            elems.logo.classList.add('show');
        }
        if(elems.subtitle) {
            elems.subtitle.classList.add('show');
        }
        if(elems.sun) {
            elems.sun.classList.add("in-place");
        }
    }
}
window.addEventListener('load', pageAnimator.init, false);