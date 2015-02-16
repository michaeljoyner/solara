var menuOperator = {
    isOpen: function() {
        var body = document.querySelector("body");
        return body.classList.contains("show-nav");
    },

    toggle: function() {
        if(menuOperator.isOpen()) {
            menuOperator.close();
        } else {
            menuOperator.open();
        }
    },

    open: function() {
        var body = document.querySelector("body");
        body.classList.add("show-nav");
    },

    close: function() {
        var body = document.querySelector("body");
        body.classList.remove("show-nav");
    },

    preventTouchScroll: function() {
        var body = document.querySelector("body");
        body.addEventListener('touchmove', function(ev) {
            if(menuOperator.isOpen()) {
                ev.preventDefault();
            }
        });
    },

    init: function() {
        var togglers = document.querySelectorAll(".nav-toggler");
        for(var i = 0; i < togglers.length; i++) {
            togglers[i].addEventListener('click', menuOperator.toggle, false);
        }
        menuOperator.preventTouchScroll();
    }
}

menuOperator.init();
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
var titleAnimator = {
    showTitle: function() {
        var title = document.querySelector(".products-title");
        if(title) {
            title.style.transform = "rotateX(0deg)";
            title.style.webkitTransform = "rotateX(0deg)";
        }
    }
}
window.addEventListener('load', titleAnimator.showTitle, false);