<?php
$path = __DIR__.'../../../../../../../lib/shortcode.php';
require_once($path);

$image_url = setURL($atts['image']);
?>


<div id="testimonials" class="tm_pb_section tm_pb_anchor tm_pb_section_6 tm_section_regular tm_section_transparent">


  <div class="container">
    <div class=" row tm_pb_row tm_pb_row_7" trackid="62">

      <div
        class="tm_pb_column tm_pb_column_4_4  tm_pb_column_11 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm_pb_vertical_alligment_start">

        <div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_center  tm_pb_text_7" trackid="94">

          <h3><strong><?=$atts['title'];?></strong></h3>

        </div> <!-- .tm_pb_text -->
        <hr class="tm_pb_module tm_pb_space tm_pb_divider_3" trackid="95">
      </div> <!-- .tm_pb_column -->

    </div> <!-- .tm_pb_row -->
  </div>
  <div class="container">
    <div class=" row tm_pb_row tm_pb_row_8" trackid="63">

      <div
        class="tm_pb_column tm_pb_column_4_4  tm_pb_column_12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm_pb_vertical_alligment_start">

        <div class="tm_pb_cherry_testi tm_pb_cherry_testi_0">
          <div class="tm-testi">
            <div id="tm-testi-slider-1"
                 class="tm-testi__wrap tm-testi__wrap--perview-1 tm-testi__wrap--shortcode swiper-container tm-testi-slider tm-testi--speech-bubble swiper-container-horizontal"
                 data-atts="{&quot;autoplay&quot;:0,&quot;effect&quot;:&quot;slide&quot;,&quot;loop&quot;:false,&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:15,&quot;breakpoints&quot;:{&quot;1199&quot;:{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:15},&quot;991&quot;:{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:15},&quot;767&quot;:{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:15}},&quot;id&quot;:1}"
                 trackid="70">
              <div class="tm-testi__list swiper-wrapper tm-testi-slider__items">
                <div class="tm-testi__item swiper-slide tm-testi-slider__item swiper-slide-active" trackid="72"
                     style="margin-right: 15px;">
                  <div class="tm-testi__inner">
                    <blockquote>
                      <div class="tm-testi__item-body">
                        <p><?=$atts['text'];?></p>
                      </div>
                      <div class="tm-testi__item-meta">
                        <img width="109" height="109"
                             src="<?=$image_url?>"
                             class="tm-testi__item-avatar avatar wp-post-image" alt=""
                             srcset=""
                             sizes="(max-width: 109px) 100vw, 109px">
                        <footer>
                          <cite><span class="tm-testi__item-name"><?=$atts['name'];?></span></cite> <span
                            class="tm-testi__item-position"><?=$atts['city'];?></span>
                        </footer>
                      </div>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- .tm_pb_cherry_testi -->
      </div> <!-- .tm_pb_column -->

    </div> <!-- .tm_pb_row -->
  </div>


</div>