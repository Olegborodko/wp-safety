<?php
$path = __DIR__.'../../../../../../../lib/shortcode.php';
require_once($path);
$url = setURL($atts['background_href']);
?>

<div id="steps" class="tm_pb_section invert tm_pb_anchor mask_custom_black tm_pb_section_4 tm_pb_with_background tm_section_regular tm_section_transparent"
  style="background-image:url(<?=$url?>)"
><div class="mask_black"></div>

  <div class="container">
    <div class=" row tm_pb_row tm_pb_row_5">

      <div class="tm_pb_column tm_pb_column_4_4  tm_pb_column_9 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm_pb_vertical_alligment_start">

        <div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_center  tm_pb_text_5">

          <h3><strong><?=$atts['title'];?></strong></h3>
          <p><?=$atts['text'];?></p>
          <hr>

        </div> <!-- .tm_pb_text --><hr class="tm_pb_module tm_pb_space tm_pb_divider_2"><div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_center  tm_pb_text_6">

          <h5><?=$atts['text2'];?></h5>
          <p><a class="header-btn btn btn-default" style="color:#ffffff;font-weight:700" href="<?=$atts['button_href'];?>"><?=$atts['button_text']?></a></p>

        </div> <!-- .tm_pb_text -->
      </div> <!-- .tm_pb_column -->

    </div> <!-- .tm_pb_row -->
  </div>


</div>