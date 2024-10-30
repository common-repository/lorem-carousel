<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://owlpixel.com
 * @since      1.0.1
 *
 * @package    Lorem_Carousel
 * @subpackage Lorem_Carousel/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Lorem_Carousel
 * @subpackage Lorem_Carousel/admin
 * @author     Anowar Hossen <anrctg@gmail.com>
 */
class Lorem_Carousel_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Lorem_Carousel_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lorem_Carousel_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/lorem-carousel-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Lorem_Carousel_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lorem_Carousel_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/lorem-carousel-admin.js', array( 'jquery' ), $this->version, false );

	}

    /**
     * Generate custom post for lorem carousel
     */
    public function lorem_carousel_post_type()
    {

            $labels = array(
                'name'                  => _x( 'Lorem Carousel', 'Post Type General Name', 'lorem-slider' ),
                'singular_name'         => _x( 'Lorem Carousel', 'Post Type Singular Name', 'lorem-slider' ),
                'menu_name'             => __( 'Lorem Carousel', 'lorem-slider' ),
                'name_admin_bar'        => __( 'Lorem Carousel', 'lorem-slider' ),
                'archives'              => __( 'Carousel Archives', 'lorem-slider' ),
                'attributes'            => __( 'Carousel Attributes', 'lorem-slider' ),
                'parent_item_colon'     => __( 'Parent Carousel:', 'lorem-slider' ),
                'all_items'             => __( 'All Carousels', 'lorem-slider' ),
                'add_new_item'          => __( 'Add New Carousel', 'lorem-slider' ),
                'add_new'               => __( 'Add New Carousel', 'lorem-slider' ),
                'new_item'              => __( 'New Carousel', 'lorem-slider' ),
                'edit_item'             => __( 'Edit Carousel', 'lorem-slider' ),
                'update_item'           => __( 'Update Carousel', 'lorem-slider' ),
                'view_item'             => __( 'View Carousel', 'lorem-slider' ),
                'view_items'            => __( 'View Carousels', 'lorem-slider' ),
                'search_items'          => __( 'Search Carousel', 'lorem-slider' ),
                'not_found'             => __( 'Not found', 'lorem-slider' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'lorem-slider' ),
                'featured_image'        => __( 'Featured Image', 'lorem-slider' ),
                'set_featured_image'    => __( 'Set featured image', 'lorem-slider' ),
                'remove_featured_image' => __( 'Remove featured image', 'lorem-slider' ),
                'use_featured_image'    => __( 'Use as featured image', 'lorem-slider' ),
                'insert_into_item'      => __( 'Insert into Carousel', 'lorem-slider' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'lorem-slider' ),
                'items_list'            => __( 'Items list', 'lorem-slider' ),
                'items_list_navigation' => __( 'Items list navigation', 'lorem-slider' ),
                'filter_items_list'     => __( 'Filter items list', 'lorem-slider' ),
            );
            $args = array(
                'label'                 => __( 'Lorem Carousel', 'lorem-slider' ),
                'description'           => __( 'Lorem carousel post', 'lorem-slider' ),
                'labels'                => $labels,
                'supports'              => array( 'title' ),
                'hierarchical'          => false,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 5,
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => true,
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'capability_type'       => 'page',
            );
            register_post_type( 'lorem_carousel', $args );

    }





}
