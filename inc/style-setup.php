<?php
/*
*   Set defaults customizer settings
*/

function set_theme_mods() {
    set_theme_mod( 'layout_placement', 'full' );
    set_theme_mod( 'imageradio', 'best' );
    set_theme_mod( 'home_display', 'magazine' );

}
add_action( 'init', 'set_theme_mods' );


/*
*   Remove Typography Panel From Customizer. Fonts Set in CSS
*/
function remove_customizer_panels(){
    global $wp_customize;
    $wp_customize->remove_panel( 'typo' );
    $wp_customize->remove_panel( 'styling' );
    $wp_customize->remove_section( 'headersection' );
}
add_action( 'customize_register', 'remove_customizer_panels', 20);



/*
*   In BBPress, shorten topic and post freshness to save space, particularly on mobile
*/
function short_freshness_time( $output) {
    $output = preg_replace( '/, .*[^ago]/', ' ', $output );
    return $output;
}
add_filter( 'bbp_get_time_since', 'short_freshness_time' );
add_filter('bp_core_time_since', 'short_freshness_time');



/*
*   Remove breadcrumb form BBPress
*/
add_filter( 'bbp_no_breadcrumb', '__return_true' );


/*
*  Remove auto margin on HTML. Side Menu position "absolute" was causing conflict with admin bar
*/
function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'my_filter_head');



/*
*   Remove 'category:' in title on category page
*/
function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );