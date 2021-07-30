$(document).ready(function() {    
    // Navbar Scroll Handler
    $(document).scroll(function() {
        const $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});