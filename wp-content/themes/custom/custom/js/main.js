(function( $ ) {
  let $menuToggle = $('.main-menu-toggle[aria-controls="main-menu"]');
  let $mainNavigation = $('.main-navigation');

  $menuToggle.on( 'click', toggleMenuHandler );

  function toggleMenuHandler($event) {
    let $toggle = $('.sub-menu-toggle');

    if (!$event.isDefaultPrevented()) {
      $event.preventDefault();
    }

    setTimeout(function () {
      if (!$mainNavigation.hasClass('animate')) {
        $mainNavigation.addClass('animate');
      }
      $mainNavigation.toggleClass('show');
      $('html').toggleClass('mobile-menu-active');
    }, 10);

    $menuToggle.toggleClass('toggled');
    $menuToggle.attr('aria-expanded', !$menuToggle.hasClass('toggled'));

    if ($toggle.hasClass('active')) {
      $toggle.removeClass('active');
      $mainNavigation.find('.sub-menu-open').removeClass('sub-menu-open');
    }
  }

}( jQuery ));