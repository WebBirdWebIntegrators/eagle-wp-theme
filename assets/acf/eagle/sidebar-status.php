<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'ts_sidebar_status__';

acf_add_local_field_group(array (
	'key' => 'group_ts_sidebar_status',
	'title' => __('Sidebar Status','eagle'),
	'fields' => array (
		array (
			'key' => 'field_' . $name_path . 'status',
			'label' => false,
			'name' => $name_path . 'status',
			'type' => 'radio',
			'instructions' => __('When disabled your sidebar will be hidden.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'active' => 'Active',
				'disabled' => 'Disabled',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'active',
			'layout' => 'horizontal',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;

?>