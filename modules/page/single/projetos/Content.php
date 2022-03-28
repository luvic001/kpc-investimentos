<?php

if (!defined('PATH')) exit;
get_header();

$ID = get_the_ID();
$terms = get_the_terms($ID, 'categoria-de-projetos')[0];

get_modules('Banner', 'page/single/projetos', [
  'terms' => $terms,
  'ID' => $ID
]);

get_modules('Page-Content', 'page/single/projetos');
get_modules('Post-switcher', 'page/single/projetos');

get_footer();