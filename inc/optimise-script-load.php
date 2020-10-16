<?php
//######################################################################################################
//         Optimise scripts/stylesheets loading on certain pages
//######################################################################################################
function control_script_load(){
    if(is_front_page() || is_home() || is_page_template(array('tabs.php', 'accordion.php'))){
        $styles = [
            'bbp-default',
            'gdatt-attachments',
            'bbpress-wp-tweaks',
            'newsletter',
            'tribe-events-bootstrap-datepicker-css',
            'tribe-events-calendar-style',
            'tribe-events-custom-jquery-styles',
            'tribe-events-calendar-style',
            'tribe-events-calendar-pro-style',
            'tribe-events-full-calendar-style-css',
            'tribe-common-skeleton-style-css',
            'tribe-tooltip',
            'tribe-accessibility-css',
            'tribe-events-admin-menu',
            'rtec_styles'
        ];
        $scripts = [
            'gdatt-attachments',
            'newsletter-subscription',
            'responsive-lightbox',
            'responsive-lightbox-infinite-scroll',
            'responsive-lightbox-swipebox',
            "tribe-common",
            "tribe-admin-url-fragment-scroll",
            "tribe-buttonset",
            "tribe-dependency",
            "tribe-pue-notices",
            "tribe-validation",
            "tribe-timepicker",
            "tribe-jquery-timepicker",
            "tribe-dropdowns",
            "tribe-attrchange",
            "tribe-bumpdown",
            "tribe-datatables",
            "tribe-migrate-legacy-settings",
            "tribe-admin-help-page",
            "tribe-tooltip-js",
            "mt-a11y-dialog",
            "tribe-dialog-js",
            "tribe-moment",
            "tribe-tooltipster",
            "tribe-events-settings",
            "tribe-events-php-date-formatter",
            "tribe-events-jquery-resize",
            "tribe-events-chosen-jquery",
            "tribe-events-bootstrap-datepicker",
            "tribe-events-ecp-plugins",
            "tribe-events-editor",
            "tribe-events-dynamic",
            "jquery-placeholder",
            "tribe-events-calendar-script",
            "tribe-events-bar",
            "the-events-calendar",
            "tribe-events-ajax-day",
            "tribe-events-list",
            "tribe-query-string",
            "tribe-clipboard",
            "datatables",
            "tribe-select2",
            "tribe-utils-camelcase",
            "tribe-app-shop-js",
            'rtec_scripts'
        ];
        wp_dequeue_style($styles);
        wp_dequeue_script($scripts);
        
    wp_dequeue_style('responsive-lightbox-nivo_lightbox-css');
    wp_dequeue_style('responsive-lightbox-nivo_lightbox-css-d');    
    wp_dequeue_script('responsive-lightbox-nivo_lightbox');
    wp_dequeue_script('responsive-lightbox-lite-script');
            
    }
}
add_filter('wp_enqueue_scripts', 'control_script_load', 100);



//#########################################################################################################
//                                       JQuery UI Pages
//#########################################################################################################
function add_jquery_ui(){
    if(is_page_template(array('tabs.php', 'accordion.php'))){

    wp_enqueue_script( 'jquery-ui-tabs');
    wp_enqueue_script( 'jquery-ui-accordion');
    }
}
add_action ( 'wp_enqueue_scripts', 'add_jquery_ui' );