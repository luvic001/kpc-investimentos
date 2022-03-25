<?php

if (!defined('PATH')) exit;

get_header();

get_modules('Webdoor', 'page/home');
get_modules('Quem-Somos', 'page/home');
get_modules('Realizacoes', 'page/home');
get_modules('Como-Atuamos', 'page/home');
get_modules('Projetos-Realizados', 'page/home');
get_modules('Quem-Faz-a-KPC', 'page/home');

get_footer();