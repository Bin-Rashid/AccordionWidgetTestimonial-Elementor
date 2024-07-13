<?php
/**
 * Plugin Name: Ventcube Accordion Rlient Review
 * Description: A custom Elementor widget for displaying accordion-style client testimonials.
 * Version: 1.0.1
 * Author: VentCube
 * Text Domain: ventcuebe
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

final class VentCube_Accordion_Client_Review {

    /**
     * Instance of this class.
     *
     * @var VentCube_Accordion_Client_Review
     */
    private static $instance = null;

    /**
     * Main instance.
     *
     * @return VentCube_Accordion_Client_Review
     */
    public static function instance() {
        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
            self::$instance->init_hooks();
        }
        return self::$instance;
    }

    /**
     * Set up hooks for the plugin.
     */
    private function init_hooks() {
        add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widget' ] );
        add_action( 'elementor/init', [ $this, 'load_textdomain' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_assets' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'custom_enqueue_fonts' ] );
    }

    /**
     * Register widget.
     */
    public function register_widget() {
        // Check if Elementor is active and the class exists
        if ( \Elementor\Plugin::instance()->widgets_manager ) {
            require_once( plugin_dir_path( __FILE__ ) . 'includes/class-ventcube-accordion-client-review.php' );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \VentCube_Accordion_Client_Review_Widget() );
        }
    }

    /**
     * Load text domain for translations.
     */
    public function load_textdomain() {
        load_plugin_textdomain( 'ventcuebe', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    }

    /**
     * Enqueue styles and scripts.
     */
    public function enqueue_assets() {
        wp_enqueue_style( 'ventcube-accordion-client-review-style', plugins_url( 'assets/css/style.css', __FILE__ ) );
        wp_enqueue_style( 'ventcube-accordion-client-review-responsive', plugins_url( 'assets/css/responsive.css', __FILE__ ), [ 'ventcube-accordion-client-review-style' ], false, 'all' );
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'ventcube-accordion-client-review-script', plugins_url( 'assets/js/app.js', __FILE__ ), [ 'jquery' ], false, true );
    }

    /**
     * Enqueue custom Google Fonts.
     */
    public function custom_enqueue_fonts() {
        wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Nohemi&display=swap', false, null, 'all' );
    }
}

// Instantiate the plugin class
VentCube_Accordion_Client_Review::instance();