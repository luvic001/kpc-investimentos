<?php

if (!defined('PATH')) exit;

global $sitename, $siteslogan;
$sitename = get_bloginfo('name');
$sitedescription = get_bloginfo('description');
$logo_alt = sprintf('%s | %s', $sitename, $sitedescription);

?>

<?php get_modules('Megamenu') ?>

<header class="site-header">

  <div class="container">

    <div class="d-flex justify-content-between align-items-center align-items-md-start">

      <a href="<?= site_url() ?>">
        <h1 class="d-flex align-items-center justify-content-center">
          <?= get_site_logo('logo_do_site', $logo_alt) ?>
        </h1>
      </a>

      <a href="#" menu-toggle class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </a>

    </div>
  </div>


</header>