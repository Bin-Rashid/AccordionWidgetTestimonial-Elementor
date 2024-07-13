<?php
error_reporting(0);

class VentCube_Accordion_Client_Review_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'ventcube_accordion_client_review';
    }

    public function get_title() {
        return __( 'VentCube Accordion Rlient Review', 'ventcuebe' );
    }

    public function get_icon() {
        return 'eicon-accordion';
    }

    public function get_categories() {
        return [ 'general' ];
    }
    public function get_script_depends() {
		return [ 'app.js'];
	}

    public function get_style_depends() {
		return [ 'style.css', 'responsive.css' ];
	}

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'ventcuebe' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'accordion_items',
            [
                'label' => __( 'Accordion Items', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'client_name',
                        'label' => __( 'Client Name', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Client Name', 'ventcuebe' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'year',
                        'label' => __( 'Year', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( '2020', 'ventcuebe' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'client_image',
                        'label' => __( 'Client Image', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => plugins_url( 'assets/img/Group 40191.svg', __FILE__ ),
                        ],
                    ],
                    [
                        'name' => 'review_text',
                        'label' => __( 'Review Text', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => __( '“What we were looking for and found with Beetroot was close cooperation and proper employees.”', 'ventcuebe' ),
                        'label_block' => true,
                    ],
                    [
                        'name' => 'additional_info_heading',
                        'label' => __('Additional Info Heading', 'ventcuebe'),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __('Additional Info Heading', 'ventcuebe'),
                        'placeholder' => __('Enter your title', 'ventcuebe'),
                    ],
                    [
                        'name' => 'additional_info_items',
                        'label' => __('List Items', 'ventcuebe'),
                        'type' => \Elementor\Controls_Manager::REPEATER,
                        'fields' => [
                            [
                                'name' => 'list_item',
                                'label' => __('List Item', 'ventcuebe'),
                                'type' => \Elementor\Controls_Manager::TEXT,
                                'default' => __('List Item', 'ventcuebe'),
                                'placeholder' => __('Enter list item', 'ventcuebe'),
                            ],
                            [
                                'name' => 'svg_icon',
                                'label' => __('SVG Icon', 'ventcuebe'),
                                'type' => \Elementor\Controls_Manager::ICONS,
                                'default' => [
                                    'value' => 'fas fa-check',
                                    'library' => 'solid',
                                ],
                            ],
                        ],
                        'default' => [
                            [
                                'list_item' => __('List Item #1', 'ventcuebe'),
                                'svg_icon' => [
                                    'value' => 'fas fa-check',
                                    'library' => 'solid',
                                ],
                            ],
                            [
                                'list_item' => __('List Item #2', 'ventcuebe'),
                                'svg_icon' => [
                                    'value' => 'fas fa-check',
                                    'library' => 'solid',
                                ],
                            ],
                            [
                                'list_item' => __('List Item #3', 'ventcuebe'),
                                'svg_icon' => [
                                    'value' => 'fas fa-check',
                                    'library' => 'solid',
                                ],
                            ],
                        ],
                        'title_field' => '{{{ list_item }}}',
                    ],
                    [
                        'name' => 'client_work_image',
                        'label' => __( 'Client Work Image', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => plugins_url( 'assets/img/client_review.png', __FILE__ ),
                        ],
                    ],
                    [
                        'name' => 'button_right_text',
                        'label' => __( 'Right Button Text', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Button Right', 'ventcuebe' ),
                    ],
                    [
                        'name' => 'button_right_url',
                        'label' => __( 'Right Button URL', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'default' => [
                            'url' => '#',
                        ],
                    ],
                    [
                        'name' => 'button_right_icon',
                        'label' => __( 'Right Button Icon', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [
                            'value' => 'fas fa-star',
                            'library' => 'fa-solid',
                            'size' => '14px', // Default icon size
                            'width' => '14', // Default icon width
                            'height' => '14', // Default icon height
                        ],
                    ],
                    [
                        'name' => 'button_right_icon_position',
                        'label' => __( 'Right Button Icon Position', 'ventcuebe' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'options' => [
                            'before' => __( 'Before', 'ventcuebe' ),
                            'after' => __( 'After', 'ventcuebe' ),
                        ],
                        'default' => 'before',
                    ],
                ],
                'title_field' => '{{{ client_name }}} - {{{ year }}}',
            ]
        );
        
        $this->end_controls_section();
        


        // Header area color and typhography control section
        $this->start_controls_section(
			'header_style_section',
			[
				'label' => esc_html__( 'Header Style', 'elementor-list-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
            'accordion_header_background_color',
            [
                'label' => __( 'Accordion Header Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-header' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        
        $this->add_control(
            'accordion_header_text_color',
            [
                'label' => __( 'Accordion Header Text Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-header' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        // Header Left side typography style control
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'header_left_heading_typography',
                'label' => __( 'Header Left Heading Typography', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .ventcube-accordion-header .ventcube-header-left span',
				'responsive' => true
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'header_left_text_shadow',
                'label' => __( 'Header Left Heading Text Shadow', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .ventcube-accordion-header .ventcube-header-left span',
            ]
        );
        
        $this->add_responsive_control(
            'header_left_number_font_size',
            [
                'label' => __( 'Header Left Number Font Size', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-header .ventcube-header-left .ventcube-number' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'header_left_number_margin',
            [
                'label' => __( 'Header Left Number Margin', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-header .ventcube-header-left .ventcube-number' => 'margin-right: {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
        
        // Header Right side style control
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'header_right_heading_typography',
                'label' => __( 'Header Right Heading Typography', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .ventcube-accordion-header .ventcube-header-right h2',
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'header_right_text_shadow',
                'label' => __( 'Header Right Heading Text Shadow', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .ventcube-accordion-header .ventcube-header-right h2',
            ]
        );

        $this->add_responsive_control(
            'header_left_number_margin',
            [
                'label' => __( 'Header Left Number Margin', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-header .ventcube-header-right h2' => 'margin-top: {{TOP}}{{UNIT}};',
                ],
            ]
        );
        
        // Accordion Header Padding Style Control
        $this->add_responsive_control(
            'accordion_header_padding',
            [
                'label' => __( 'Accordion Header Padding', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        
        // Accordion Header Width Style Control
        $this->add_responsive_control(
            'accordion_header_width',
            [
                'label' => __( 'Accordion Header Width', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ '%', 'px', 'vw' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                    'px' => [
                        'min' => 0,
                        'max' => 2000,
                    ],
                    'vw' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-header' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->end_controls_section();
        
        // ===========Client Image Controling================== //
        $this->start_controls_section(
            'client_image_style_section',
            [
                'label' => __( 'Client Image Style', 'ventcuebe' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'client_image',
            [
                'label' => __( 'Client Image', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => plugins_url( 'assets/img/Group 40191.svg', __FILE__ ),
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        
        // Add responsive controls for Client Image Size
        $this->add_responsive_control(
            'client_image_size',
            [
                'label' => __( 'Client Image Size', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => 70,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 60,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 10,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-client-image-body' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        // Add responsive controls for Client Image Position
        $this->add_responsive_control(
            'client_image_position_top',
            [
                'label' => __( 'Client Image Top Position', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => -80,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => -70,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => -60,
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-client-image-body' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'client_image_position_left',
            [
                'label' => __( 'Client Image Left Position', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-client-image-body' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'client_image_position_right',
            [
                'label' => __( 'Client Image Right Position', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'desktop_default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'tablet_default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'mobile_default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-client-image-body' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        

        $this->add_responsive_control(
            'client_work_image_border_radius',
            [
                'label' => __( 'Border Radius', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-clint_work_image_row img ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();


 // =============================Accordion body area style control section========================= //

        $this->start_controls_section(
            'accordion_style_section',
            [
                'label' => __( 'Body Style', 'ventcuebe' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        // ==================clint speach section control=======================//

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
              [
              'name' => 'client_says_description_typography',
              'label' => __( 'Client Speech Typography', 'ventcuebe' ),
              'selector' => '{{WRAPPER}} .ventcube-left_column p.client_review_description',
               
             ]
         );
         $this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'client_says_description_text_shadow',
                'label' => __( 'Client Speech Text Shadow', 'ventcuebe' ),
				'selector' => '{{WRAPPER}} .ventcube-left_column p.client_review_description',
                 
			]
		);

        //=========================== Additional Info Section control==============//
        $this->add_responsive_control(
            'additional_heading_text_position',
            [
                'label' => __( 'Additional Heading Text Position', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'ventcuebe' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'ventcuebe' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'ventcuebe' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'selectors' => [
                    '{{WRAPPER}} .ventcube-additional_info_row h2' => 'text-align: {{VALUE}};',
                ],
            ]
            );
       
       
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
              [
              'name' => 'additional_heading_typography',
              'label' => __( 'Additional Heading Typography', 'ventcuebe' ),
              'selector' => '{{WRAPPER}} .ventcube-additional_info_row h2',
               
             ]
         );
         $this->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'additional_heading_text_shadow',
                'label' => __( 'Additional Heading Text Shadow', 'ventcuebe' ),
				'selector' => '{{WRAPPER}} .ventcube-additional_info_row h2',
                 
			]
		);

        $this->add_responsive_control(
            'accordion_body_background_color',
            [
                'label' => __( 'Accordion Body Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-body' => 'background-color: {{VALUE}};',
                ],
                 
            ]
        );
        $this->add_responsive_control(
            'accordion_body_max_width',
            [
                'label' => __( 'Accordion Body Max Width', 'ventcube' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-body' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'accordion_body_padding',
            [
                'label' => __( 'Accordion Body Padding', 'ventcube' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-accordion-body' => 'padding-top: {{TOP}}{{UNIT}}; padding-bottom: {{BOTTOM}}{{UNIT}};',
                ],
            ]
        );        

        

        $this->end_controls_section();

    // ================Additional Info Style Control Section=========================//
    $this->start_controls_section(
        'style_section',
        [
            'label' => __('Additional info Style', 'ventcuebe'),
            'tab' => \Elementor\Controls_Manager::TAB_STYLE,
        ]
    );

    $this->add_responsive_control(
        'additional_info_row_flex_direction',
        [
            'label' => __( 'Additional Info Row Flex Direction', 'ventcube' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'row' => __( 'Row', 'ventcube' ),
                'column' => __( 'Column', 'ventcube' ),
            ],
            'default' => 'column',
            'selectors' => [
                '{{WRAPPER}} .ventcube-accordion-body .ventcube-additional_info_row' => 'flex-direction: {{VALUE}};',
            ],
        ]
    );
    
    $this->add_responsive_control(
        'additional_info_row_margin',
        [
            'label' => __( 'Additional Info Row Margin', 'ventcube' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors' => [
                '{{WRAPPER}} .ventcube-accordion-body .ventcube-additional_info_row' => 'margin: {{TOP}}{{UNIT}}; margin-right: {{RIGHT}}{{UNIT}}; margin-bottom: {{BOTTOM}}{{UNIT}}; margin-left: {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    
    $this->add_responsive_control(
        'additional_info_row_ul_flex_wrap',
        [
            'label' => __( 'Additional Info Row UL Flex Wrap', 'ventcube' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'options' => [
                'wrap' => __( 'Wrap', 'ventcube' ),
                'nowrap' => __( 'No Wrap', 'ventcube' ),
            ],
            'default' => 'wrap',
            'selectors' => [
                '{{WRAPPER}} .ventcube-accordion-body .ventcube-additional_info_row ul' => 'flex-wrap: {{VALUE}};',
            ],
        ]
    );
    
    $this->add_responsive_control(
        'additional_info_row_ul_margin',
        [
            'label' => __( 'Additional Info Row UL Margin', 'ventcube' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'selectors' => [
                '{{WRAPPER}} .ventcube-accordion-body .ventcube-additional_info_row ul' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    
    $this->add_control(
        'additional_list_icon_size',
        [
            'label' => __( 'List Icon Size', 'ventcuebe' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'size_units' => [ 'px', '%', 'em' ],
            'range' => [
                'px' => [
                    'min' => 10,
                    'max' => 50,
                ],
                '%' => [
                    'min' => 10,
                    'max' => 100,
                ],
                'em' => [
                    'min' => 1,
                    'max' => 5,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .ventcube-additional_info_row ul li .ventcube-additional-list-icon' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
            ],
        ]
    );

    $this->add_control(
        'additional_text_icon_spacing',
        [
            'label' => __( 'Text Icon Spacing', 'ventcuebe' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .ventcube-additional_info_row ul li span' => 'margin-left: {{SIZE}}{{UNIT}};'
            ],
        ]
    );

    $this->add_control(
        'additional_icon_color',
        [
            'label' => __( 'Icon Color', 'ventcuebe' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ventcube-additional_info_row ul li svg.ventcube-additional-list-icon' => 'color: {{VALUE}};',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'list_item_typography',
            'label' => __( 'List Item Typography', 'ventcuebe' ),
            'selector' => '{{WRAPPER}} .ventcube-additional_info_row ul li span',
        ]
    );
	$this->add_control(
        'additional_list_color',
        [
            'label' => __( 'List Color', 'ventcuebe' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .ventcube-additional_info_row ul li span' => 'color: {{VALUE}};',
            ],
        ]
    );

    $this->add_responsive_control(
        'list_item_margin',
        [
            'label' => __( 'List Item Margin', 'ventcuebe' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .ventcube-additional_info_row ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->add_responsive_control(
        'list_item_padding',
        [
            'label' => __( 'List Item Padding', 'ventcuebe' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .ventcube-additional_info_row ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );

    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'list_item_border',
            'label' => __( 'List Item Border', 'ventcuebe' ),
            'selector' => '{{WRAPPER}} .ventcube-additional_info_row ul li',
        ]
    );

    $this->add_control(
        'list_item_border_radius',
        [
            'label' => __( 'Border Radius', 'ventcuebe' ),
            'type' => \Elementor\Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%' ],
            'selectors' => [
                '{{WRAPPER}} .ventcube-additional_info_row ul li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );



    $this->end_controls_section();

    // ================Buttons Controling=====================//
                

         // Button Style Section
         $this->start_controls_section(
            'button_style_section',
            [
                'label' => __( 'Button Style', 'ventcuebe' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Icon Size Control

$this->add_responsive_control(
    'right_icon_size',
    [
        'label' => __( 'Icon Size Right', 'ventcuebe' ),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'default' => [
            'size' => 14,
        ],
        'range' => [
            'px' => [
                'min' => 10,
                'max' => 50,
                'step' => 1,
            ],
        ],
        'selectors' => [
            '{{WRAPPER}} .ventcube-button_right .ventcube-custom-icon-class' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
            '{{WRAPPER}} .ventcube-button_right .ventcube-elementor-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
        ],
    ]
);

   

// =============icon and text specing======================//

    $this->add_responsive_control(
        'icon_text_spacing_right',
        [
            'label' => __( 'Icon and Text Spacing Right', 'ventcuebe' ),
            'type' => \Elementor\Controls_Manager::SLIDER,
            'default' => [
                'size' => 10,
            ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .ventcube-button_right .ventcube-button-icon' => 'margin-right: {{SIZE}}{{UNIT}};',
                '{{WRAPPER}} .ventcube-button_right .ventcube-elementor-icon svg' => 'margin-right: {{SIZE}}{{UNIT}};',
            ],
        ]
    );   



// =============================Right Button Style Controls===================================//

       // Button Normal State
        $this->start_controls_tabs( 'tabs_button_style_right' );

        $this->start_controls_tab(
            'tab_button_normal_right',
            [
                'label' => __( 'Button Right Normal', 'ventcuebe' ),
            ]
        );

        $this->add_responsive_control(
            'Right_button_alignment',
            [
                'label' => __( 'Right Button Alignment', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'ventcuebe' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'ventcuebe' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'ventcuebe' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'selectors' => [
                    '{{WRAPPER}} .ventcube-row_of_btn .ventcube-button_right' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        // Button Typography
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'right_button_typography',
                'label' => __( 'Typography', 'ventcuebe' ),
                'selector' => ' {{WRAPPER}} .ventcube-button_right',
                 
            ]
        );

        // Button Text Shadow
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'right_button_text_shadow',
                'label' => __( 'Text Shadow', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .ventcube-button_right',
                 
            ]
        );

        $this->add_responsive_control(
            'right_button_text_color',
            [
                'label' => __( 'Text Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right' => 'color: {{VALUE}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        $this->add_responsive_control(
            'right_button_background_color',
            [
                'label' => __( 'Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right' => 'background-color: {{VALUE}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        // Button Border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'right_button_border',
                'selector' => '{{WRAPPER}} .ventcube-button_right',
            ]
        );

        $this->end_controls_tab();

        //=================Right Button Hover State=====================//
        $this->start_controls_tab(
            'tab_button_hover_right',
            [
                'label' => __( 'Button Right Hover', 'ventcuebe' ),
            ]
        );

        // Button Typography Hover
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'right_button_hover_typography',
                'label' => __( 'Typography (Hover)', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .ventcube-button_right:hover',
                 
            ]
        );

        // Button Text Shadow Hover
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name' => 'right_button_hover_text_shadow',
                'label' => __( 'Text Shadow (Hover)', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .ventcube-button_right:hover',
                 
            ]
        );

        $this->add_responsive_control(
            'right_button_hover_text_color',
            [
                'label' => __( 'Text Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right:hover' => 'color: {{VALUE}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        $this->add_responsive_control(
            'right_button_hover_background_color',
            [
                'label' => __( 'Background Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right:hover' => 'background-color: {{VALUE}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        $this->add_responsive_control(
            'right_button_hover_border_color',
            [
                'label' => __( 'Border Color', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right:hover' => 'border-color: {{VALUE}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        $this->add_responsive_control(
            'right_button_hover_border_type',
            [
                'label' => __( 'Border Type', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'none' => __( 'None', 'ventcuebe' ),
                    'solid' => __( 'Solid', 'ventcuebe' ),
                    'dashed' => __( 'Dashed', 'ventcuebe' ),
                    'dotted' => __( 'Dotted', 'ventcuebe' ),
                    'double' => __( 'Double', 'ventcuebe' ),
                    'groove' => __( 'Groove', 'ventcuebe' ),
                    'ridge' => __( 'Ridge', 'ventcuebe' ),
                    'inset' => __( 'Inset', 'ventcuebe' ),
                    'outset' => __( 'Outset', 'ventcuebe' ),
                ],
                'default' => 'None',
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right:hover' => 'border-style: {{VALUE}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        $this->add_responsive_control(
            'right_button_hover_border_width',
            [
                'label' => __( 'Border Width', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right:hover' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        // Button Box Shadow
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'right_button_box_shadow',
                'label' => __( 'Box Shadow', 'ventcuebe' ),
                'selector' => '{{WRAPPER}} .button_right',
                 
            ]
        );

        // Button Border Radius
        $this->add_responsive_control(
            'right_button_border_radius',
            [
                'label' => __( 'Border Radius', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        // Button Padding
        $this->add_responsive_control(
            'right_button_margin',
            [
                'label' => __( 'Margin', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );
        // Button Padding
        $this->add_responsive_control(
            'right_button_padding',
            [
                'label' => __( 'Padding', 'ventcuebe' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [
                    '{{WRAPPER}} .ventcube-button_right' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'devices' => ['desktop', 'tablet', 'mobile'], // Responsive devices
                 
            ]
        );

        $this->end_controls_section();

        

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $widget_id = $this->get_id();
        ?>
        <div id="accordion-<?php echo esc_attr($widget_id); ?>" class="ventcube-accordion">
            <?php if ( isset( $settings['accordion_items'] ) && is_array( $settings['accordion_items'] ) ) : ?>
                <?php foreach ( $settings['accordion_items'] as $index => $item ) : ?>
                    <div class="ventcube-accordion-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="ventcube-accordion-header" data-index="<?php echo $index; ?>">
                            <div class="ventcube-header-content">
                                <div class="ventcube-header-left">
                                    <span class="ventcube-number"><?php echo sprintf('%02d', $index + 1); ?></span>
                                    <span class="ventcube-client-name"><?php echo $item['client_name']; ?></span>
                                </div>
                                <div class="ventcube-header-right">
                                    <h2 class="ventcube-year"><?php echo $item['year']; ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="ventcube-accordion-body <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img class="ventcube-client-image-body" src="<?php echo esc_url($item['client_image']['url']); ?>" alt="<?php echo esc_attr($item['client_name']); ?>">
                            <div class="ventcube-main_row">
                                <div class="ventcube-column ventcube-left_column">
                                    <div class="ventcube-row client_review_area">
                                        <p class="client_review_description"><?php echo $item['review_text']; ?></p>
                                    </div>
                                    <div class="ventcube-accordionSeparator"></div>
                                    <div class="ventcube-additional_info_row">
                                        <h2><?php echo $item['additional_info_heading']; ?></h2>
                                        <ul>
                                            <?php if ( isset( $item['additional_info_items'] ) && is_array( $item['additional_info_items'] ) ) : ?>
                                                <?php foreach ( $item['additional_info_items'] as $list_item ) : ?>
                                                    <li>
                                                        <?php \Elementor\Icons_Manager::render_icon($list_item['svg_icon'], ['aria-hidden' => 'true', 'class' => 'ventcube-additional-list-icon']); ?>
                                                        <span><?php echo esc_html($list_item['list_item']); ?></span>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <li>No additional info items found.</li> <!-- Example of error handling output -->
                                            <?php endif; ?>
                                        </ul>
                                        <div class="ventcube-accordionSeparator"></div>
                                        <div class="ventcube-row_of_btn ventcube-desktop_version_ventcube">
                                            <a href="<?php echo esc_url($item['button_right_url']['url']); ?>" class="ventcube-button_right">
                                                <?php if ($item['button_right_icon_position'] === 'before') : ?>
                                                    <?php \Elementor\Icons_Manager::render_icon( 
                                                        $item['button_right_icon'], 
                                                        [ 
                                                            'aria-hidden' => 'true', 
                                                            'class' => 'ventcube-custom-icon-class' // Add your specific class here
                                                        ] 
                                                    ); ?>
                                                <?php endif; ?>
                                                <span class="ventcube-button-text"><?php echo esc_html($item['button_right_text']); ?></span>
                                                <?php if ($item['button_right_icon_position'] === 'after') : ?>
                                                    <?php \Elementor\Icons_Manager::render_icon( 
                                                        $item['button_right_icon'], 
                                                        [ 
                                                            'aria-hidden' => 'true', 
                                                            'class' => 'ventcube-custom-icon-class' // Add your specific class here
                                                        ] 
                                                    ); ?>
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ventcube-column ventcube-right_column">
                                    <div class="ventcube-clint_work_image_row">
                                        <img src="<?php echo esc_url($item['client_work_image']['url']); ?>" alt="<?php echo esc_attr($item['client_name']); ?>" class="ventcube-work_image_client">
                                    </div>
                                    <div class="ventcube-row_of_btn ventcube-mobile_version_ventcube">
                                        <a href="<?php echo esc_url($item['button_right_url']['url']); ?>" class="ventcube-button_right">
                                            <?php if ($item['button_right_icon_position'] === 'before') : ?>
                                                <?php \Elementor\Icons_Manager::render_icon( 
                                                    $item['button_right_icon'], 
                                                    [ 
                                                        'aria-hidden' => 'true', 
                                                        'class' => 'ventcube-custom-icon-class' // Add your specific class here
                                                    ] 
                                                ); ?>
                                            <?php endif; ?>
                                            <span class="ventcube-button-text"><?php echo esc_html($item['button_right_text']); ?></span>
                                            <?php if ($item['button_right_icon_position'] === 'after') : ?>
                                                <?php \Elementor\Icons_Manager::render_icon( 
                                                    $item['button_right_icon'], 
                                                    [ 
                                                        'aria-hidden' => 'true', 
                                                        'class' => 'ventcube-custom-icon-class' // Add your specific class here
                                                    ] 
                                                ); ?>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php
    }
    
    
    
    
    

    protected function content_template() {
        ?>
        <div id="accordion-{{{ view.getID() }}}" class="ventcube-accordion">
            <# if (settings.accordion_items && settings.accordion_items.length) { #>
                <# _.each(settings.accordion_items, function(item, index) { #>
                    <div class="ventcube-accordion-item {{ index === 0 ? 'active' : '' }}">
                        <div class="ventcube-accordion-header" data-index="{{ index }}">
                            <div class="ventcube-header-content">
                                <div class="ventcube-header-left">
                                    <span class="ventcube-number">{{{ ('0' + (index + 1)).slice(-2) }}}</span>
                                    <span class="ventcube-client-name">{{{ item.client_name }}}</span>
                                </div>
                                <div class="ventcube-header-right">
                                    <h2 class="ventcube-year">{{{ item.year }}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="ventcube-accordion-body {{ index === 0 ? 'active' : '' }}">
                            <img class="ventcube-client-image-body" src="{{{ item.client_image.url }}}" alt="{{{ item.client_name }}}">
                            <div class="ventcube-main_row">
                                <div class="ventcube-column ventcube-left_column">
                                    <div class="ventcube-row client_review_area">
                                        <p class="client_review_description">{{{ item.review_text }}}</p>
                                    </div>
                                    <div class="ventcube-accordionSeparator"></div>
                                    <div class="ventcube-additional_info_row">
                                        <h2>{{{ settings.additional_info_heading }}}</h2>
                                        <ul>
                                            <# if (settings.additional_info_items && settings.additional_info_items.length) { #>
                                                <# _.each(settings.additional_info_items, function(list_item) { #>
                                                    <li>
                                                        <i class="{{ list_item.svg_icon.value }}"></i>
                                                        <span>{{{ list_item.list_item }}}<span>
                                                    </li>
                                                <# }); #>
                                            <# } #>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ventcube-column ventcube-right_column">
                                    <div class="ventcube-clint_work_image_row">
                                        <img src="{{{ item.client_work_image.url }}}" alt="{{{ item.client_name }}}">
                                    </div>
                                    <div class="ventcube-row_of_btn ventcube-mobile_version_ventcube">
                                        <a href="{{{ item.button_right_url.url }}}" class="ventcube-button_right">
                                            <# if (item.button_right_icon_position === 'before') { #>
                                                <i class="{{ item.button_right_icon.value }}"></i>
                                            <# } #>
                                            <span class="ventcube-button-text">{{{ item.button_right_text }}}</span>
                                            <# if (item.button_right_icon_position === 'after') { #>
                                                <i class="{{ item.button_right_icon.value }}"></i>
                                            <# } #>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <# }); #>
            <# } #>
        </div>
        <?php
    }
}    
?>