<?php

if (!defined('PATH')) exit;
$section = (object) [
  'title' => get_field('fc-title'),
  'description' => get_field('fc-description'),
  'image' => get_field('fc-image'),
];

?>

<section class="site-sections section-fale-conosco" id="fale-conosco">

  <div class="container">
    <style>
      .section-fale-conosco {
        background-image: url('<?= wp_get_image($section->image) ?>');
      }
    </style>

    <div class="section-title centered-title">
      <h2><?= $section->title ?></h2>
    </div>

    <p class="align-center mb-5"><?= $section->description ?></p>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <?= do_shortcode('[contact-form-7 id="120" title="Formulário de contato"]') ?>
      </div>
    </div>

  </div>

</section>