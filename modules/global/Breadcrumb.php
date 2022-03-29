<?php

if (!defined('PATH')) exit;

if (function_exists('yoast_breadcrumb')) {
  ___('<section class="site-breadcrumb">');
    ___('<div class="container">');
      yoast_breadcrumb();
    ___('</div>');
  ___('</section>');
}