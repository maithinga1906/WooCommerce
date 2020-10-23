<?php
/**
 * YITH-proteo Theme Customizer - Footer Credits
 *
 * @package yith-proteo
 */

	/**
	 * Add footer credits management
	 */
	$wp_customize->add_section(
		'yith_proteo_footer_credits_management',
		array(
			'title'    => esc_html__( 'Footer credits', 'yith-proteo' ),
			'priority' => 20,
			'panel'    => 'yith_proteo_footer_and_credits',
		)
	);

	// Footer credit options.
	$wp_customize->add_setting(
		'yith_proteo_footer_credits_content',
		array(
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_footer_credits_content',
		array(
			'label'   => esc_html__( 'Enter here the content of the footer credits area', 'yith-proteo' ),
			'section' => 'yith_proteo_footer_credits_management',
			'type'    => 'textarea',
		)
	);
	// Footer credit background color.
	$wp_customize->add_setting(
		'yith_proteo_footer_credits_background_color',
		array(
			'default'           => '#f0f0f0',
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_footer_credits_background_color',
			array(
				'label'   => esc_html__( 'Footer credits background color', 'yith-proteo' ),
				'section' => 'yith_proteo_footer_credits_management',
			)
		)
	);
	// Footer credits font size options.
	$wp_customize->add_setting(
		'yith_proteo_footer_credits_font_size',
		array(
			'sanitize_callback' => 'absint',
			'default'           => 16,
		)
	);
	$wp_customize->add_control(
		'yith_proteo_footer_credits_font_size',
		array(
			'label'   => esc_html__( 'Font size (default: 16px)', 'yith-proteo' ),
			'section' => 'yith_proteo_footer_credits_management',
			'type'    => 'number',
		)
	);
	// Footer Credits font color options.
	$wp_customize->add_setting(
		'yith_proteo_footer_credits_font_color',
		array(
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
			'default'           => '#404040',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_footer_credits_font_color',
			array(
				'label'   => esc_html__( 'Font color', 'yith-proteo' ),
				'section' => 'yith_proteo_footer_credits_management',
			)
		)
	);
	// Footer Credits link color options.
	$wp_customize->add_setting(
		'yith_proteo_footer_credits_link_color',
		array(
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
			'default'           => '#448a85',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_footer_credits_link_color',
			array(
				'label'   => esc_html__( 'Hyperlink color', 'yith-proteo' ),
				'section' => 'yith_proteo_footer_credits_management',
			)
		)
	);
	// Footer Credits link :hover color options.
	$wp_customize->add_setting(
		'yith_proteo_footer_credits_link_hover_color',
		array(
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
			'default'           => yith_proteo_adjust_brightness( get_theme_mod( 'yith_proteo_footer_credits_link_color', '#448a85' ), - 0.3 ),
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_footer_credits_link_hover_color',
			array(
				'label'   => esc_html__( 'Hyperlink :hover color', 'yith-proteo' ),
				'section' => 'yith_proteo_footer_credits_management',
			)
		)
	);
	// Footer Credits alignment.
	$wp_customize->add_setting(
		'yith_proteo_footer_credits_align',
		array(
			'default'           => 'left',
			'sanitize_callback' => 'yith_proteo_sanitize_radio',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_footer_credits_align',
		array(
			'type'    => 'radio',
			'label'   => esc_html__( 'Elements alignment', 'yith-proteo' ),
			'section' => 'yith_proteo_footer_credits_management',
			'choices' => array(
				'left'   => esc_html__( 'Left', 'yith-proteo' ),
				'right'  => esc_html__( 'Right', 'yith-proteo' ),
				'center' => esc_html__( 'Center', 'yith-proteo' ),
			),
		)
	);
