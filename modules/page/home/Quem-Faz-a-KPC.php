<?php

if (!defined('PATH')) exit;
$section = to_object([
  'title' => get_field('qfak-title'),
  'subtitle' => get_field('qfak-subtitle'),
  'fundadores' => get_field('qfak-fundadores')
]);

?>

<section class="site-sections section-quem-faz-a-kpc" id="quem-faz-a-kpc">

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="section-title">
          <h2><?= $section->title ?></h2>
        </div>
        <p class="big mb-4">
          <?= $section->subtitle ?>
        </p>
      </div>
      <div class="offset-lg-1 col-lg-8">

        <?php 
          if ($section->fundadores): 
            $ind = 0;
            foreach ($section->fundadores as $f):
              ?>
              <div class="card-fundadores card-fundadores-<?= $ind ?>">
                <div class="background-fundador">
                  <style>
                    .card-fundadores-<?= $ind ?> .background-fundador {
                      background-image: url('<?= wp_get_image($f->{'qfak-fundadores-image'}) ?>');
                    }
                  </style>
                </div>
                <div class="card-fundadores-content">
                  <h3><?= $f->{'qfak-fundadores-title'} ?></h3>
                  <p class="cargo"><?= $f->{'qfak-fundadores-cargo'} ?></p>
                  <p class="description">
                    <?= $f->{'qfak-fundadores-description'} ?>
                  </p>
                  <?php
                    if ($f->{'qfak-fundadores-linkedin'}):
                      ?>
                      <a 
                        href="<?= $f->{'qfak-fundadores-linkedin'} ?>" 
                        target="_blank"
                        title="LinkedIn de <?= $f->{'qfak-fundadores-title'} ?>">
                        <?= svg('linkedin-kpc') ?>
                      </a>
                      <?php
                    endif;
                  ?>
                </div>
              </div>
              <?php
              $ind++;
            endforeach;
          endif;
        ?>

      </div>
    </div>
  </div>

</section>