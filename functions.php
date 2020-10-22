<?php
/**
 * 
 * Load parent theme style.css
 * 
 * Add child theme styles,scripts and files
 *
 */

function my_theme_enqueue_styles() {
    $parenthandle = 'drag-themes-style'; 
    $theme = wp_get_theme();

    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  
        $theme->parent()->get('Version 2.0.3')
    );

    wp_enqueue_style( 'minified-style', get_stylesheet_directory_uri() . '/build/css/styles.min.css',
        array($parenthandle)
    );

    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/build/js/main.min.js', array('jquery'), '', true);

    wp_enqueue_script('modified-dragjs-js', get_stylesheet_directory_uri() . '/build/js/modified-dragjs.min.js', array('jquery'), '', true);

    wp_enqueue_style( 'fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

include get_stylesheet_directory() . '/inc/custom-footer.php';

include get_stylesheet_directory() . '/inc/style-setup.php';

include get_stylesheet_directory() . '/inc/optimise-script-load.php';

require get_stylesheet_directory() . '/inc/aqueduct-child-customizer.php';
new Aqueduct_Child_Customizer();

/**
 * 
 * 
 * Add jquery ui on tab and accordion pages
 * 
 *
 */
function add_jquery_ui(){
    if(is_page_template(array('tabs.php', 'accordion.php'))){

    wp_enqueue_script( 'jquery-ui-tabs');
    wp_enqueue_script( 'jquery-ui-accordion');
    wp_enqueue_script( 'jquery-ui-child', get_stylesheet_directory_uri() . '/build/js/jquery-ui-child.min.js',     
        array(
            'jquery',
            'jquery-ui-core',
            'jquery-ui-accordion',
            'jquery-ui-tabs'), '', true );
    }
}
add_action ( 'wp_enqueue_scripts', 'add_jquery_ui' );



/**
 * 
 * 
 * Remove parent theme scripts. These are included in child theme scripts
 * 
 * 
 */

function deregister_howlthemes(){    
    
    wp_deregister_script( 'myscript' );
    wp_dequeue_script( 'myscript' );
    wp_deregister_style( 'google-fonts' );
    wp_dequeue_style( 'google-fonts' );

}
add_action('wp_enqueue_scripts','deregister_howlthemes', 50);

/**
 * Remove wordpress emoji support for performace reasons
 */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * customjs-customize just added the 5 star rating logo in customizer
 */

function deregister_customize_script(){
    wp_deregister_script( 'customjs-customize' );
    wp_dequeue_script( 'customjs-customize' );
}
add_action( 'customize_controls_enqueue_scripts', 'deregister_customize_script', 20 );


/**
 * 
 * 
 * Move scripts to footer instead of head
 * 
 * 
 */

function move_scripts_to_footer() {

    wp_scripts()->add_data( 'jquery', 'group', 1 );
    wp_scripts()->add_data( 'jquery-core', 'group', 1 );
    wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
    wp_enqueue_script('responsive-lightbox',  plugins_url() . ('/responsive-lightbox/js/front.js'), array('jQuery'), '', true);
    wp_enqueue_script('responsive-lightbox-infinite-scroll',  plugins_url() . ('/responsive-lightbox/assets/infinitescroll/infinite-scroll.pkgd.min.js'), array('jQuery'), '', true);
    wp_enqueue_script('responsive-lightbox-swipebox',  plugins_url() . ('/responsive-lightbox/assets/swipebox/jquery.swipebox.min.js'), array('jQuery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'move_scripts_to_footer' );

function dark_mode_cookie($classes){

    $themeClass = '';
        if (!empty($_COOKIE['theme'])) {
            if ($_COOKIE['theme'] == 'dark') {
                $themeClass = 'darkmode';
            } else if ($_COOKIE['theme'] == 'light') {
                $themeClass = '';
        }  
    }
    return array_merge($classes, array($themeClass));

}
add_filter( 'body_class', 'dark_mode_cookie' );


/**
 * 
 *
 * Plugin update checker by TahnisElsts:
 * https://github.com/YahnisElsts/plugin-update-checker
 * 
 *
 */

require 'plugin-update-checker-4.10/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/owen-totem-space/aqueduct-child-theme/',
	__FILE__,
	'aqueduct-child-theme'
);

// Optional: Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');