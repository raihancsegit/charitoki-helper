<?php

/**
 * Blurb shortcode
 *
 * @package blurb_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Contact extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_contact';

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
                'name'        => esc_html__('Contact info', 'charitoki'),
                'description' => esc_html__('Charitoki Project', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    
                    array(
                        'name'  => 'image',
                        'label' => esc_html__('Image','charitoki'),
                        'type'  => 'attach_image',
                    ),

                    array(
                        'name'  => 'title',
                        'label' => esc_html__('Title','charitoki'),
                        'type'  => 'text',
                        'value' => esc_html__( 'Meet Us', 'charitoki'),
                    ),
                    array(
                        'name'  => 'line_one',
                        'label' => esc_html__('Line 1','charitoki'),
                        'type'  => 'text',
                        'value' => esc_html__( 'Charitoki Downtown St,', 'charitoki'),
                    ),
                    array(
                        'name'  => 'line_two',
                        'label' => esc_html__('Line 2','charitoki'),
                        'type'  => 'text',
                        'value' => esc_html__( 'Melbourne Australia,', 'charitoki'),
                    ),

                    
                ),

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
            'image'            => '',
            'title'            => '',
            'line_one'         => '',
            'line_two'         => '',
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

new Charitoki_Contact;
