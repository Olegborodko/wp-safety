<div class="tm_pb_section home_block_5 tm_pb_section_5 tm_pb_with_background tm_section_regular">

  <div class="container">
    <div class=" row tm_pb_row tm_pb_row_6">

      <div
        class="tm_pb_column tm_pb_column_4_4  tm_pb_column_10 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm_pb_vertical_alligment_start">

        <div class="tm_pb_module tm_pb_accordion  tm_pb_accordion_0">


          <?php
          if (count($atts['items']) > 0) {
            foreach ($atts['items'] as $key => $value) {
              if ($key == 0) {
                $toggle = 'tm_pb_toggle_open';
              } else {
                $toggle = 'tm_pb_toggle_close';
              }

              ?>

              <div class="tm_pb_module tm_pb_toggle <?=$toggle?>  tm_pb_accordion_item_<?=$key?>">
                <h5 class="tm_pb_toggle_title"><?=$value['option_1'];?></h5>
                <div class="tm_pb_toggle_content clearfix">
                  <?=$value['option_2'];?>
                  <p></p>
                </div>
              </div>


              <?php
            }
          }
          ?>


        </div> <!-- .tm_pb_accordion -->
      </div> <!-- .tm_pb_column -->

    </div> <!-- .tm_pb_row -->
  </div>
</div>