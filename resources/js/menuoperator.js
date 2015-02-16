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