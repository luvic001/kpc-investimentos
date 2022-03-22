<?php

if (!defined('PATH')) exit;

?>

<section class="site-sections section-quem-somos" id="quem-somos">
  <div class="container">

    <div class="row">
      <div class="col-md-4">

        <div class="section-title">
          <h2><?= get_field('qs-title') ?></h2>
        </div>

      </div>

      <div class="col-md-8">
        <div class="editor-content">
          <?= get_field('qs-content') ?>
        </div>
      </div>

      <?php $figure = get_field('qs-figure') ?>
      <?php if ($figure): ?>
      <div class="col-md-5 featured-image">
        <figure>
          <img src="<?= wp_get_image($figure) ?>" alt="">
        </figure>
      </div>
      <?php endif; ?>

      <?php $mvv = to_object(get_field('qs-mvv')); if ($mvv): ?>
        <div class="col-md-7 qs-mvv">
          <?php foreach ($mvv as $ctt): ?>
            <div class="editor-content">
              <h3><?= $ctt->{'qs-mvv-title'} ?></h3>
              <?= $ctt->{'qs-mvv-content'} ?>
            </div>
          <?php endforeach; ?>
        </div>

      <?php endif; ?>
    </div>
  </div>
</section>