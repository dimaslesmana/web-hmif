$(document).ready(function () {
  // Preloader
  $('.preloader').fadeOut('slow');

  // Back to Top Button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });

  $('#back-to-top').click(function () {
    $('html, body').animate(
      {
        scrollTop: 0,
      },
      400
    );
    return false;
  });

  // Landing Carousel
  $('#landing-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

  // News Carousel
  $('.news-carousel').owlCarousel({
    margin: 10,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    dots: false,
    responsive: {
      0: {
        items: 1.5,
      },
      576: {
        items: 1.5,
      },
      768: {
        items: 2.5,
      },
      992: {
        items: 3.5,
      },
    },
  });

  // Timeline
  $('#timeline-hmif').horizontalTimeline({
    dateDisplay: 'dateTime',
    desktopDateIntervals: 250,
    tabletDateIntervals: 200,
    mobileDateIntervals: 150,
    useScrollBtns: false,
  });

  // Ekko-Lightbox
  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

  // Member Modal
  $('#memberModal').on('shown.bs.modal', function (e) {
    const memberName = $(e.relatedTarget).data('member-name');
    const memberMajor = $(e.relatedTarget).data('member-major');
    const memberYear = $(e.relatedTarget).data('member-year');
    const memberPosition = $(e.relatedTarget).data('member-position');
    const memberType = $(e.relatedTarget).data('member-type');
    const memberImage = $(e.relatedTarget).data('member-image');

    const memberModal = $(e.currentTarget);
    memberModal.find('#memberModalType').html(memberType);
    memberModal.find('#memberModalName').html(`: ${memberName}`);
    memberModal.find('#memberModalMajor').html(`: ${memberMajor}`);
    memberModal.find('#memberModalYear').html(`: ${memberYear}`);
    memberModal.find('#memberModalPosition').html(`: ${memberPosition}`);
    memberModal
      .find('#memberModalImage')
      .attr('src', `/assets/images/anggota/${memberImage}`)
      .attr('alt', `${memberName}'s photo`);

    $('.modal-header, .modal-footer').css(
      'background-color',
      memberType === 'HMIF' ? 'hsl(207, 71%, 45%)' : 'hsl(226, 38%, 38%)'
    );
  });

  // Dark Mode Controller
  const $switch = $('.switch-wrapper');
  const $lightSwitch = $('.sun-logo');
  const $darkSwitch = $('.moon-logo');
  const $button = $('.navbar .btn');
  const $background = $('body, .navbar, .jumbotron, .nav-wrapper, .card');
  const $hyperlink = $('a');
  const $menu = $('.nav-menu');
  const $hr = $('.toggle-hr-color');

  if (localStorage.getItem('isDark') === 'true') {
    $button.addClass('btn-dark-mode');
    $lightSwitch.addClass('animate-sun');
    $darkSwitch.addClass('animate-moon');
    $background.addClass('bg-dark-custom');
    $hyperlink.addClass('text-white-custom');
    $menu.addClass('bg-menu-dark');
    $hr.addClass('border-color-dark');
  }

  $($switch).click(function () {
    $button.toggleClass('btn-dark-mode');
    localStorage.setItem('isDark', $button.hasClass('btn-dark-mode'));

    $lightSwitch.toggleClass('animate-sun');
    localStorage.setItem('isDark', $lightSwitch.hasClass('animate-sun'));

    $darkSwitch.toggleClass('animate-moon');
    localStorage.setItem('isDark', $darkSwitch.hasClass('animate-moon'));

    $background.toggleClass('bg-dark-custom');
    localStorage.setItem('isDark', $background.hasClass('bg-dark-custom'));

    $hyperlink.toggleClass('text-white-custom');
    localStorage.setItem('isDark', $hyperlink.hasClass('text-white-custom'));

    $menu.toggleClass('bg-menu-dark');
    localStorage.setItem('isDark', $menu.hasClass('bg-menu-dark'));

    $hr.toggleClass('border-color-dark');
    localStorage.setItem('isDark', $hr.hasClass('border-color-dark'));
  });
});
