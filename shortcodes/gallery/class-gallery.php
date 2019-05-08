<?php

/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Gallery extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_gallery';

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
                'name'        => esc_html__('Gallery', 'charitoki'),
                'description' => esc_html__('Charitoki Gallery', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    
                    array(
                        'name' => 'left_image_one',
                        'label' => esc_html__('Left Image One','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE 'charitoki'),
                    ),

                    array(
                        'name' => 'left_image_one_title',
                        'label' => esc_html__('Left Image One Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Charity Now', 'charitoki'),
                    ),
                    array(
                        'name' => 'left_image_two',
                        'label' => esc_html__('Left Image Two','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE 'charitoki'),
                    ),

                    array(
                        'name' => 'left_image_two_title',
                        'label' => esc_html__('Left Image Two Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Charity Now', 'charitoki'),
                    ),
                    array(
                        'name' => 'right_image_one',
                        'label' => esc_html__('Right Image One','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE 'charitoki'),
                    ),

                    array(
                        'name' => 'right_image_title_one',
                        'label' => esc_html__('Right Image Title One','charitoki'),
                        'type' => 'text',  
                        'value'       => esc_html__( 'Charity Now', 'charitoki'),
                    ),
                    array(
                        'name' => 'right_image_two',
                        'label' => esc_html__('Right Image Two','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE 'charitoki'),
                    ),

                    array(
                        'name' => 'right_image_title_two',
                        'label' => esc_html__('Right Image Title Two','charitoki'),
                        'type' => 'text',  
                        'value'       => esc_html__( 'Charity Now', 'charitoki'),
                    ),
                    array(
                        'name' => 'right_image_there',
                        'label' => esc_html__('Right Image There','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE 'charitoki'),
                    ),

                    array(
                        'name' => 'right_image_title_there',
                        'label' => esc_html__('Right Image Title There','charitoki'),
                        'type' => 'text',  
                        'value'       => esc_html__( 'Charity Now', 'charitoki'),
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
            'left_image_one'                  => '',
            'left_image_one_title'            => '',
            'left_image_two'                  => '',
            'left_image_two_title'            => '',
            'right_image_one'                 => '',
            'right_image_title_one'           => '',
            'right_image_title_two'           => '',
            'right_image_two'                 => '',
            'right_image_there'               => '',
            'right_image_title_there'         => '',
            'custom_css_class'                => '',
            'custom_css'                      => '',
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

new Charitoki_Gallery;
