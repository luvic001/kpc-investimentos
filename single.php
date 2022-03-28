<?php

if (!defined('PATH')) exit;

$module = sprintf('page/single/%s', get_post_type());
get_modules('Content', $module);