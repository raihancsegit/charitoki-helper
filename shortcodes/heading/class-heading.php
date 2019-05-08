<?php
/**
 * charitoki Heading shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Heading extends Charitoki_Shortcode {

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_heading';

    /**
     * Set shortcode directory
     * @return string Directory path
     */
    protected function set_dir() {
        return __DIR__;
    }

    /**
     * Map this shortcode with visual composer
     * @return array
     */
    protected function map() {
        return array(
		        $this->tag => array( // <-- shortcode tag name

                    'name'                 => esc_html__('Heading', 'charitoki'),
                    'description'          => esc_html__('charitoki Heading', 'charitoki'),
                    'icon'                 => 'fa-comments-o',
                    'category'             => 'charitoki',
                    'params'               => array(
                    'general'          => array(


                            array(
                                'name'        => 'type',
                                'label'       => esc_html__('Style','charitoki'),
                                'type'        => 'select',
                                'description' => esc_html__( 'Select a heading box style from dropdown.', 'charitoki' ),
                                'options'     => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
                                    'one' => esc_html__('Style 1','charitoki'),
                                    'two' => esc_html__('Style 2','charitoki')
                                    ),
                            ),

                            array(
                                'name'        => 'pre_title',
                                'label'       => esc_html__('Pre Title','charitoki'),
                                'type'        => 'text',
                                'value'       => esc_html__( 'Our team', 'charitoki'),
                                'relation'    => array(
                                    'parent'    => 'type',
                                    'show_when' => 'two'
                                   ),
    
                                ),

                            array(
                                'name'        => 'title_one',
                                'label'       => esc_html__('Title One','charitoki'),
                                'type'        => 'text',
                                'value'       => esc_html__( 'We have found a log to', 'charitoki'),
                                'relation'    => array(
                                    'parent'    => 'type',
                                    'show_when' => array('one','two')
                                   ),

                            ),

                            array(
                                'name'        => 'title_two',
                                'label'       => esc_html__('Title Two','charitoki'),
                                'type'        => 'text',
                                'value'       => esc_html__( 'charity projects', 'charitoki'),
                                'relation'    => array(
                                    'parent'    => 'type',
                                    'show_when' => array('one','two')
                                   ),

                            ),


                            array(
                                'name'        => 'heading_content',
                                'label'       => esc_html__('Content','charitoki'),
                                'type'        => 'textarea',
                                'value'       => esc_html__( 'Vivamus nisi dolor, dictum non eros vitae, efficitur elementum mi. Pellentesque consectetur condimentum libero, interdum aliquet enim sollicitudin ut. Donec dapibus tempor odio eu aliquet. Vivamus ultricies augue ut ligula convallis, eu tincidunt est lacinia. Quisque sed sapien vitae nulla lacinia condimentum at sed sapien.', 'charitoki'),
                                'relation'    => array(
                                    'parent'    => 'type',
                                    'show_when' => 'two'
                                   ),
    
                                ),

                           

                            array(
                                'name'        => 'custom_css_class',
                                'label'       => esc_html__('CSS Class','charitoki'),
                                'description' => esc_html__('Custom css class for css customisation','charitoki'),
                                'type'        => 'text'
                                        ),
                            ),// general


                    )// Params

                )// end shortcode key
		    );// first array
    }

    /**
     * render this shortcode
     * @param  array $atts
     * @param  string $content
     * @return string
     */
    public function render( $atts, $content = null ) {

        ob_start();
        $charitoki_shor = shortcode_atts( [
            'type'             => 'one',
            'title_one'        => '',
            'title_two'        => '',
            'heading_content'  => '',
            'pre_title'        => '',
            'custom_css_class' => '',
            'custom_css'       => '',

        ], $atts );

        extract($charitoki_shor);
        //custom class
        $wrap_class  = apply_filters( 'kc-el-class', $atts );
        if( !empty( $custom_css_class ) ):
        $wrap_class[] = $custom_css_class;
        endif;
        $extra_class =  implode( ' ', $wrap_class );
        $type        = charitoki_sanitize_param( $atts['type'] );
        $types       = array('one', 'two');
        $view = $this->get_view( $type );
        if ( file_exists( $view ) ) {
            include( $view );
        }
        return ob_get_clean();

    }

}

new Charitoki_Heading;
