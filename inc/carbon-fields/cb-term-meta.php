<?php

if( ! defined('ABSPATH') ) exit;


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_term_meta' );
function crb_attach_term_meta() {
	Container::make( 'term_meta', __( 'Print image' ) )
	->where( 'term_taxonomy', '=', 'category' )
	->where( 'term_level', '=', 2 )
	// ->where( 'term_parent', '=', 'print' )
	->add_fields(array(
		Field::make( 'text', 'crb_print_categories_image', __( 'Print category svg icon id', 'bs_sonaris' ) ),
	));
}
