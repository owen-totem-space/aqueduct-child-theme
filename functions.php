<?php
//#######################################################################################################
//                                Load Parent Theme & Child Theme CSS
//#######################################################################################################

function my_theme_enqueue_styles() {
    $parenthandle = 'drag-themes-style'; 
    $theme = wp_get_theme();

    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  
        $theme->parent()->get('Version 2.0.3')
    );

    wp_enqueue_style( 'minified-style', get_stylesheet_directory_uri() . '/dist/css/styles.min.css',
        array($parenthandle)
    );

    wp_enqueue_script('all-js', get_stylesheet_directory_uri() . '/dist/js/all.js', array('jquery'), '', true);

    wp_enqueue_style( 'fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

include get_stylesheet_directory() . '/inc/inserted-footer.php';

include get_stylesheet_directory() . '/inc/style-setup.php';

include get_stylesheet_directory() . '/inc/optimise-script-load.php';

require get_stylesheet_directory() . '/inc/aqueduct-child-customizer.php';
new Aqueduct_Child_Customizer();



function deregister_howlthemes(){    
    
    wp_deregister_script( 'myscript' );
    wp_dequeue_script( 'myscript' );
    wp_deregister_style( 'google-fonts' );
    wp_dequeue_style( 'google-fonts' );
}
add_action('wp_enqueue_scripts','deregister_howlthemes', 50);


remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );



// #######################################################################################################
//                            force scripts to load in footer instead of header
// #######################################################################################################
function move_jquery_to_footer() {
    wp_scripts()->add_data( 'jquery', 'group', 1 );
    wp_scripts()->add_data( 'jquery-core', 'group', 1 );
    wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
}
add_action( 'wp_enqueue_scripts', 'move_jquery_to_footer' );



function load_litebox_footer(){    
    wp_enqueue_script('responsive-lightbox-nivo_lightbox',  plugins_url() . ('/responsive-lite-box/assets/nivo-lightbox/nivo-lightbox.min.js'), array('jQuery'), '', true);
    wp_enqueue_script('responsive-lightbox-lite-script',  plugins_url() . ('/responsive-lite-box/assets/inc/script.js'), array('jQuery'), '', true);
    
    wp_enqueue_script('responsive-lightbox',  plugins_url() . ('/responsive-lightbox/js/front.js'), array('jQuery'), '', true);
    wp_enqueue_script('responsive-lightbox-infinite-scroll',  plugins_url() . ('/responsive-lightbox/assets/infinitescroll/infinite-scroll.pkgd.min.js'), array('jQuery'), '', true);
    wp_enqueue_script('responsive-lightbox-swipebox',  plugins_url() . ('/responsive-lightbox/assets/swipebox/jquery.swipebox.min.js'), array('jQuery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'load_litebox_footer' );