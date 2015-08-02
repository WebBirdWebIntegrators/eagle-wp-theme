<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_ts_billboard_setting__billboard_default_image',
	'title' => __('Default Billboard Image','eagle'),
	'fields' => array (
		array (
			'key' => 'field_ts_billboard_setting__billboard_default_image',
			'label' => false,
			'name' => 'ts_billboard_setting__billboard_default_image',
			'type' => 'image',
			'instructions' => __('Set your default image when nor the slider or featured image is present.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'large',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'png, jpg',
		),
		array (
			'key' => 'field_ts_billboard_setting__billboard_default_image_height',
			'label' => __('Image Height','eagle'),
			'name' => 'ts_billboard_setting__billboard_default_image_height',
			'type' => 'number',
			'instructions' => __('Set your default image height.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50%',
				'class' => '',
				'id' => '',
			),
			'default_value' => 550,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'pixels',
			'min' => 250,
			'max' => 550,
			'step' => 50,
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'billboard-settings',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;

?>