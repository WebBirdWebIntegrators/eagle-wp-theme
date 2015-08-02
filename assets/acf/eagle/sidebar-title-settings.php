<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_ts_sidebar_setting__title_settings',
	'title' => __('Title Settings','eagle'),
	'fields' => array (
		array (
			'key' => 'field_ts_sidebar_setting__title_setting__style',
			'label' => false,
			'name' => 'ts_sidebar_setting__title_setting__style',
			'type' => 'radio',
			'instructions' => __('Set your preferred title style.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'uppercase' => 'Uppercase',
				'lowercase' => 'Lowercase',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'no',
			'layout' => 'horizontal',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'sidebar-settings',
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