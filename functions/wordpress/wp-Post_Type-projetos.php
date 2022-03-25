<?php

if (!defined('PATH')) exit;

function wp_post_type__projetos() {

  $labels = [
		'name' => 'Projetos',
		'singular_name' => 'Projeto',
	];

	$args = [
		'labels' => $labels,
		'description' => '',
		'public' => true,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ],
		'can_export' => true,
		'has_archive' => false
	];

	register_post_type( 'projetos', $args );

}

add_action( 'init', 'wp_post_type__projetos' );

function wp_taxonomy__projetos() {

  $label = [
    'name' => 'Categorias de Projetos',
    'singular_name' => 'Categoria de projeto'
  ];

  $args = [
    'labels' => $label,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'hierarchical' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => [
      'slug' => 'categoria-de-projetos',
      'with_front' => false
    ]
  ];

  register_taxonomy('categoria-de-projetos', 'projetos', $args);

}

add_action('init', 'wp_taxonomy__projetos');