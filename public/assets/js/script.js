$(document).ready(function() {  
    // Navbar Scroll Handler
    /* $(document).scroll(function() {
        const $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    }); */

    const $switch = $(".switch-wrapper");
    const $lightSwitch = $(".sun-logo");
    const $darkSwitch = $(".moon-logo");
    const $background = $("body, .navbar, .jumbotron, .navWrapper, .card");
    const $hyperlink = $("a");

    if(localStorage.getItem('isDark') === 'true') {
        $switch.addClass("switch-wrapper-dark");
        $lightSwitch.addClass("animate-sun");
        $darkSwitch.addClass("animate-moon");
        $background.addClass("bg-dark-custom");
        $hyperlink.addClass("text-white-custom");
    }

    $($switch).click(function() {
        $(this).toggleClass("switch-wrapper-dark");
        localStorage.setItem('isDark', $(this).hasClass("switch-wrapper-dark"));
        
        $lightSwitch.toggleClass("animate-sun");
        localStorage.setItem('isDark', $lightSwitch.hasClass("animate-sun"));
        
        $darkSwitch.toggleClass("animate-moon");
        localStorage.setItem('isDark', $darkSwitch.hasClass("animate-moon"));

        $background.toggleClass("bg-dark-custom");
        localStorage.setItem('isDark', $background.hasClass("bg-dark-custom"));
        
        $hyperlink.toggleClass("text-white-custom");
        localStorage.setItem('isDark', $hyperlink.hasClass("text-white-custom"));
    });
});