<?php

/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Wellcome extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_wellcome';

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
                'name'        => esc_html__('Wellcome Section', 'charitoki'),
                'description' => esc_html__('Charitoki Wellcome Section', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    
                    array(
                        'name' => 'box1_title',
                        'label' => esc_html__('Box1 Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Food Donate', 'charitoki'),
                    ),

                    array(
                        'name' => 'box1_content',
                        'label' => esc_html__('Box1 Content','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'charitoki'),
                    ),
                    array(
                        'name' => 'box2_title',
                        'label' => esc_html__('Box2 Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Child Education', 'charitoki'),
                    ),

                    array(
                        'name' => 'box2_content',
                        'label' => esc_html__('Box2 Content','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'charitoki'),
                    ),

                    array(
                        'name' => 'box2_image',
                        'label' => esc_html__('Box2 Bg Image','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE
                    ),

                    array(
                        'name' => 'box3_image',
                        'label' => esc_html__('Box3 Bg Image','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE
                    ),

                    array(
                        'name' => 'box3_video_url',
                        'label' => esc_html__('Box3 Video Url','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( '#', 'charitoki'),
                    ),

                    array(
                        'name' => 'title',
                        'label' => esc_html__('Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'London Marathon Week', 'charitoki'),
                    ),
                    array(
                        'name' => 'year',
                        'label' => esc_html__('Year','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( '2020', 'charitoki'),
                    ),
                    array(
                        'name' => 'address',
                        'label' => esc_html__('Address','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( ' 25 Mark Av. Adison St. New York, NY-12548', 'charitoki'),
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
            'box1_title'       => '',
            'box1_content'     => '',
            'box2_title'       => '',
            'box2_content'     => '',
            'box2_image'       => '',
            'box3_image'       => '',
            'box3_video_url'   => '',
            'title'            => '',
            'year'             => '',
            'address'          => '',
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

new Charitoki_Wellcome;
