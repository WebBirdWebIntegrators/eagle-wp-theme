<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_ts_header_style',
	'title' => 'Header Style',
	'fields' => array (
		array (
			'key' => 'field_ts_header_style__style',
			'label' => false,
			'name' => 'ts_header_style__style',
			'type' => 'radio',
			'instructions' => 'Set your header style.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'transparent' => 'Transparent (default)',
				'non_transparent' => 'Non-transparent',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'transparent',
			'layout' => 'horizontal',
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