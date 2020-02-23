<div class="container">
  <div class="contacts">
            <?php
            if (count($atts['items']) > 0) {
              foreach ($atts['items'] as $key => $value) {
                ?>

                <p><span class="blue_color"><b><?=$value['option_1']?></b></span><?=$value['option_2']?></p>

                <?php
              }
            }
            ?>
  </div>
</div>