<?php

if (!defined('PATH')) exit;

$section = to_object([
  'title' => get_field('ca-title'),
  'content' => get_field('ca-content'),
  'background' => get_field('ca-background'),
  'accordion' => get_field('ca-accordeon')
]);

?>

<section class="site-sections section-como-atuamos" id="como-atuamos">
  <style>
    @media (min-width: 768px) {
      section.section-como-atuamos {
        background-image: url('<?= wp_get_image($section->background) ?>');
      }
    }
  </style>
  
  <div class="container">
    <div class="grid">
      <div class="offset-md-6 g-md-6">
        <div class="section-title">
          <h2><?= $section->title ?></h2>
        </div>

        <div class="editor-content">
          <?= $section->content ?>
        </div>

        <?php get_modules('como-atuamos/Accordion', 'page/home', [
          'accordion' => $section->accordion
        ]) ?>

      </div>
    </div>
  </div>

</section>