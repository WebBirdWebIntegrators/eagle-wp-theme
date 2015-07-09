<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'ts_contact_location';

acf_add_local_field_group(array (
	'key' => 'group_' . $name_path,
	'title' => __('Location & Route description','eagle'),
	'fields' => array (
		array (
			'key' => 'field_' . $name_path . '__route_description',
			'label' => __('Route Description','eagle'),
			'name' => $name_path . '__route_description',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
		),
		array (
			'key' => 'field_' . $name_path . '__google_map',
			'label' => __('Google Map','eagle'),
			'name' => $name_path . '__google_map',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'contact-settings',
			),
		),
	),
	'menu_order' => 20,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;
	
?>