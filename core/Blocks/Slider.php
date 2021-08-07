<?php
/**
 * @package  MRKWP_Slider
 */
namespace MRKWP_Slider\Blocks;

use MRKWP_Slider\Base\BaseController;

/**
 * Handle the tech drawings toolset.
 */

 class slider extends BaseController{

	/**
	 * Register function is called by default to get the class running
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'acf/init' , [ $this, 'init_slider_block' ], 9);
		add_action( 'acf/init' , [ $this, 'init_acf_slider_fields' ], 10);
	}

	/**
	 * Initialise the Tech Drawing Category Block
	 * 
	 * @return void
	 */
	public function init_slider_block() {

		if( function_exists('acf_register_block_type') ) {

			// register the gallery block
			acf_register_block_type(array(
				'name'              => 'mrkwpslider',
				'title'             => __('Slider'),
				'description'       => __('Slider or call it carousel.'),
				'render_template'   => $this->plugin_path .'template-parts/blocks/carousel/carousel.php',
				'category'          => 'formatting',
				'icon'              => 'media-code',
				'keywords'          => array( 'carousel', 'mrk' ),
				'enqueue_assets'  => function() {
					wp_enqueue_style( 'splide-min', $this->plugin_url . 'template-parts/blocks/carousel/css/splide-core.min.css' );
					wp_enqueue_style( 'mrkwp-carousel', $this->plugin_url . 'template-parts/blocks/carousel/css/carousel.css' );

					wp_enqueue_script( 'splide-js', $this->plugin_url. 'template-parts/blocks/carousel/js/splide.min.js', [], '2.4.20', true );
					wp_enqueue_script( 'splide-js-settings', $this->plugin_url. 'template-parts/blocks/carousel/js/slider-settings.js', array('splide-js'), '1.0.0', true );
				},
			));

		}

	}

	/**
	 * Initialise Carousel Block fields.
	 *
	 * @return void
	 */
	public function init_acf_slider_fields()  {

		if( function_exists('acf_add_local_field_group') ):

			acf_add_local_field_group(array(
				'key' => 'group_60e6c2835d829',
				'title' => 'Slider',
				'fields' => array(
					array(
						'key' => 'field_60e6c2b01691e',
						'label' => 'Carousel Icons',
						'name' => 'carousel_icons',
						'type' => 'repeater',
						'instructions' => 'Add your images and links here.',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => '',
						'min' => 1,
						'max' => 0,
						'layout' => 'block',
						'button_label' => '',
						'sub_fields' => array(
							array(
								'key' => 'field_60e6c2f11691f',
								'label' => 'Image',
								'name' => 'image',
								'type' => 'image',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'return_format' => 'array',
								'preview_size' => 'medium',
								'library' => 'all',
								'min_width' => '',
								'min_height' => '',
								'min_size' => '',
								'max_width' => '',
								'max_height' => '',
								'max_size' => '',
								'mime_types' => '',
							),
							array(
								'key' => 'field_60e6c32216920',
								'label' => 'Link',
								'name' => 'link',
								'type' => 'page_link',
								'instructions' => '',
								'required' => 1,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => 'Add link',
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/mrkwpcarousel',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => array(
					0 => 'permalink',
					1 => 'excerpt',
					2 => 'discussion',
					3 => 'comments',
					4 => 'revisions',
					5 => 'slug',
					6 => 'author',
					7 => 'format',
					8 => 'page_attributes',
					9 => 'featured_image',
					10 => 'categories',
					11 => 'tags',
					12 => 'send-trackbacks',
				),
				'active' => true,
				'description' => '',
			));
			
		endif;
	}

 }