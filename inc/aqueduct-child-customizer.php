<?php

/**
 * Implements Customizer functionality.
 *
 * Add custom sections and settings to the Customizer.
 *
 */
class Aqueduct_Child_Customizer {
	
	public function __construct() {

        add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
    }

    public function register_customize_sections( $wp_customize ) {
    // ###############################################################################################
    //                      Homepage Contents Section
    // ###############################################################################################
        $wp_customize->add_section( 'homepage_content', array(
            'title'    => __( 'IMC Homepage', 'aqueduct-child' ),
            'priority' => 11
        ) );
    
        $this->homepage_content_section( $wp_customize );
        $this->subtext_content_section( $wp_customize );
        $this->welcome_content_section( $wp_customize );
        $this->button_content_section( $wp_customize );
        $this->button_link_section( $wp_customize );
        $this->button_content2_section( $wp_customize );
        $this->button_link2_section( $wp_customize );
        $this->show_button2_section( $wp_customize );
        $this->button_content3_section( $wp_customize );
        $this->button_link3_section( $wp_customize );
        $this->show_button3_section( $wp_customize );

    // ###############################################################################################
    //                      Emergency Announcement Section
    // ###############################################################################################
        $wp_customize->add_section( 'emergency_announcement', array(
            'title'    => __( 'IMC Emergency Announcement', 'aqueduct-child' ),
            'priority' => 10
        ) );
    
        $this->emergency_announcement_section( $wp_customize );
        $this->show_announcement_section( $wp_customize );

    // ###############################################################################################
    //                      Footer Contents Section
    // ###############################################################################################
    
        $wp_customize->add_panel( 'imc-footer', array(
            'title' => __( 'IMC Footer', 'aqueduct'),
            'priority' => 12, // Mixed with top-level-section hierarchy.
        ) );
        
        $wp_customize->add_section( 'footer_list_1', array(
            'title'    => __( 'Footer List 1', 'aqueduct-child' ),
            'panel'    => 'imc-footer',
            'priority' => 40
        ) );

        $this->list1_content_section( $wp_customize );

        $wp_customize->add_section( 'footer_list_2', array(
            'title'    => __( 'Footer List 2', 'aqueduct-child' ),
            'panel'    => 'imc-footer',
            'priority' => 50
        ) );

        $this->list2_content_section( $wp_customize );

        $wp_customize->add_section( 'footer_list_3', array(
            'title'    => __( 'Footer List 3', 'aqueduct-child' ),
            'panel'    => 'imc-footer',
            'priority' => 60
        ) );

        $this->list3_content_section( $wp_customize );
    

    }
    // ###############################################################################################
    //                      Homepage Contents Options
    // ###############################################################################################
    private function homepage_content_section( $wp_customize ) {

        $wp_customize->add_setting( 'site_title', array(
            'default'           => 'Irish Mountaineering Club',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'site_title', array(
            'label'       => esc_html__( 'Add Homepage Title', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'site_title',
            'type'        => 'text',
            'priority'    => 10
        ) ) );    
    }
    private function subtext_content_section( $wp_customize ) {

        $wp_customize->add_setting( 'subtext', array(
            'default'           => 'Established 1942',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'subtext', array(
            'label'       => esc_html__( 'Add Subtext', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'subtext',
            'type'        => 'text',
            'priority'    => 11
        ) ) );    
    }
    private function welcome_content_section( $wp_customize ) {

        $wp_customize->add_setting( 'welcome_content', array(
            'default'           => 'Welcome to the IMC',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'welcome_content', array(
            'label'       => esc_html__( 'Welcome Message', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'welcome_content',
            'type'        => 'text',
            'priority'    => 12
        ) ) );    
    }
    // ###############################################################################################
    //                      Homepage Button 1 Options
    // ###############################################################################################
    private function button_content_section( $wp_customize ) {

        $wp_customize->add_setting( 'button_content', array(
            'default'           => 'Log In',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button_content', array(
            'label'       => esc_html__( 'Button 1 Text', 'aqueduct-child' ),
            'description' => esc_html__( 'Text to show on Button', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'button_content',
            'type'        => 'text',
            'priority'    => 13
        ) ) );    
    }
    private function button_link_section( $wp_customize ) {

        $wp_customize->add_setting( 'button_link', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button_link', array(
            'label'       => esc_html__( 'Button 1 Link', 'aqueduct-child' ),
            'description' => esc_html__( 'Paste link for button', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'button_link',
            'type'        => 'text',
            'priority'    => 14
        ) ) );
    }
    // ###############################################################################################
    //                      Homepage Button 2 Options
    // ###############################################################################################
    private function show_button2_section( $wp_customize ) {

		$wp_customize->add_setting( 'show_button2', array(
			'default'           => false,
			'sanitize_callback' => array( $this, 'sanitize_checkbox' )
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'show_button2', array(
			'label'       => esc_html__( 'Show button 2', 'aqueduct-child' ),
			'description' => esc_html__( '', 'aqueduct-child' ),
			'section'     => 'homepage_content',
			'settings'    => 'show_button2',
			'type'        => 'checkbox',
			'priority'    => 15
		) ) );
	}
    private function button_content2_section( $wp_customize ) {

        $wp_customize->add_setting( 'button_content2', array(
            'default'           => 'Join',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button_content2', array(
            'label'       => esc_html__( 'Button 2 Text', 'aqueduct-child' ),
            'description' => esc_html__( 'Text to show on Button', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'button_content2',
            'type'        => 'text',
            'priority'    => 16
        ) ) );    
    }
    private function button_link2_section( $wp_customize ) {

        $wp_customize->add_setting( 'button_link2', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button_link2', array(
            'label'       => esc_html__( 'Button 2 Link', 'aqueduct-child' ),
            'description' => esc_html__( 'Paste link for button', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'button_link2',
            'type'        => 'text',
            'priority'    => 17
        ) ) );
    }
    // ###############################################################################################
    //                      Homepage Button 3 Options
    // ###############################################################################################
    private function show_button3_section( $wp_customize ) {

		$wp_customize->add_setting( 'show_button3', array(
			'default'           => false,
			'sanitize_callback' => array( $this, 'sanitize_checkbox' )
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'show_button3', array(
			'label'       => esc_html__( 'Show button 3', 'aqueduct-child' ),
			'description' => esc_html__( '', 'aqueduct-child' ),
			'section'     => 'homepage_content',
			'settings'    => 'show_button3',
			'type'        => 'checkbox',
			'priority'    => 18
		) ) );
	}
    private function button_content3_section( $wp_customize ) {

        $wp_customize->add_setting( 'button_content3', array(
            'default'           => 'About',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button_content3', array(
            'label'       => esc_html__( 'Button 3 Text', 'aqueduct-child' ),
            'description' => esc_html__( 'Text to show on Button', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'button_content3',
            'type'        => 'text',
            'priority'    => 19
        ) ) );    
    }
    private function button_link3_section( $wp_customize ) {

        $wp_customize->add_setting( 'button_link3', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button_link3', array(
            'label'       => esc_html__( 'Button 3 Link', 'aqueduct-child' ),
            'description' => esc_html__( 'Paste link for button', 'aqueduct-child' ),
            'section'     => 'homepage_content',
            'settings'    => 'button_link3',
            'type'        => 'text',
            'priority'    => 20
        ) ) );
    }
    // ###############################################################################################
    //                      Emergency Announcement Settings
    // ###############################################################################################
    private function show_announcement_section( $wp_customize ) {

		$wp_customize->add_setting( 'show_announcement', array(
			'default'           => false,
			'sanitize_callback' => array( $this, 'sanitize_checkbox' )
		) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'show_announcement', array(
			'label'       => esc_html__( 'Show Announcement', 'aqueduct-child' ),
			'description' => esc_html__( '', 'aqueduct-child' ),
			'section'     => 'emergency_announcement',
			'settings'    => 'show_announcement',
			'type'        => 'checkbox',
			'priority'    => 10
		) ) );
	}
    private function emergency_announcement_section( $wp_customize ) {

        $wp_customize->add_setting( 'announcement', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'announcement', array(
            'label'       => esc_html__( 'Enter Text', 'aqueduct-child' ),
            'section'     => 'emergency_announcement',
            'settings'    => 'announcement',
            'type'        => 'textarea',
            'priority'    => 11
        ) ) );
    }




    // ###############################################################################################
    //                      Footer Contents Settings
    // ###############################################################################################

    // ###########################################################################
    //                       List 1 Item 1
    // ###########################################################################
    private function list1_content_section( $wp_customize ) {
        $wp_customize->add_setting( 'list1_img1', array(
            'default'           => 'fa fa-book',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_img1', array(
            'label'       => esc_html__( 'Item 1 Icon', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_img1',
            'priority'    => 18, 
            'type'        => 'select',
            'choices' => array(
                ''                      => 'None',
                'fa fa-home'            => 'Home',
                'fa fa-bed'             => 'Bed',
                'fa fa-user-secret'     => 'User Secret',
                'fa fa-eur'             => 'Euro',
                'fa fa-graduation-cap'  => 'Graduation Cap',
                'fa fa-info-circle'     => 'Info Cirlce',
                'fa fa-envelope-o'      => 'Email',
                'fa fa-users'           => 'Users',
                'fa fa-plane'           => 'Plane',
                'fa fa-book'            => 'Book',
                'fa fa-thumbs-up'       => 'Thumbs Up'),
              
        ) ) );
        $wp_customize->add_setting( 'list1_content1', array(
            'default'           => 'Books',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_content1', array(
            'label'       => esc_html__( 'Item 1 Label', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_content1',
            'type'        => 'text',
            'priority'    => 19,
        ) ) );
       
        $wp_customize->add_setting( 'list1_link1', array(
            'default'           => 'https://www.irishmountaineeringclub.org/publications/books/',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_link1', array(
            'label'       => esc_html__( 'Item 1 Link', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_link1',
            'type'        => 'text',
            'priority'    => 20,
        ) ) );

    // ###########################################################################
    //                            List 1 Item 2
    // ###########################################################################
        $wp_customize->add_setting( 'list1_img2', array(
            'default'           => 'fa fa-envelope-o',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_img2', array(
            'label'       => esc_html__( 'Item 2 Icon', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_img2',
            'priority'    => 28, 
            'type'        => 'select',
            'choices' => array(
                ''                      => 'None',
                'fa fa-home'            => 'Home',
                'fa fa-bed'             => 'Bed',
                'fa fa-user-secret'     => 'User Secret',
                'fa fa-eur'             => 'Euro',
                'fa fa-graduation-cap'  => 'Graduation Cap',
                'fa fa-info-circle'     => 'Info Cirlce',
                'fa fa-envelope-o'      => 'Email',
                'fa fa-users'           => 'Users',
                'fa fa-plane'           => 'Plane',
                'fa fa-book'            => 'Book',
                'fa fa-thumbs-up'       => 'Thumbs Up'),              
        ) ) );
        $wp_customize->add_setting( 'list1_content2', array(
            'default'           => 'Newsletters',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_content2', array(
            'label'       => esc_html__( 'Item 2 Label', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_content2',
            'type'        => 'text',
            'priority'    => 29,
        ) ) );

        $wp_customize->add_setting( 'list1_link2', array(
            'default'           => esc_html__(''),
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_link2', array(
            'label'       => esc_html__( 'Item 2 Link', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_link2',
            'type'        => 'text',
            'priority'    => 30,
        ) ) );
        // ###########################################################################
        //                            List 1 Item 3
        // ###########################################################################
        $wp_customize->add_setting( 'list1_img3', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_img3', array(
            'label'       => esc_html__( 'Item 3 Icon', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_img3',
            'priority'    => 48, 
            'type'        => 'select',
            'choices' => array(
                ''                      => 'None',
                'fa fa-home'            => 'Home',
                'fa fa-bed'             => 'Bed',
                'fa fa-user-secret'     => 'User Secret',
                'fa fa-eur'             => 'Euro',
                'fa fa-graduation-cap'  => 'Graduation Cap',
                'fa fa-info-circle'     => 'Info Cirlce',
                'fa fa-envelope-o'      => 'Email',
                'fa fa-users'           => 'Users',
                'fa fa-plane'           => 'Plane',
                'fa fa-book'            => 'Book',
                'fa fa-thumbs-up'       => 'Thumbs Up'),              
        ) ) );
        $wp_customize->add_setting( 'list1_content3', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_content3', array(
            'label'       => esc_html__( 'Item 3 Label', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_content3',
            'type'        => 'text',
            'priority'    => 49,
        ) ) );

        $wp_customize->add_setting( 'list1_link3', array(
            'default'           => esc_html__(''),
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_link3', array(
            'label'       => esc_html__( 'Item 3 Link', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqeduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_link3',
            'type'        => 'text',
            'priority'    => 50,
        ) ) );
        // ###########################################################################
        //                            List 1 Item 4
        // ###########################################################################
        $wp_customize->add_setting( 'list1_img4', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_img4', array(
            'label'       => esc_html__( 'Item 4 Icon', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_img4',
            'priority'    => 58, 
            'type'        => 'select',
            'choices' => array(
                ''                      => 'None',
                'fa fa-home'            => 'Home',
                'fa fa-bed'             => 'Bed',
                'fa fa-user-secret'     => 'User Secret',
                'fa fa-eur'             => 'Euro',
                'fa fa-graduation-cap'  => 'Graduation Cap',
                'fa fa-info-circle'     => 'Info Cirlce',
                'fa fa-envelope-o'      => 'Email',
                'fa fa-users'           => 'Users',
                'fa fa-plane'           => 'Plane',
                'fa fa-book'            => 'Book',
                'fa fa-thumbs-up'       => 'Thumbs Up'),              
        ) ) );
        $wp_customize->add_setting( 'list1_content4', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_content4', array(
            'label'       => esc_html__( 'Item 4 Label', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_content4',
            'type'        => 'text',
            'priority'    => 59,
        ) ) );

        $wp_customize->add_setting( 'list1_link4', array(
            'default'           => esc_html__(''),
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_link4', array(
            'label'       => esc_html__( 'Item 4 Link', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqeduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_link4',
            'type'        => 'text',
            'priority'    => 60,
        ) ) );
        // ###########################################################################
        //                            List 1 Item 5
        // ###########################################################################
        $wp_customize->add_setting( 'list1_img5', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_img5', array(
            'label'       => esc_html__( 'Item 5 Icon', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_img5',
            'priority'    => 68, 
            'type'        => 'select',
            'choices' => array(
                ''                      => 'None',
                'fa fa-home'            => 'Home',
                'fa fa-bed'             => 'Bed',
                'fa fa-user-secret'     => 'User Secret',
                'fa fa-eur'             => 'Euro',
                'fa fa-graduation-cap'  => 'Graduation Cap',
                'fa fa-info-circle'     => 'Info Cirlce',
                'fa fa-envelope-o'      => 'Email',
                'fa fa-users'           => 'Users',
                'fa fa-plane'           => 'Plane',
                'fa fa-book'            => 'Book',
                'fa fa-thumbs-up'       => 'Thumbs Up'),              
        ) ) );
        $wp_customize->add_setting( 'list1_content5', array(
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_content5', array(
            'label'       => esc_html__( 'Item 5 Label', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqueduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_content5',
            'type'        => 'text',
            'priority'    => 69,
        ) ) );

        $wp_customize->add_setting( 'list1_link5', array(
            'default'           => esc_html__(''),
            'sanitize_callback' => array( $this, 'sanitize_text_field' )
        ) );
        $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list1_link5', array(
            'label'       => esc_html__( 'Item 5 Link', 'aqueduct-child' ),
            'description' => esc_html__( '', 'aqeduct-child' ),
            'section'     => 'footer_list_1',
            'settings'    => 'list1_link5',
            'type'        => 'text',
            'priority'    => 70,
        ) ) );
    }
        // ###########################################################################
        //                       List 2 Item 1
        // ###########################################################################
        private function list2_content_section( $wp_customize ) {
            $wp_customize->add_setting( 'list2_img1', array(
                'default'           => 'fa fa-home',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_img1', array(
                'label'       => esc_html__( 'Item 1 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_img1',
                'priority'    => 18, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),
                  
            ) ) );
            $wp_customize->add_setting( 'list2_content1', array(
                'default'           => 'Hut Facilities',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_content1', array(
                'label'       => esc_html__( 'Item 1 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_content1',
                'type'        => 'text',
                'priority'    => 19,
            ) ) );
           
            $wp_customize->add_setting( 'list2_link1', array(
                'default'           => 'https://www.irishmountaineeringclub.org/hut/',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_link1', array(
                'label'       => esc_html__( 'Item 1 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_link1',
                'type'        => 'text',
                'priority'    => 20,
            ) ) );
    
        // ###########################################################################
        //                            List 2 Item 2
        // ###########################################################################
            $wp_customize->add_setting( 'list2_img2', array(
                'default'           => 'fa fa-bed',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_img2', array(
                'label'       => esc_html__( 'Item 2 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_img2',
                'priority'    => 28, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),              
            ) ) );
            $wp_customize->add_setting( 'list2_content2', array(
                'default'           => 'Hut Booking',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_content2', array(
                'label'       => esc_html__( 'Item 2 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_content2',
                'type'        => 'text',
                'priority'    => 29,
            ) ) );
    
            $wp_customize->add_setting( 'list2_link2', array(
                'default'           => esc_html__('https://www.irishmountaineeringclub.org/accommodations/'),
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_link2', array(
                'label'       => esc_html__( 'Item 2 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_link2',
                'type'        => 'text',
                'priority'    => 30,
            ) ) );
        // ###########################################################################
        //                            List 2 Item 3
        // ###########################################################################
            $wp_customize->add_setting( 'list2_img3', array(
                'default'           => 'fa fa-thumbs-up',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_img3', array(
                'label'       => esc_html__( 'Item 3 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_img3',
                'priority'    => 38, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),              
            ) ) );
            $wp_customize->add_setting( 'list2_content3', array(
                'default'           => 'Kindred Clubs',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_content3', array(
                'label'       => esc_html__( 'Item 3 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_content3',
                'type'        => 'text',
                'priority'    => 39,
            ) ) );
    
            $wp_customize->add_setting( 'list2_link3', array(
                'default'           => esc_html__('https://www.irishmountaineeringclub.org/about/kindred/'),
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_link3', array(
                'label'       => esc_html__( 'Item 3 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_link3',
                'type'        => 'text',
                'priority'    => 40,
            ) ) );
        // ###########################################################################
        //                            List 2 Item 4
        // ###########################################################################
            $wp_customize->add_setting( 'list2_img4', array(
                'default'           => '',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_img4', array(
                'label'       => esc_html__( 'Item 4 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_img4',
                'priority'    => 48, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),              
            ) ) );
            $wp_customize->add_setting( 'list2_content4', array(
                'default'           => '',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_content4', array(
                'label'       => esc_html__( 'Item 4 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_content4',
                'type'        => 'text',
                'priority'    => 49,
            ) ) );
    
            $wp_customize->add_setting( 'list2_link4', array(
                'default'           => esc_html__(''),
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_link4', array(
                'label'       => esc_html__( 'Item 4 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_link4',
                'type'        => 'text',
                'priority'    => 50,
            ) ) );
        // ###########################################################################
        //                            List 2 Item 5
        // ###########################################################################
            $wp_customize->add_setting( 'list2_img5', array(
                'default'           => '',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_img5', array(
                'label'       => esc_html__( 'Item 5 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_img5',
                'priority'    => 58, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),              
            ) ) );
            $wp_customize->add_setting( 'list2_content5', array(
                'default'           => '',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_content5', array(
                'label'       => esc_html__( 'Item 5 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_content5',
                'type'        => 'text',
                'priority'    => 59,
            ) ) );
    
            $wp_customize->add_setting( 'list2_link5', array(
                'default'           => esc_html__(''),
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list2_link5', array(
                'label'       => esc_html__( 'Item 5 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_2',
                'settings'    => 'list2_link5',
                'type'        => 'text',
                'priority'    => 60,
            ) ) );
        }
        // ##############################################################################
        //                       List 3 Item 1
        // ##############################################################################
        private function list3_content_section( $wp_customize ) {
            $wp_customize->add_setting( 'list3_img1', array(
                'default'           => 'fa fa-user-secret',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_img1', array(
                'label'       => esc_html__( 'Item 1 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_img1',
                'priority'    => 18, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),
                  
            ) ) );
            $wp_customize->add_setting( 'list3_content1', array(
                'default'           => 'Data Privacy',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_content1', array(
                'label'       => esc_html__( 'Item 1 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_content1',
                'type'        => 'text',
                'priority'    => 19,
            ) ) );
           
            $wp_customize->add_setting( 'list3_link1', array(
                'default'           => 'https://www.irishmountaineeringclub.org/about/documents/data-privacy-policy/',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_link1', array(
                'label'       => esc_html__( 'Item 1 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_link1',
                'type'        => 'text',
                'priority'    => 20,
            ) ) );
    
        // ###########################################################################
        //                            List 3 Item 2
        // ###########################################################################
            $wp_customize->add_setting( 'list3_img2', array(
                'default'           => 'Expedition Grant',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_img2', array(
                'label'       => esc_html__( 'Item 2 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_img2',
                'priority'    => 28, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),              
            ) ) );
            $wp_customize->add_setting( 'list3_content2', array(
                'default'           => '',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_content2', array(
                'label'       => esc_html__( 'Item 2 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_content2',
                'type'        => 'text',
                'priority'    => 29,
            ) ) );
    
            $wp_customize->add_setting( 'list3_link2', array(
                'default'           => esc_html__('https://www.irishmountaineeringclub.org/about/documents/expedition-grant-policy/'),
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_link2', array(
                'label'       => esc_html__( 'Item 2 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_link2',
                'type'        => 'text',
                'priority'    => 30,
            ) ) );
        // ###########################################################################
        //                            List 3 Item 3
        // ###########################################################################
            $wp_customize->add_setting( 'list3_img3', array(
                'default'           => 'fa fa-graduation-cap',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_img3', array(
                'label'       => esc_html__( 'Item 3 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_img3',
                'priority'    => 38, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),              
            ) ) );
            $wp_customize->add_setting( 'list3_content3', array(
                'default'           => 'Constitution',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_content3', array(
                'label'       => esc_html__( 'Item 3 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_content3',
                'type'        => 'text',
                'priority'    => 39,
            ) ) );
    
            $wp_customize->add_setting( 'list3_link3', array(
                'default'           => esc_html__('https://www.irishmountaineeringclub.org/about/documents/constitution/'),
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_link3', array(
                'label'       => esc_html__( 'Item 3 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_link3',
                'type'        => 'text',
                'priority'    => 40,
            ) ) );
        // ###########################################################################
        //                            List 3 Item 4
        // ###########################################################################
            $wp_customize->add_setting( 'list3_img4', array(
                'default'           => 'fa fa-eur',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_img4', array(
                'label'       => esc_html__( 'Item 4 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_img4',
                'priority'    => 48, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),
                  
            ) ) );
            $wp_customize->add_setting( 'list3_content4', array(
                'default'           => 'Renew Membership',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_content4', array(
                'label'       => esc_html__( 'Item 4 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_content4',
                'type'        => 'text',
                'priority'    => 49,
            ) ) );
           
            $wp_customize->add_setting( 'list3_link4', array(
                'default'           => 'https://www.irishmountaineeringclub.org/membership/renew/',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_link4', array(
                'label'       => esc_html__( 'Item 4 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_link4',
                'type'        => 'text',
                'priority'    => 50,
            ) ) );
    
        // ###########################################################################
        //                            List 3 Item 5
        // ###########################################################################
            $wp_customize->add_setting( 'list3_img5', array(
                'default'           => '',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_img5', array(
                'label'       => esc_html__( 'Item 5 Icon', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_img5',
                'priority'    => 58, 
                'type'        => 'select',
                'choices' => array(
                    ''                      => 'None',
                    'fa fa-home'            => 'Home',
                    'fa fa-bed'             => 'Bed',
                    'fa fa-user-secret'     => 'User Secret',
                    'fa fa-eur'             => 'Euro',
                    'fa fa-graduation-cap'  => 'Graduation Cap',
                    'fa fa-info-circle'     => 'Info Cirlce',
                    'fa fa-envelope-o'      => 'Email',
                    'fa fa-users'           => 'Users',
                    'fa fa-plane'           => 'Plane',
                    'fa fa-book'            => 'Book',
                    'fa fa-thumbs-up'       => 'Thumbs Up'),              
            ) ) );
            $wp_customize->add_setting( 'list3_content5', array(
                'default'           => '',
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_content5', array(
                'label'       => esc_html__( 'Item 5 Label', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_content5',
                'type'        => 'text',
                'priority'    => 59,
            ) ) );
    
            $wp_customize->add_setting( 'list3_link5', array(
                'default'           => esc_html__(''),
                'sanitize_callback' => array( $this, 'sanitize_text_field' )
            ) );
            $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'list3_link5', array(
                'label'       => esc_html__( 'Item 5 Link', 'aqueduct-child' ),
                'description' => esc_html__( '', 'aqueduct-child' ),
                'section'     => 'footer_list_3',
                'settings'    => 'list3_link5',
                'type'        => 'text',
                'priority'    => 60,
            ) ) );
        
    }



    // ###############################################################################################
    //                      Sanitization Functions
    // ###############################################################################################
    public function sanitize_text_field( $str ) {
        $filtered = _sanitize_text_fields( $str, false );

        return apply_filters( 'sanitize_text_field', $filtered, $str );
    }

    public function sanitize_checkbox( $input ) {
        return ( $input === true ) ? true : false;
    }    
}