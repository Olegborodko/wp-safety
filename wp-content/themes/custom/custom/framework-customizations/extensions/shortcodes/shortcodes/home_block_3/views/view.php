<?php
$path = __DIR__.'../../../../../../../lib/shortcode.php';
require_once($path);
$url1 = setURL($atts['item1_image']);
$url2 = setURL($atts['item2_image']);
$url3 = setURL($atts['item3_image']);
$url4 = setURL($atts['item4_image']);
//if (gettype($atts['item1_image']) == 'array'){
//  $url1 = $atts['item1_image']['url'];
//}

//function setURL($field) {
//  if (gettype($field) == 'array'){
//    return $field['url'];
//  } else {
//    return '';
//  }
//}
?>

<div class="tm_pb_section  tm_pb_section_2 tm_section_regular tm_section_transparent">

  <div class="container">
    <div class=" row tm_pb_row tm_pb_row_3">

      <div
        class="tm_pb_column tm_pb_column_1_2  tm_pb_column_6 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm_pb_vertical_alligment_end">

        <div id="tm_pb_contact_form_0"
             class="tm_pb_contact_form tm_pb_contact_form_0 tm_pb_contact_form_container clearfix tm_pb_module"
             data-form_unique_num="0"><h2 class="tm_pb_contact_main_title">Need More Info?</h2>

          <?php echo do_shortcode('[contact-form-7 id="27" title="Need More Info"]') ?>
        </div><!-- .tm_pb_contact_form -->
      </div> <!-- .tm_pb_column -->
      <div
        class="tm_pb_column tm_pb_column_1_2  tm_pb_column_7 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm_pb_vertical_alligment_start">

        <div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_left  tm_pb_text_3">

          <h3><strong><?php echo $atts['title']; ?></strong></h3>
          <p><?php echo $atts['text']; ?></p>
          <hr>

        </div> <!-- .tm_pb_text -->
        <hr class="tm_pb_module tm_pb_space tm_pb_divider_0">
        <div id="icon_custom1"
             class="tm_pb_blurb gradient tm_pb_blurb_4 tm_pb_bg_layout_light tm_pb_text_align_left tm_pb_blurb_position_left tm_pb_module">
          <div class="tm_pb_blurb_content">
            <div
              style="background-image: url(<?=$url1?>);"
              class="tm_pb_main_blurb_image"></div>
            <div class="tm_pb_blurb_container">
              <h4><?php echo $atts['item1_title']; ?></h4>
              <div class="tm_pb_blurb_content">
              </div>
            </div>
          </div> <!-- .tm_pb_blurb_content -->
        </div><!-- .tm_pb_blurb -->
        <div id="icon_custom2"
             class="tm_pb_blurb gradient tm_pb_blurb_5 tm_pb_bg_layout_light tm_pb_text_align_left tm_pb_blurb_position_left tm_pb_module">
          <div class="tm_pb_blurb_content">
            <div
              style="background-image: url(<?=$url2?>);"
              class="tm_pb_main_blurb_image"></div>
            <div class="tm_pb_blurb_container">
              <h4><?php echo $atts['item2_title']; ?></h4>
              <div class="tm_pb_blurb_content">
              </div>
            </div>
          </div> <!-- .tm_pb_blurb_content -->
        </div><!-- .tm_pb_blurb -->
        <div id="icon_custom3"
             class="tm_pb_blurb gradient tm_pb_blurb_6 tm_pb_bg_layout_light tm_pb_text_align_left tm_pb_blurb_position_left tm_pb_module">
          <div class="tm_pb_blurb_content">
            <div
              style="background-image: url(<?=$url3?>);"
              class="tm_pb_main_blurb_image"></div>
            <div class="tm_pb_blurb_container">
              <h4><?php echo $atts['item3_title']; ?></h4>
              <div class="tm_pb_blurb_content">
              </div>
            </div>
          </div> <!-- .tm_pb_blurb_content -->
        </div><!-- .tm_pb_blurb -->
        <div id="icon_custom4"
             class="tm_pb_blurb gradient tm_pb_blurb_7 tm_pb_bg_layout_light tm_pb_text_align_left tm_pb_blurb_position_left tm_pb_module">
          <div class="tm_pb_blurb_content">
            <div
              style="background-image: url(<?=$url4?>);"
              class="tm_pb_main_blurb_image"></div>
            <div class="tm_pb_blurb_container">
              <h4><?php echo $atts['item4_title']; ?></h4>
              <div class="tm_pb_blurb_content">
              </div>
            </div>
          </div> <!-- .tm_pb_blurb_content -->
        </div><!-- .tm_pb_blurb -->
      </div> <!-- .tm_pb_column -->

    </div> <!-- .tm_pb_row -->
  </div>


</div>