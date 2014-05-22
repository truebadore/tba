<?php

/**

 * Formation  Theme Customizer

 *

 * @package Formation

 * @link http://ottopress.com/tag/customizer/

 */


/**

 * Add postMessage support for site title and description for the Theme Customizer.

 *

 * @param WP_Customize_Manager $wp_customize Theme Customizer object.

 *

 */

function Formation_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';

	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}

add_action( 'customize_register', 'Formation_customize_register' );



/**

 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.

 *

 * @since Formation 1.0

 */

function Formation_customize_preview_js() {

	wp_enqueue_script( 'Formation_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20120827', true );

}

add_action( 'customize_preview_init', 'Formation_customize_preview_js' );



add_action ('admin_menu', 'Formation_admin');

function Formation_admin() {

}

// add settings to create various social media text areas.



add_action('customize_register', 'Formation_customize');

function Formation_customize($wp_customize) {



	$wp_customize->add_section( 'Formation_socmed_settings', array(

		'title'          => 'Social Media Settings',

		'priority'       => 35,

	) );



	$wp_customize->add_setting( 'twitter', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'twitter', array(

		'label'   => __( 'Twitter url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'facebook', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'facebook', array(

		'label'   => __( 'Facebook url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'googleplus', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'googleplus', array(

		'label'   => __( 'Google + url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'linkedin', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'linkedin', array(

		'label'   => __( 'LinkedIn url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'flickr', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'flickr', array(

		'label'   => __( 'Flickr url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'pinterest', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'pinterest', array(

		'label'   => __( 'Pinterest url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'youtube', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'youtube', array(

		'label'   => __( 'YouTube url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'vimeo', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'vimeo', array(

		'label'   => __( 'Vimeo url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'tumblr', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'tumblr', array(

		'label'   => __( 'Tumblr url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'dribble', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'dribble', array(

		'label'   => __( 'Dribble url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );

	

	$wp_customize->add_setting( 'github', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'github', array(

		'label'   => __( 'Github url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );
	
	
	$wp_customize->add_setting( 'instagram', array(

		'default'        => '',

	) );



	$wp_customize->add_control( 'instagram', array(

		'label'   => __( 'Instagram url:', 'Formation_basic' ),

		'section' => 'Formation_socmed_settings',

		'type'    => 'text',

	) );
	
}