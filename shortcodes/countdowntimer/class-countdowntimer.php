<?php
/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Countdowntimer_Logo extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_countdowntimer';

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
                'name'        => esc_html__('Countdown Timer', 'charitoki'),
                'description' => esc_html__('Charitoki Logo', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(
                    
                    array(
                        'name' => 'title_one',
                        'label' => esc_html__('Title One','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'Title One','charitoki'),
                        'value'       => esc_html__( 'London Marathon', 'charitoki'),
                    ),

                    array(
                        'name' => 'title_two',
                        'label' => esc_html__('Title Two','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'Title Two','charitoki'),
                        'value'       => esc_html__( 'Week', 'charitoki'),
                    ),

                    array(
                        'name' => 'title_there',
                        'label' => esc_html__('Title There','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'description' => esc_html__( 'Title There','charitoki'),
                        'value'       => esc_html__( '200', 'charitoki'),
                    ),

                    array(
                        'name' => 'sub_text',
                        'label' => esc_html__('Sub Title','charitoki'),
                        'type' => 'text',  // USAGE SELECT TYPE
                        'value' => esc_html__( '25 Mark Av. Adison St. New York, NY-12548','charitoki'),
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
            'title_one'        => '',
            'title_two'        => '',
            'title_there'      => '',
            'sub_text'         => '',
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

new Countdowntimer_Logo;
