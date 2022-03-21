<?php 

if (!defined('PATH')) exit;

function load_extra_css($preload = true)
{
	global $load_extra_css;
	if (is_array($load_extra_css)):
		if(!empty($load_extra_css)):
			foreach ($load_extra_css as $file):
				if ($preload)
					___( sprintf('<link rel="stylesheet" href="%s/assets/fonts/%s.css" media="screen">', get_template_directory_uri(), $file) );
				else
					___( sprintf('<link rel="preload" href="%s/assets/fonts/%s.css" as="style">', get_template_directory_uri(), $file) );
			endforeach;
		endif;
	endif;

}