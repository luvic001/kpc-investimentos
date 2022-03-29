<?php

if (!defined('PATH')) exit;

get_header();

get_modules('Projetos-Realizados', 'page/home', [
  'section-title' => 'PROJETOS REALIZADOS'
]);

?>

<style>
  main.site-content .site-sections {
    padding-top: 120px;
  }
  @media (min-width: 768px) {
    main.site-content .site-sections {
      padding-top: 140px;
    }
  }
</style>

<?php
get_footer();