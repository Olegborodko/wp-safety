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

  $('.tm_pb_toggle_title').click( function(){
    var $this_heading         = $(this),
      $module               = $this_heading.closest('.tm_pb_toggle'),
      $section              = $module.parents( '.tm_pb_section' ),
      $content              = $module.find('.tm_pb_toggle_content'),
      $accordion            = $module.closest( '.tm_pb_accordion' ),
      is_accordion          = $accordion.length,
      is_accordion_toggling = $accordion.hasClass( 'tm_pb_accordion_toggling' ),
      $accordion_active_toggle;

    if ( is_accordion ) {
      if ( $module.hasClass('tm_pb_toggle_open') || is_accordion_toggling ) {
        return false;
      }

      $accordion.addClass( 'tm_pb_accordion_toggling' );
      $accordion_active_toggle = $module.siblings('.tm_pb_toggle_open');
    }

    if ( $content.is( ':animated' ) ) {
      return;
    }

    $content.slideToggle( 700, function() {
      if ( $module.hasClass('tm_pb_toggle_close') ) {
        $module.removeClass('tm_pb_toggle_close').addClass('tm_pb_toggle_open');
      } else {
        $module.removeClass('tm_pb_toggle_open').addClass('tm_pb_toggle_close');
      }

      if ( $section.hasClass( 'tm_pb_section_parallax' ) && !$section.children().hasClass( 'tm_pb_parallax_css') ) {
        $.proxy( tm_parallax_set_height, $section )();
      }
    } );

    if ( is_accordion ) {
      $accordion_active_toggle.find('.tm_pb_toggle_content').slideToggle( 700, function() {
        $accordion_active_toggle.removeClass( 'tm_pb_toggle_open' ).addClass('tm_pb_toggle_close');
        $accordion.removeClass( 'tm_pb_accordion_toggling' );
      } );
    }
  });

  //scroll
  $(document).on('click', '#toTop', function (event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: 0
    }, 500);
  });

}( jQuery ));