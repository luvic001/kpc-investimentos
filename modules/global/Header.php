<?php

if (!defined('PATH')) exit;

global $sitename, $siteslogan;
$sitename = get_bloginfo('name');
$sitedescription = get_bloginfo('description');
$logo_alt = sprintf('%s | %s', $sitename, $sitedescription);
$logo_elem = is_front_page() ? 'h1' : 'h2';

?>

<?php get_modules('Megamenu') ?>

<header class="site-header">

  <div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center align-items-md-start">

      <a href="<?= site_url() ?>">
        <<?= $logo_elem ?> class="d-flex align-items-center justify-content-center">
          <div class="logo-before-scroll">
            <?= get_site_logo('logo_do_site', $logo_alt) ?>
          </div>
          <div class="logo-after-scroll">
            <?= get_site_logo('logo_do_site_scroll', $logo_alt) ?>
          </div>
        </<?= $logo_elem ?>>
      </a>

      <a href="#" menu-toggle class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </a>

    </div>
  </div>


</header>