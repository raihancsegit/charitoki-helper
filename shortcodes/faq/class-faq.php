<?php

/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Faq extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_faq';

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
                'name'        => esc_html__('Faq', 'charitoki'),
                'description' => esc_html__('Charitoki Faq', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    
                    array(
                        'name' => 'faq_title',
                        'label' => esc_html__('Faq Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Want to join with us?', 'charitoki'),
                    ),

                    array(
                        'name' => 'faq_content',
                        'label' => esc_html__('Faq Content','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis totam, laudantium officia praesentium expedita omnis unde tempora beatae, modi, sequi quis. Est quas corporis, nobis aperiam cumque minima libero rem, itaque quo vitae odit?', 'charitoki'),
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
            'faq_title'        => '',
            'faq_content'      => '',
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

new Charitoki_Faq;
