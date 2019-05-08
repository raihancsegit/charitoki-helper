<?php

/**
 * charitoki Teams shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Teams extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_teams';

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
                'name'        => esc_html__('Teams', 'charitoki'),
                'description' => esc_html__('Charitoki Teams', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    array(
                        'type'          => 'group',
                        'label'         => esc_html__('Image Carousel', 'charitoki'),
                        'name'          => 'team',
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
                                'type' => 'text',
                                'label' => esc_html__('Name','charitoki'),
                                'name' => 'name',
                                'description' => esc_html__( 'Add Team Member name here.', 'charitoki' ),
                                'admin_label' => true,
                            ),

                            array(
                                'type' => 'text',
                                'label' => esc_html__('Designation','charitoki'),
                                'name' => 'desg',
                                'description' => esc_html__( 'Add Team Member Designation here.', 'charitoki' ),
                                'admin_label' => true,
                            )
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
            'team'             => '',
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

new Charitoki_Teams;
