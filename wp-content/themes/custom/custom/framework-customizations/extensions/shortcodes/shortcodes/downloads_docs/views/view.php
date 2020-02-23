<div class="container">
  <div class=" row tm_pb_row tm_pb_row_1 tm_pb_col_padding_reset">

    <div
      class="tm_pb_column tm_pb_column_4_4  tm_pb_column_1 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm_pb_vertical_alligment_start">

      <div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_center  tm_pb_text_1">

        <div class="downloads_response downloads_block">
          <p><?= $atts['title']; ?></p>

          <?php //var_dump($atts['items']) ?>
          <?php
            if (count($atts['items']) > 0) {
              foreach ($atts['items'] as $key => $value) {
                if ($value["option_3"] == 'choice-1'){
                  $icon = '<i class="fa fa-file-pdf-o" aria-hidden="true"></i>';
                }else{
                  $icon = '<i class="fa fa-file-word-o" aria-hidden="true"></i>';
                }
                ?>
                <div class="color-blue">
                  <a href="<?=$value["option_2"]?>">
                    <?=$icon?><?=$value["option_1"]?></a>
                </div>
          <?php
              }
            }
          ?>
        </div>

      </div> <!-- .tm_pb_text -->
    </div> <!-- .tm_pb_column -->

  </div> <!-- .tm_pb_row -->
</div>
