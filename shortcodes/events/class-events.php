<?php

/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Events extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_events';

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
                'name'        => esc_html__('Events', 'charitoki'),
                'description' => esc_html__('Events', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(

                    array(
                        'name' => 'type',
                        'label' => esc_html__('Style','charitoki'),
                        'type' => 'select',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'Select a featured box style from dropdown.', 'charitoki' ),
                        'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
                            'one' => esc_html__('Style 1','charitoki'),
                            'two' => esc_html__('Style 2','charitoki')
                            ),
                    ),
                    
                    array(
                        'name' => 'max_itemss',
                        'label' => esc_html__('Items Show','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'No. of event items want to display ', 'charitoki' ),
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
            'type'             => 'one',
            'max_itemss'       => '',
            'custom_css_class' => '',
            'custom_css'       => '',
        );

        extract($defaults);
        $wrap_class = apply_filters( 'kc-el-class', $atts );
        if( !empty( $custom_css_class ) ): 
        $wrap_class[] = $custom_css_class;
        endif;
        $extra_class = implode( ' ', $wrap_class );
        $type        = charitoki_sanitize_param( $atts['type'] );
        $types       = array('one', 'two');
        $view        = $this->get_view( $type );
        if ( file_exists( $view ) ) {
            include( $view );
        }
        return ob_get_clean();

    }

}

new Charitoki_Events;
