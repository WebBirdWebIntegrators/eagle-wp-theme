<?php

if( function_exists('acf_add_local_field_group') ):

$name_path = 'ts_contact_info';

acf_add_local_field_group(array (
	'key' => 'group_' . $name_path,
	'title' => __('Contact Information','eagle'),
	'fields' => array (
		array (
			'key' => 'field_' . $name_path . '__company_name',
			'label' => __('Company Name','eagle'),
			'name' => $name_path . '__company_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => __('Enter your company name','eagle'),
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . '__street_number',
			'label' => __('Street & Number','eagle'),
			'name' => $name_path . '__street_number',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => __('Enter your street & number','eagle'),
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . '__postal_code__city',
			'label' => __('Postal Code & City','eagle'),
			'name' => $name_path . '__postal_code__city',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => __('Enter your postal code & city','eagle'),
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . '__vat_number',
			'label' => __('VAT Number','eagle'),
			'name' => $name_path . '__vat_number',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => __('Enter your VAT number','eagle'),
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . '__email',
			'label' => __('Email','eagle'),
			'name' => $name_path . '__email',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => __('Enter your email address','eagle'),
			'prepend' => '',
			'append' => '',
		),
		array (
			'key' => 'field_' . $name_path . '__phone_number',
			'label' => __('Phone Number','eagle'),
			'name' => $name_path . '__phone_number',
			'type' => 'text',
			'instructions' => __('Please enter your phone number as an international format (ex. +32 123 45 67 89) by using the country code. This format is used to activate the direct call feature on mobile devices.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Ex. +32 123 45 67 89',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . '__mobile_phone',
			'label' => __('Mobile Phone','eagle'),
			'name' => $name_path . '__mobile_phone',
			'type' => 'text',
			'instructions' => __('Please enter your mobile phone number as an international format (ex. +32 123 45 67 89) by using the country code. This format is used to activate the direct call feature on mobile devices.','eagle'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Ex. +32 123 45 67 89',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_' . $name_path . '__activate_mobile_phone',
			'label' => __('Activate mobile phone number on mobile devices?','eagle'),
			'name' => $name_path . '__activate_mobile_phone',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'yes' => 'Yes',
				'no' => 'No',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'no',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_' . $name_path . '__activate_sms',
			'label' => __('Activate SMS on mobile devices?','eagle'),
			'name' => $name_path . '__activate_sms',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_' . $name_path . '__activate_mobile_phone',
						'operator' => '==',
						'value' => 'yes',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'yes' => 'Yes',
				'no' => 'No',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
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
	'menu_order' => 10,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
));

endif;
	
?>