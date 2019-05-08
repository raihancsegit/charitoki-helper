<?php

/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_About extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_about';

    /**
     * Set shortcode directory
     * @return string Directory path
     */
    protected function set_dir()
    {
        return __DIR__;
    }

    /**
     * Map this shortcode with visual composer
     * @return array
     */
    protected function map()
    {
        return array(
            $this->tag => array( // <-- shortcode tag name
                'name'        => esc_html__('About Content', 'charitoki'),
                'description' => esc_html__('Charitoki About', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    
                    array(
                        'name' => 'left_title',
                        'label' => esc_html__('Left Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Building aprosper- ousrural Africa', 'charitoki'),
                    ),

                    array(
                        'name' => 'left_content',
                        'label' => esc_html__('Left Content','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis totam, laudantium officia praesentium expedita omnis unde tempora beatae, modi, sequi quis. Est quas corporis, nobis aperiam cumque minima libero rem, itaque quo vitae odit?', 'charitoki'),
                    ),

                    array(
                        'name' => 'title',
                        'label' => esc_html__('Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'About', 'charitoki'),
                    ),

                    array(
                        'name' => 'image_one',
                        'label' => esc_html__('Image One','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'Add Image One','charitoki'),
                    ),

                    array(
                        'name' => 'image_two',
                        'label' => esc_html__('Image Two','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'Add Image Two','charitoki'),
                    ),
  

                ), // Params

            ), // end shortcode key
        ); // first array
    }

    /**
     * render this shortcode
     * @param  array $atts
     * @param  string $content
     * @return string
     */
    public function render($atts, $content = null)
    {

        $defaults = array(
            'left_title'       => '',
            'title'            => '',
            'left_content'     => '',
            'image_one'        => '',
            'image_two'        => '',
            'custom_css_class' => '',
            'custom_css'       => '',
        );

        extract($defaults);
        //custom class
        $atts        = shortcode_atts( $defaults, $atts );
        $view = $this->get_view( 'main' );
        extract($atts);
        //custom class
        $wrap_class  = apply_filters( 'kc-el-class', $atts );
        if( !empty( $custom_css_class ) ):
            $wrap_class[] = $custom_css_class;
        endif;
        $extra_class =  implode( ' ', $wrap_class );

        ob_start();
        if (file_exists( $view ) ) {
            include( $view );
        }
        return ob_get_clean();

    }

}

new Charitoki_About;
