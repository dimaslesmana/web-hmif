$(document).ready(function() {  
    // Navbar Scroll Handler
    /* $(document).scroll(function() {
        const $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    }); */

    $(".preloader").fadeOut('slow');

    $("#landing-carousel").owlCarousel({
        items: 1,
        margin: 10,
        autoHeight: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
    });

    $(".news-carousel").owlCarousel({
        items: 4,
        margin: 10,
        autoWidth:true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
    });

    const $switch = $(".switch-wrapper");
    const $lightSwitch = $(".sun-logo");
    const $darkSwitch = $(".moon-logo");
    const $button = $(".navbar .btn");
    const $background = $("body, .navbar, .jumbotron, .nav-wrapper, .card");
    const $hyperlink = $("a");
    const $menu = $(".nav-menu");

    if(localStorage.getItem('isDark') === 'true') {
        $button.addClass("btn-dark-mode");
        $lightSwitch.addClass("animate-sun");
        $darkSwitch.addClass("animate-moon");
        $background.addClass("bg-dark-custom");
        $hyperlink.addClass("text-white-custom");
        $menu.addClass("bg-menu-dark");
    }

    $($switch).click(function() {
        $button.toggleClass("btn-dark-mode");
        localStorage.setItem('isDark', $button.hasClass("btn-dark-mode"));
        
        $lightSwitch.toggleClass("animate-sun");
        localStorage.setItem('isDark', $lightSwitch.hasClass("animate-sun"));
        
        $darkSwitch.toggleClass("animate-moon");
        localStorage.setItem('isDark', $darkSwitch.hasClass("animate-moon"));

        $background.toggleClass("bg-dark-custom");
        localStorage.setItem('isDark', $background.hasClass("bg-dark-custom"));
        
        $hyperlink.toggleClass("text-white-custom");
        localStorage.setItem('isDark', $hyperlink.hasClass("text-white-custom"));

        $menu.toggleClass("bg-menu-dark");
        localStorage.setItem('isDark', $menu.hasClass("bg-menu-dark"));
    });
});