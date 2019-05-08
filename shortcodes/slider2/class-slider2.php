<?php

/**
 * charitoki Logo shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_slider2 extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_slider2';

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
                'name'        => esc_html__('Slider 2', 'charitoki'),
                'description' => esc_html__('Charitoki Slider 2', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    array(
                        'type'          => 'group',
                        'label'         => esc_html__('Logo', 'charitoki'),
                        'name'          => 'slider2',
                        'description'   => '',
                        'options'       => array('add_text' => __('Add new Image', 'charitoki')),
                        // you can use all param type to register child params
                        'params' => array(
                            array(
                                'type' => 'attach_image',
                                'label' => esc_html__('Image','charitoki'),
                                'name' => 'image',
                                'description' => esc_html__( 'Upload image.', 'charitoki' ),
                                'admin_label' => true,
                            ),
                            array(
                                'name' => 'title',
                                'label' => esc_html__('Title','charitoki'),
                                'type' => 'text',  // USAGE SELECT TYPE
                                'value'       => esc_html__( 'Give is a contribution & how to make a', 'charitoki'),
                            ),
                            array(
                                'name' => 'title_con',
                                'label' => esc_html__('Title Color Content','charitoki'),
                                'type' => 'text',  // USAGE SELECT TYPE
                                'value'       => esc_html__( 'difference', 'charitoki'),
                            ),
                            array(
                                'name' => 'btn_one_text',
                                'label' => esc_html__('Button One Text','charitoki'),
                                'type' => 'text',  // USAGE SELECT TYPE
                                'value'       => esc_html__( 'Join us', 'charitoki'),
                            ),
                            array(
                                'name' => 'btn_one_link',
                                'label' => esc_html__('Button One Link','charitoki'),
                                'type' => 'text',  // USAGE SELECT TYPE
                                'value'       => esc_html__( '#', 'charitoki'),
                            ),
                            array(
                                'name' => 'btn_two_text',
                                'label' => esc_html__('Button Two Text','charitoki'),
                                'type' => 'text',  // USAGE SELECT TYPE
                                'value'       => esc_html__( 'Donate Now', 'charitoki'),
                            ),
                            array(
                                'name' => 'btn_two_link',
                                'label' => esc_html__('Button Two Link','charitoki'),
                                'type' => 'text',  // USAGE SELECT TYPE
                                'value'       => esc_html__( '#', 'charitoki'),
                            ),
                           
                        )
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
            'slider2'               => '',
            'image'                 => '',
            'title'                 => '',
            'title_con'             => '',
            'btn_one_text'          => '',
            'btn_one_link'          => '',
            'btn_two_text'          => '',
            'btn_two_link'          => '',
            'custom_css_class'      => '',
            'custom_css'            => '',
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

new Charitoki_slider2;
