<?php

if (!defined('PATH')) exit;
getCurScript('slider-pro-config', 'page/single/projetos');
$gallery = get_field('pj-gallery');

if (!$gallery):
?>

<figure class="featured-image">
  <img 
    src="<?= get_the_post_thumbnail_url() ?>" 
    alt="<?= get_the_title() ?>"
    class="mw-100">
</figure>

<?php else: ?>

<div class="slide-product">
  <div class="slider-pro" id="slider-pro">
    <div class="sp-slides">
      <?php foreach ($gallery as $slide): ?>
        <div class="sp-slide">
          <img class="sp-image mw-100" src="<?= wp_get_image($slide) ?>"/>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="sp-thumbnails">
      <?php foreach ($gallery as $slide): ?>
        <div class="sp-thumbnail">
          <div class="sp-thumbnail-image-container">
            <img class="sp-image mw-100" src="<?= wp_get_image($slide, 'medium') ?>"/>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php
endif;
