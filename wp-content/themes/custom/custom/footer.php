<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom
 */

?>

<footer id="colophon" class="site-footer default" role="contentinfo">

  <div class="footer-area-wrap ">
    <div class="container">
      <section id="footer-area" class="footer-area widget-area footer-area--3-cols row">
        <aside id="carprotect_widget_about-2" class="col-xs-12 col-sm-12 col-md-3 col-lg-4  widget widget-about">
          <div class="widget-about__logo">
            <a class="widget-about__logo-link" href="<?=home_url();?>">
              <img class="widget-about__logo-img"
                   src="<?php echo get_template_directory_uri(); ?>/img/unnamed_new-300x197.png" alt="Safety First">
            </a>
          </div>
          <div class="widget-about__tagline"></div>
          <div class="widget-about__content"></div>
        </aside>
        <aside id="text-2" class="col-xs-12 col-sm-12 col-md-3 col-lg-4  widget widget_text">
          <div class="textwidget"></div>
        </aside>
        <aside id="carprotect_widget_subscribe_follow-3"
               class="col-xs-12 col-sm-12 col-md-4 col-lg-4  widget widget-subscribe">
          <div class="subscribe-follow__wrap">
            <div class="follow-block">
              <div class="social-list social-list--widget social-list--icon">
                <ul id="social-list-1" class="social-list__items inline-list">
                  <li id="menu-item-939" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-939">
                    <a href="facebook.com"><span class="screen-reader-text">Facebook</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </aside>
      </section>
    </div>
  </div>

  <div class="footer-container ">
    <div class="site-info container">
      <div class="site-info-wrap">

        <div class="footer-copyright">© 2018 All rights reserved by Safety First <span> | <a href=""> Privacy Policy</a> | <a
              href="">Cookies Policy</a></span></div>
      </div>

    </div>
  </div>
</footer>

</div>
</div>
</div>
</div><!-- #content -->

<a href="#" id="toTop" trackid="111" style="display: inline;"><span></span></a>

<?php wp_footer(); ?>

</body>
</html>
