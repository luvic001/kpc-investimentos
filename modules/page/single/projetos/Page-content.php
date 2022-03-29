<?php

if (!defined('PATH')) exit;

getCurScript('slider-pro', 'page/single/projetos');
getCurStyleSheet('slider-pro', 'page/single/projetos');
get_modules('Breadcrumb');

?>

<section class="page-content">
  <div class="container">

    <div class="row">
      <div class="col-md-5">
        <h2><?= get_the_title() ?></h2>

        <?php 
          $endereco = get_field('pj-content-address');
          if ($endereco): 
            ?>
            <p>
              <b>Endereço:</b><br />
              <?= $endereco ?>
            </p>
            <?php
          endif;
        ?>
        
        <?php 
          $content = get_the_content();
          if ($content) {
            ___('<div class="editor-content mb-3">');
              ___(wpautop($content));
            ___('</div>');
          }
        ?>

        <?php 
          $adicionais = to_object(get_field('pj-content-additional'));
          if ($adicionais): 
            ___('<p>');
            foreach ($adicionais as $add):
              ?>
              <b><?= $add->{'pj-content-additional-title'} ?>:</b>
              <?= $add->{'pj-content-additional-description'} ?>
              <br/>
              <?php
            endforeach;
            ___('</p>');
          endif;
        ?>
      </div>
        
      <div class="col-md-7">
        <?php get_modules('Slider', 'page/single/projetos') ?>
      </div>

    </div>
  </div>
</section>