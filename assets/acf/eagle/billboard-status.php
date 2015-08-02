<?php 
	
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
		'key' => 'group_ts_billboard_status',
		'title' => __('Billboard Status', 'eagle'),
		'fields' => array (
			array (
				'key' => 'field_ts_billboard_status__status',
				'label' => false,
				'name' => 'ts_billboard_status__status',
				'type' => 'radio',
				'instructions' => __('When disabled no billboard image will be shown, including the global fall back billboard image', 'eagle'),
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array (
					'active' => __('Active', 'eagle'),
					'disabled' => __('Disabled', 'eagle'),
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