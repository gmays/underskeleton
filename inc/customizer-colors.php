<?php
/**
 * Underskeleton Color Customizer.
 *
 * @package underskeleton
 */

/*------------------------------------*\
  #SETTINGS
\*------------------------------------*/
function underskeleton_colors_customizer( $wp_customize ) {

    /* REMOVE: HEADER TEXT COLOR */
    $wp_customize->remove_control('header_textcolor');

    /* SETTING: TEXT COLOR */
    $wp_customize->add_setting( 'underskeleton_text_color', array(
        'default'   => '#222',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_text_color',
        array(
            'label' => __( 'Default Text Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_text_color',
            'priority' => 10,
        )
        ));

    /* SETTING: HEADING COLOR */
    $wp_customize->add_setting( 'underskeleton_heading_color', array(
        'default'   => '#d72d5c',
        'type'      => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh'
        ));
    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize,
        'underskeleton_heading_color',
        array(
            'label' => __( 'Heading Color', 'underskeleton' ),
            'section' => 'colors',
            'settings' => 'underskeleton_heading_color',
            'priority' => 10,
        )
        ));
}
add_action('customize_register', 'underskeleton_colors_customizer');



function underskeleton_colors_customizer_output() {
    ?>
    <!--Customizer Colors-->
    <style type="text/css">
        /* default text color */
        body { color: <?php echo esc_attr( get_theme_mod( 'underskeleton_text_color', '#222' ) ); ?>; }
        /* Headings */
        h1, h2, h3, h4, h5, h6 { color: <?php echo esc_attr( get_theme_mod( 'underskeleton_heading_color', '#d72d5c' ) ); ?>; }

    </style> 
    <!--/Customizer Colors-->
    <?php
}
add_action('wp_head', 'underskeleton_colors_customizer_output');
