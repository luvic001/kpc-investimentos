<?php

if (!defined('PATH')) exit;

$section = to_object([
  'background' => get_field('rl-background'),
  'items' => get_field('rl-items')
]);

?>

<section class="site-sections section-realizacoes" id="realizacoes">
  <style>
    .section-realizacoes {
      background-image: url('<?= wp_get_image($section->background) ?>');
    }
  </style>
  <div class="container">
    <ul class="numbers">
      <?php foreach ($section->items as $sct): ?>
      <li>
        <span class="text"><?= $sct->{'rl-items-title'} ?></span>
        <span class="number">
          <counternumber until="<?= $sct->{'rl-items-number'} ?>"></counternumber><?= $sct->{'rl-items-sufix'} ?: null ?>
        </span>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

</section>