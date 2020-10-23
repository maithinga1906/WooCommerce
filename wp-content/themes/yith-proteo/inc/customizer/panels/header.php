<?php
/**
 * YITH-proteo Theme Customizer - Header
 *
 * @package yith-proteo
 */

	/**
	 * Add Header management.
	 */
	$wp_customize->add_section(
		'yith_proteo_header_management',
		array(
			'title'    => esc_html__( 'Header layout and style', 'yith-proteo' ),
			'priority' => 20,
			'panel'    => 'yith_proteo_header_and_topbar_management',
		)
	);

	// Header background color.
	$wp_customize->add_setting(
		'yith_proteo_header_background_color',
		array(
			'default'           => '#ffffff',
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_header_background_color',
			array(
				'label'   => esc_html__( 'Header background color', 'yith-proteo' ),
				'section' => 'yith_proteo_header_management',
			)
		)
	);

	// Header Layout options.
	$wp_customize->add_setting(
		'yith_proteo_header_layout',
		array(
			'default'           => 'left_logo_navigation_inline',
			'sanitize_callback' => 'yith_proteo_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_header_layout',
		array(
			'type'        => 'select',
			'label'       => esc_html__( 'Header layout', 'yith-proteo' ),
			'section'     => 'yith_proteo_header_management',
			'description' => esc_html__( 'Choose the header layout', 'yith-proteo' ),
			'choices'     => array(
				'left_logo_navigation_below'   => esc_html__( 'Logo on the left and navigation below', 'yith-proteo' ),
				'left_logo_navigation_inline'  => esc_html__( 'Logo on the left and navigation inline', 'yith-proteo' ),
				'center_logo_navigation_below' => esc_html__( 'Centered logo and navigation below', 'yith-proteo' ),
			),
		)
	);

	// Header fullwidth.
	$wp_customize->add_setting(
		'yith_proteo_header_fullwidth',
		array(
			'default'           => 'no',
			'sanitize_callback' => 'yith_proteo_sanitize_yes_no',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_header_fullwidth',
		array(
			'type'        => 'radio',
			'label'       => esc_html__( 'Enable full width header', 'yith-proteo' ),
			'section'     => 'yith_proteo_header_management',
			'description' => esc_html__( 'Choose whether to make the header full width or not.', 'yith-proteo' ),
			'choices'     => array(
				'yes' => esc_html__( 'Yes', 'yith-proteo' ),
				'no'  => esc_html__( 'No', 'yith-proteo' ),
			),
		)
	);

	// Header search widget.
	$wp_customize->add_setting(
		'yith_proteo_header_search_widget',
		array(
			'default'           => 'no',
			'sanitize_callback' => 'yith_proteo_sanitize_yes_no',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_header_search_widget',
		array(
			'type'    => 'radio',
			'label'   => esc_html__( 'Show search icon', 'yith-proteo' ),
			'section' => 'yith_proteo_header_management',
			'choices' => array(
				'yes' => esc_html__( 'Yes', 'yith-proteo' ),
				'no'  => esc_html__( 'No', 'yith-proteo' ),
			),
		)
	);

	// Header cart widget.
	$wp_customize->add_setting(
		'yith_proteo_header_cart_widget',
		array(
			'default'           => 'no',
			'sanitize_callback' => 'yith_proteo_sanitize_yes_no',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_header_cart_widget',
		array(
			'type'    => 'radio',
			'label'   => esc_html__( 'Show cart icon', 'yith-proteo' ),
			'section' => 'yith_proteo_header_management',
			'choices' => array(
				'yes' => esc_html__( 'Yes', 'yith-proteo' ),
				'no'  => esc_html__( 'No', 'yith-proteo' ),
			),
		)
	);

	// Header account widget.
	$wp_customize->add_setting(
		'yith_proteo_header_account_widget',
		array(
			'default'           => 'no',
			'sanitize_callback' => 'yith_proteo_sanitize_yes_no',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_header_account_widget',
		array(
			'type'    => 'radio',
			'label'   => esc_html__( 'Show account icon', 'yith-proteo' ),
			'section' => 'yith_proteo_header_management',
			'choices' => array(
				'yes' => esc_html__( 'Yes', 'yith-proteo' ),
				'no'  => esc_html__( 'No', 'yith-proteo' ),
			),
		)
	);

	// Header show sidebar.
	$wp_customize->add_setting(
		'yith_proteo_show_header_sidebar',
		array(
			'default'           => 'yes',
			'sanitize_callback' => 'yith_proteo_sanitize_yes_no',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_show_header_sidebar',
		array(
			'type'        => 'radio',
			'label'       => esc_html__( 'Show header sidebar', 'yith-proteo' ),
			'section'     => 'yith_proteo_header_management',
			'description' => esc_html__( 'Choose whether to show or not the header widget area', 'yith-proteo' ),
			'choices'     => array(
				'yes' => esc_html__( 'Yes', 'yith-proteo' ),
				'no'  => esc_html__( 'No', 'yith-proteo' ),
			),
		)
	);

	$wp_customize->add_setting(
		'yith_proteo_header_main_menu_font',
		array(
			'sanitize_callback' => 'yith_proteo_google_font_sanitization',
			'default'           => '{"font":"Montserrat","regularweight":"regular","category":"sans-serif"}',
		)
	);
	$wp_customize->add_control(
		new Google_Font_Select_Custom_Control(
			$wp_customize,
			'yith_proteo_header_main_menu_font',
			array(
				'label'       => __( 'Header menu font', 'yith-proteo' ),
				'section'     => 'yith_proteo_header_management',
				'input_attrs' => array(
					'font_count' => 'all',
					'orderby'    => 'alpha',
				),
			)
		)
	);
	// main menu font size options.
	$wp_customize->add_setting(
		'yith_proteo_header_main_menu_font_size',
		array(
			'sanitize_callback' => 'absint',
			'default'           => 14,
		)
	);
	$wp_customize->add_control(
		'yith_proteo_header_main_menu_font_size',
		array(
			'label'   => esc_html__( 'Main menu font size (default: 14px)', 'yith-proteo' ),
			'section' => 'yith_proteo_header_management',
			'type'    => 'number',
		)
	);

	// Header menu color.
	$wp_customize->add_setting(
		'yith_proteo_header_main_menu_color',
		array(
			'default'           => get_theme_mod( 'yith_proteo_base_font_color', '#404040' ),
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_header_main_menu_color',
			array(
				'label'   => esc_html__( 'Header menu color', 'yith-proteo' ),
				'section' => 'yith_proteo_header_management',
			)
		)
	);

	// Header menu color hover.
	$wp_customize->add_setting(
		'yith_proteo_header_main_menu_hover_color',
		array(
			'default'           => get_theme_mod( 'yith_proteo_main_color_shade', '#448a85' ),
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_header_main_menu_hover_color',
			array(
				'label'   => esc_html__( 'Header menu :hover color', 'yith-proteo' ),
				'section' => 'yith_proteo_header_management',
			)
		)
	);

	// Header sticky.
	$wp_customize->add_setting(
		'yith_proteo_header_sticky',
		array(
			'default'           => 'yes',
			'sanitize_callback' => 'yith_proteo_sanitize_yes_no',
		)
	);
	$wp_customize->add_control(
		'yith_proteo_header_sticky',
		array(
			'type'        => 'radio',
			'label'       => esc_html__( 'Enable sticky header', 'yith-proteo' ),
			'section'     => 'yith_proteo_header_management',
			'description' => esc_html__( 'Choose whether to make the header stick to the page when scrolling down', 'yith-proteo' ),
			'choices'     => array(
				'yes' => esc_html__( 'Yes', 'yith-proteo' ),
				'no'  => esc_html__( 'No', 'yith-proteo' ),
			),
		)
	);

	// Sticky header background color.
	$wp_customize->add_setting(
		'yith_proteo_sticky_header_background_color',
		array(
			'default'           => get_theme_mod( 'yith_proteo_header_background_color', '#ffffff' ),
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_sticky_header_background_color',
			array(
				'label'   => esc_html__( 'Sticky header background color', 'yith-proteo' ),
				'section' => 'yith_proteo_header_management',
			)
		)
	);

	// Sticky header menu color.
	$wp_customize->add_setting(
		'yith_proteo_sticky_header_main_menu_color',
		array(
			'default'           => get_theme_mod( 'yith_proteo_base_font_color', get_theme_mod( 'yith_proteo_header_main_menu_color', '#404040' ) ),
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_sticky_header_main_menu_color',
			array(
				'label'   => esc_html__( 'Sticky header menu color', 'yith-proteo' ),
				'section' => 'yith_proteo_header_management',
			)
		)
	);

	// Sticky header menu color hover.
	$wp_customize->add_setting(
		'yith_proteo_sticky_header_main_menu_hover_color',
		array(
			'default'           => get_theme_mod( 'yith_proteo_main_color_shade', get_theme_mod( 'yith_proteo_header_main_menu_hover_color', '#448a85' ) ),
			'sanitize_callback' => 'yith_proteo_sanitize_alpha_colors',
		)
	);
	$wp_customize->add_control(
		new Customizer_Alpha_Color_Control(
			$wp_customize,
			'yith_proteo_sticky_header_main_menu_hover_color',
			array(
				'label'   => esc_html__( 'Sticky header menu :hover color', 'yith-proteo' ),
				'section' => 'yith_proteo_header_management',
			)
		)
	);
