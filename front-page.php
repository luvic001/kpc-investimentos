<?php

if (!defined('PATH')) exit;

get_header();

get_modules('Webdoor', 'page/home');
get_modules('Quem-Somos', 'page/home');

get_footer();