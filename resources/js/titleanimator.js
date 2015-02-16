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