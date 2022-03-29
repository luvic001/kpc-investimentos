<?php

if (!defined('PATH')) exit;

$module = sprintf('%s/Content', get_post_type());
get_modules($module, 'page/archive');