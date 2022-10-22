window.addEventListener('load', function() {
    window.addEventListener('scroll', function() {
        let scrolltop = document.scrollingElement.scrollTop;
        let header = document.getElementById("header");
        if (scrolltop > 50) {
            header.setAttribute("data-white", "true");
        } else {
            header.setAttribute("data-white", "false");
        }
    });
});