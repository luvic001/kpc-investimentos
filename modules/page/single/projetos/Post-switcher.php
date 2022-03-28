<?php

if (!defined('PATH')) exit;

$prev_post = get_previous_post(false, null, 'categoria-de-projetos');
$next_post = get_next_post(false, null, 'categoria-de-projetos');

if (@$prev_post->ID):
  $prev_post = (object) [
    'link' => get_permalink($prev_post->ID),
    'title' => $prev_post->post_title
  ];
else: 
  $prev_post = false;
endif;

if (@$next_post->ID):
  $next_post = (object) [
    'link' => get_permalink($next_post->ID),
    'title' => $next_post->post_title
  ];
else:
  $next_post = false;
endif;

?>

<section class="post-switcher">
  <div class="container">
    <ul>
      <?php if ($prev_post): ?>
        <li class="prev">
          <a 
            href="<?= $prev_post->link ?>"
            title="<?= $prev_post->title ?>">
            <span class="icon">
              <i class="fa-solid fa-angle-left"></i>
            </span>
            VER PROJETO ANTERIOR
          </a>
        </li>
      <?php endif; ?>
      <?php if ($next_post): ?>
        <li class="next">
          <a 
            href="<?= $next_post->link ?>"
            title="<?= $next_post->title ?>">
            VER PRÓXIMO PROJETO
            <span class="icon">
              <i class="fa-solid fa-angle-right"></i>
            </span>
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</section>