<?php

/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_About2 extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_about2';

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
                'name'        => esc_html__('About2 Content', 'charitoki'),
                'description' => esc_html__('Charitoki About2', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(

                    array(
                        'name' => 'image',
                        'label' => esc_html__('Left Image','charitoki'),
                        'type' => 'attach_image',  // USAGE SELECT TYPE
                    ),

                    array(
                        'name' => 'mission_list1',
                        'label' => esc_html__('Mission List One','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit dolore magna aliqua.', 'charitoki'),
                    ),
                    
                    array(
                        'name' => 'mission_list2',
                        'label' => esc_html__('Mission List Two','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit dolore magna aliqua.', 'charitoki'),
                    ),

                    array(
                        'name' => 'mission_list3',
                        'label' => esc_html__('Mission List There','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit dolore magna aliqua.', 'charitoki'),
                    ),

                    array(
                        'name' => 'mission_list4',
                        'label' => esc_html__('Mission List Four','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit dolore magna aliqua.', 'charitoki'),
                    ),
                    
                    array(
                        'name' => 'btn_text',
                        'label' => esc_html__('Button Text','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Donate Now', 'charitoki'),
                    ),

                    array(
                        'name' => 'btn_url',
                        'label' => esc_html__('Button Url','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( '#', 'charitoki'),
                    ),

                    array(
                        'name' => 'right_title_one',
                        'label' => esc_html__('Right Title One','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Building a', 'charitoki'),
                    ),

                    array(
                        'name' => 'right_title_two',
                        'label' => esc_html__('Right Title Two','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'prosperous', 'charitoki'),
                    ),

                    array(
                        'name' => 'right_title_there',
                        'label' => esc_html__('Right Title There','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'rural Africa', 'charitoki'),
                    ),

                    array(
                        'name' => 'right_content',
                        'label' => esc_html__('Right Content','charitoki'),
                        'type' => 'textarea',  // USAGE SELECT TYPE
                        'value'       => esc_html__( 'Lorem ipsum dolor sit amet, consec- tetur adipisicing elit. Perferendis totam, laudantium officia praesen- tium expedita omnis unde tempora beatae, modi, sequi quis. Est quas corporis, nobis aperiam cumque minima libero rem, itaque quo vitae', 'charitoki'),
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
            'image'             => '',
            'mission_list1'     => '',
            'mission_list2'     => '',
            'mission_list3'     => '',
            'mission_list4'     => '',
            'btn_text'          => '',
            'btn_url'           => '',
            'right_title_one'   => '',
            'right_title_two'   => '',
            'right_title_there' => '',
            'right_content'     => '',
            'custom_css_class'  => '',
            'custom_css'        => '',
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

new Charitoki_About2;
