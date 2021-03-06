<?php
$group_color = 'Typo & Color';

vc_map( array(
	'base'          => 'penci_counter_up',
	'icon'          => get_template_directory_uri() . '/images/vc-icon.png',
	'category'      => 'Soledad',
	'html_template' => get_template_directory() . '/inc/js_composer/shortcodes/counter_up/frontend.php',
	'weight'        => 700,
	'name'          => __( 'Penci Counter Up', 'soledad' ),
	'description'   => __( 'Counter Up Block', 'soledad' ),
	'controls'      => 'full',
	'params'        => array_merge(
		Penci_Vc_Params_Helper::params_container_width(),
		array(
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Counter Up style', 'soledad' ),
				'param_name' => 'cup_style',
				'std'        => 's1',
				'value'      => array(
					esc_html__( 'Style 1', 'soledad' ) => 's1',
					esc_html__( 'Style 2', 'soledad' ) => 's2',
				),
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Posttion', 'soledad' ),
				'param_name' => 'cup_align',
				'value'      => array(
					__( 'Align Center', 'soledad' ) => 'center',
					__( 'Align Left', 'soledad' )   => 'left',
					__( 'Align Right', 'soledad' )  => 'right',
				),
				'std'        => 'center',
				'dependency' => array( 'element' => 'cup_style', 'value' => 's1' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Number', 'soledad' ),
				'param_name' => 'cup_number'
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Prefix of number', 'soledad' ),
				'param_name' => 'cup_prefix_number'
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Suffix of number', 'soledad' ),
				'param_name' => 'cup_suffix_number',
			),
			array(
				'type'        => 'textfield',
				'heading'     => esc_html__( 'Title', 'soledad' ),
				'param_name'  => 'cup_title',
				'admin_label' => true
			),
			array(
				'type'       => 'dropdown',
				'heading'    => esc_html__( 'Icon type', 'soledad' ),
				'param_name' => 'cup_icon_type',
				'value'      => array(
					esc_html__( 'Icon', 'soledad' )  => 'icon',
					esc_html__( 'Image', 'soledad' ) => 'image',
				),
			),
			array(
				'type'       => 'attach_image',
				'heading'    => esc_html__( 'Image', 'soledad' ),
				'param_name' => 'cup_image',
				'dependency' => array( 'element' => 'cup_icon_type', 'value' => 'image' ),
			),
			array(
				'type'       => 'textfield',
				'heading'    => __( 'Image size', 'soledad' ),
				'param_name' => 'img_size',
				'std'        => 'full',
				'dependency' => array( 'element' => 'cup_icon_type', 'value' => 'image' ),
			),
			array(
				'type'       => 'iconpicker',
				'heading'    => __( 'Icon', 'soledad' ),
				'param_name' => 'cup_icon',
				'value'      => '',
				'settings'   => array( 'emptyIcon' => true, 'iconsPerPage' => 4000 ),
				'dependency' => array( 'element' => 'cup_icon_type', 'value' => 'icon' )
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Icon Border Style', 'soledad' ),
				'param_name' => 'icon_border_style',
				'value'      => array(
					esc_html__( 'None', 'soledad' )   => '',
					esc_html__( 'Solid', 'soledad' )  => 'solid',
					esc_html__( 'Dashed', 'soledad' ) => 'dashed',
					esc_html__( 'Dotted', 'soledad' ) => 'dotted',
					esc_html__( 'Double', 'soledad' ) => 'double',
				),
				'dependency' => array( 'element' => 'cup_icon_type', 'value' => 'icon' ),
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'icon_border_width',
				'heading'          => __( 'Border width for Icon', 'soledad' ),
				'value'            => '1',
				'std'              => '1',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'dependency'       => array( 'element' => 'icon_border_style', 'value' => array( 'solid', 'dashed', 'dotted', 'double' ) ),
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'icon_border_radius',
				'heading'          => __( 'Border radius for Icon', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'dependency'       => array( 'element' => 'icon_border_style', 'value' => array( 'solid', 'dashed', 'dotted', 'double' ) ),
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'icon_padding',
				'heading'          => __( 'Padding for Icon', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'dependency'       => array( 'element' => 'icon_size', 'value' => 'custom' ),
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => '_image_width_height',
				'heading'          => __( 'Image with/height', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'dependency'       => array( 'element' => 'cup_icon_type', 'value' => 'image' ),
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'icon_margin_bottom',
				'heading'          => __( 'Custom margin bottom for Icon or Image', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'number_margin_top',
				'heading'          => __( 'Custom margin top for number', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'number_padding_lr',
				'heading'          => __( 'Custom padding left/right for number', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'title_margin_top',
				'heading'          => __( 'Custom margin top for title', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Delay', 'soledad' ),
				'param_name' => 'cup_delay',
			),
			array(
				'type'       => 'textfield',
				'heading'    => esc_html__( 'Time', 'soledad' ),
				'param_name' => 'cup_time',
			),
			array(
				'type'             => 'textfield',
				'param_name'       => 'cup_icon_heading',
				'heading'          => esc_html__( 'Icon', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Icon color', 'soledad' ),
				'param_name'       => 'cup_icon_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Icon background color', 'soledad' ),
				'param_name'       => 'cup_icon_bgcolor',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'cup_icon_size',
				'heading'          => __( 'Font size for Icon', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_color,
			),
			array(
				'type'             => 'textfield',
				'param_name'       => 'cup_number_heading',
				'heading'          => esc_html__( 'Number', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Number Color', 'soledad' ),
				'param_name'       => 'cup_number_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => 'cup_number_typo',
				'value'      => '',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'cup_number_size',
				'heading'          => __( 'Font Size for Number', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_color,
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Font Weight for Number', 'soledad' ),
				'param_name' => 'cup_number_weight',
				'std'        => 's1',
				'value'      => array(
					__( 'Default', 'soledad' ) => '',
					'Normal'                   => 'normal',
					'Bold'                     => 'bold',
					'Bolder'                   => 'bolder',
					'Lighter'                  => 'lighter',
					'100'                      => '100',
					'200'                      => '200',
					'300'                      => '300',
					'400'                      => '400',
					'500'                      => '500',
					'600'                      => '600',
					'700'                      => '700',
					'800'                      => '800',
					'900'                      => '900'
				),
				'group'      => $group_color,
			),
			array(
				'type'             => 'textfield',
				'param_name'       => 'cup_prefix_suffix_heading',
				'heading'          => esc_html__( 'Prefix and Suffix', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Prefix and Suffix Color', 'soledad' ),
				'param_name'       => 'cup_frefix_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => 'cup_frefix_typo',
				'value'      => '',
			),
			array(
				'type'             => 'penci_number',
				'heading'          => esc_html__( 'Font size for Prefix and Suffix', 'soledad' ),
				'param_name'       => 'cup_frefix_size',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'             => 'textfield',
				'param_name'       => 'cup_title_heading',
				'heading'          => esc_html__( 'Title', 'soledad' ),
				'value'            => '',
				'group'            => $group_color,
				'edit_field_class' => 'penci-param-heading-wrapper no-top-margin vc_column vc_col-sm-12',
			),
			array(
				'type'             => 'colorpicker',
				'heading'          => esc_html__( 'Title color', 'soledad' ),
				'param_name'       => 'cup_title_color',
				'group'            => $group_color,
				'edit_field_class' => 'vc_col-sm-6',
			),
			array(
				'type'       => 'google_fonts',
				'group'      => $group_color,
				'param_name' => 'cup_title_typo',
				'value'      => '',
			),
			array(
				'type'             => 'penci_number',
				'param_name'       => 'cup_title_size',
				'heading'          => __( 'Font size for Title', 'soledad' ),
				'value'            => '',
				'std'              => '',
				'suffix'           => 'px',
				'min'              => 1,
				'edit_field_class' => 'vc_col-sm-6',
				'group'            => $group_color,
			),
			array(
				'type'       => 'dropdown',
				'heading'    => __( 'Font Weight for Number', 'soledad' ),
				'param_name' => 'cup_title_weight',
				'std'        => 's1',
				'value'      => array(
					__( 'Default', 'soledad' ) => '',
					'Normal'                   => 'normal',
					'Bold'                     => 'bold',
					'Bolder'                   => 'bolder',
					'Lighter'                  => 'lighter',
					'100'                      => '100',
					'200'                      => '200',
					'300'                      => '300',
					'400'                      => '400',
					'500'                      => '500',
					'600'                      => '600',
					'700'                      => '700',
					'800'                      => '800',
					'900'                      => '900'
				),
				'group'      => $group_color,
			),
		),
		Penci_Vc_Params_Helper::extra_params()
	)
) );