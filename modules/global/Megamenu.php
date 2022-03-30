<?php

if (!defined('PATH')) exit;

?>

<section class="megamenu">

  <div class="glass" menu-toggle></div>
  <div class="content">
    <a href="#" menu-toggle class="menu-toggle">
      <?= svg('close-thin') ?>
      fechar
    </a>

    <div class="menu-content">
      <?php menu() ?>
    </div>

    <?php 
      $rs = get_redes_sociais(); 
      $ind = 0;
      foreach ($rs as $key => $label) {
        if (get_theme_mod('rs-'.$key)) {
          $ind++;
        }
      }

      if ($ind > 0):

        ?>
        <div class="redes-sociais">
          <p>Siga a KPC</p>
          <ul class="redes-sociais">
            <?php 
            
              foreach ($rs as $key => $label): 
                $tm = get_theme_mod(sprintf('rs-%s', $key));
                if ($tm) {
                  ___(
                    sprintf(
                      '<li>
                        <a href="%s" target="_blank" title="%s">
                          <i class="fa-brands fa-%s"></i>
                        </a>
                      </li>',
                      $tm,
                      $label,
                      $key
                    )
                  );
                }
              endforeach;
            
            ?>
          </ul>
        </div>
        <?php
      endif;
      ?>

  </div>

</section>