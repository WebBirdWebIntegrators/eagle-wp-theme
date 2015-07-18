<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'wb_ts_site_excerpt';

acf_add_local_field_group(array (
	'key' => 'group_' . $name_path,
	'title' => __('Site Excerpt','eagle'),
	'fields' => array (
		array (
			'key' => 'field_' . $name_path . '__title',
			'label' => __('Title','eagle'),
			'name' => $name_path . '__title',
			'type' => 'text',
			'instructions' => __('Set your title', 'eagle'),
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
			'key' => 'field_' . $name_path . '__content',
			'label' => __('Content', 'eagle'),
			'name' => $name_path . '__content',
			'type' => 'wysiwyg',
			'instructions' => __('Set your content', 'eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'footer-settings',
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
