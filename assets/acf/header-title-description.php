<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_ts_header_title_description',
	'title' => __('Header Title & Description','eagle'),
	'fields' => array (
		array (
			'key' => 'field_ts_header_title_description__header_title_text_color',
			'label' => __('Title Text Color','eagle'),
			'name' => 'ts_header_title_description__header_title_text_color',
			'type' => 'color_picker',
			'instructions' => __('Select your title text color.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_ts_header_title_description__header_description_text_color',
			'label' => __('Description Text Color','eagle'),
			'name' => 'ts_header_title_description__header_description_text_color',
			'type' => 'color_picker',
			'instructions' => __('Select your description text color.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array (
			'key' => 'field_ts_header_title_description__header_title_description_bgcolor',
			'label' => __('Background color','eagle'),
			'name' => 'ts_header_title_description__header_title_description_bgcolor',
			'type' => 'color_picker',
			'instructions' => __('Select your background color.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
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