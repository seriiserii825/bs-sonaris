<?php

if( ! defined('ABSPATH') ) exit;

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('slider', array(
		'labels'             => array(
			'name'               => __( 'Slider', 'bs_sonaris' ), // Основное название типа записи
			'singular_name'      => __( 'Slider', 'bs_sonaris' ), // отдельное название записи типа Book
			'add_new'            => __( 'Add new', 'bs_sonaris' ),
			'add_new_item'       => __( 'Add new', 'bs_sonaris' ),
			'edit_item'          => __( 'Edit new', 'bs_sonaris' ),
			'new_item'           => __( 'New slide', 'bs_sonaris' ),
			'view_item'          => __( 'View slide', 'bs_sonaris' ),
			'search_items'       => __( 'Search slide', 'bs_sonaris' ),
			'not_found'          =>  __( 'Not found', 'bs_sonaris' ),
			'not_found_in_trash' => __( 'Not found in trash', 'bs_sonaris' ),
			'parent_item_colon'  => '',
			'menu_name'          => __( 'Slides', 'bs_sonaris' )

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail')
	) );

	register_post_type('portfolio', array(
		'labels'             => array(
		'name'               => __( 'Portfolio', 'bs_sonaris' ), // Основное название типа записи
		'singular_name'      => __( 'Portfolio', 'bs_sonaris' ), // отдельное название записи типа Book
		'add_new'            => __( 'Add new', 'bs_sonaris' ),
		'add_new_item'       => __( 'Add new', 'bs_sonaris' ),
		'edit_item'          => __( 'Edit new', 'bs_sonaris' ),
		'new_item'           => __( 'New portfolio', 'bs_sonaris' ),
		'view_item'          => __( 'View portfolio', 'bs_sonaris' ),
		'search_items'       => __( 'Search portfolio', 'bs_sonaris' ),
		'not_found'          =>  __( 'Not found', 'bs_sonaris' ),
		'not_found_in_trash' => __( 'Not found in trash', 'bs_sonaris' ),
		'parent_item_colon'  => '',
		'menu_name'          => __( 'Portfolio', 'bs_sonaris' )

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor', 'thumbnail')
	) );
}
