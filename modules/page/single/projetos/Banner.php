<?php

if (!defined('PATH')) exit;
global $terms;

$banner = (object) [
  'title' => get_field('pj-header-title') ?: get_the_title(),
  'image' => wp_get_image(get_field('pj-header-image')) ?: get_the_post_thumbnail_url()
];

?>

<section class="single-banner background-parallax">
  <div class="background-glass">
    <style>
      section.single-banner {
        background-image: url('<?= $banner->image ?>');
      }
    </style>
  </div>
  <div class="container">
    <p><?= $terms->name ?></p>
    <h1><?= $banner->title ?></h1>
  </div>
</section>