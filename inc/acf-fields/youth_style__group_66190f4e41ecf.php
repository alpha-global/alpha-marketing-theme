<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_66190f4e41ecf',
	'title' => 'Youth style',
	'fields' => array(
		array(
			'key' => 'field_66190f4e0e3e8',
			'label' => 'Youth style',
			'name' => 'youth_style',
			'aria-label' => '',
			'type' => 'button_group',
			'instructions' => 'Turning this on will change some base styles on the page, such as fonts.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'off' => 'Off',
				'on' => 'On',
			),
			'default_value' => '',
			'return_format' => 'value',
			'allow_null' => 0,
			'layout' => 'horizontal',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;
