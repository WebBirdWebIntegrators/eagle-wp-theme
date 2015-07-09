<?php
	
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_ts_header_logo',
		'title' => __('Header Logo', 'eagle'),
		'fields' => array (
			array (
				'key' => 'field_ts_header_logo__image',
				'label' => __('Image', 'eagle'),
				'name' => 'ts_header_logo__image',
				'type' => 'image',
				'instructions' => __('Upload your logo (jpg is not allowed due to transparency settings which are used throughout the theme).', 'eagle'),
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => 'svg, png',
			),
			array (
				'key' => 'field_ts_header_logo__alt_tag',
				'label' => __('Alt Tag', 'eagle'),
				'name' => 'ts_header_logo__alt_tag',
				'type' => 'text',
				'instructions' => __('Only applicable for administrator users.', 'eagle'),
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
			array (
				'key' => 'field_ts_header__logo_width',
				'label' => __('Logo Width', 'eagle'),
				'name' => 'ts_header_logo__width',
				'type' => 'number',
				'instructions' => __(' ', 'eagle'),
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => 'px',
				'min' => '',
				'max' => '',
				'step' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'header-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
	));

endif;

?>