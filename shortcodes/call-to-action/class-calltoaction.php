<?php

/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Call extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_call';

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
                'name'        => esc_html__('Call To Action', 'charitoki'),
                'description' => esc_html__('Charitoki Call To Action', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    
                    array(
                        'name'  => 'pre_title',
                        'label' => esc_html__('Pre Title','charitoki'),
                        'type'  => 'text',                                           
                        'value' => esc_html__( 'Want to join with us?', 'charitoki'),
                    ),

                    array(
                        'name'  => 'title',
                        'label' => esc_html__('Become a Proud Volunteer','charitoki'),
                        'type'  => 'text',
                        'value' => esc_html__( 'Building aprosper- ousrural Africa', 'charitoki'),
                    ),

                    array(
                        'name' => 'call_content',
                        'label' => esc_html__('Content','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis totam, laudantium officia praesentium expedita omnis unde tempora beatae, modi, sequi quis. Est quas corporis, nobis aperiam cumque minima libero rem, itaque quo vitae odit?', 'charitoki'),
                    ),

                    array(
                        'name' => 'btn_text',
                        'label' => esc_html__('Button Text','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Join Now', 'charitoki'),
                    ),

                    array(
                        'name' => 'btn_url',
                        'label' => esc_html__('Button Url','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( '#', 'charitoki'),
                    ),

                    array(
                        'name' => 'bg_image',
                        'label' => esc_html__('Background Image','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'Add Image One','charitoki'),
                    ),
                    array(
                        'name' => 'image',
                        'label' => esc_html__('Front Image','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'Add Front Image','charitoki'),
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
            'pre_title'        => '',
            'title'            => '',
            'call_content'     => '',
            'btn_text'         => '',
            'btn_url'          => '',
            'bg_image'         => '',
            'image'            => '',
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

new Charitoki_Call;
