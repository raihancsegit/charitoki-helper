<?php

/**
 * charitoki countdowntimer shortcode
 *
 * @package charitoki_Helper
 * @author Smart Coder <smartcoderbd@gmail.com>
 */

class Charitoki_Fun extends Charitoki_Shortcode
{

    /**
     * Set shortcode tag
     * @var string
     */
    protected $tag = 'charitoki_fun';

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
                'name'        => esc_html__('Funfact Section', 'charitoki'),
                'description' => esc_html__('Charitoki Funfact', 'charitoki'),
                'icon'        => 'fa-comments-o',
                'category'    => 'Charitoki',
                'params'      => array(

                    array(
                        'name'  => 'image',
                        'label' => esc_html__('bg Image','charitoki'),
                        'type'  => 'attach_image',                        
                    ),

                    array(
                        'name'  => 'sub_title',
                        'label' => esc_html__('Sub title','charitoki'),
                        'type'  => 'text',                                       
                        'value' => esc_html__( 'With your help', 'charitoki'),
                    ),

                    array(
                        'name'  => 'title',
                        'label' => esc_html__('Title','charitoki'),
                        'type'  => 'text',                                          
                        'value' => esc_html__( 'We’ve funded 29,725 water projects for 8.4 million people around the world.', 'charitoki'),
                    ),

                    array(
                        'name'  => 'btn_text',
                        'label' => esc_html__('Button Text','charitoki'),
                        'type'  => 'text',                                       
                        'value' => esc_html__( 'See more of our impact', 'charitoki'),
                    ),
                    array(
                        'name'  => 'btn_url',
                        'label' => esc_html__('Button Url','charitoki'),
                        'type'  => 'text',                                
                        'value' => esc_html__( '#', 'charitoki'),
                    ),

                    array(
                        'name'  => 'info_image',
                        'label' => esc_html__('info Image','charitoki'),
                        'type'  => 'attach_image',                        
                    ),

                    array(
                        'name'  => 'sec_title',
                        'label' => esc_html__('Section Title','charitoki'),
                        'type'  => 'text',                                             
                        'value' => esc_html__( 'Charitab Overview', 'charitoki'),
                    ),

                    array(
                        'name'  => 'sec_con',
                        'label' => esc_html__('Section Content','charitoki'),
                        'type'  => 'text',                                             
                        'value' => esc_html__( 'erspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.', 'charitoki'),
                    ),

                    array(
                        'name'  => 'fun_image1',
                        'label' => esc_html__('Funfact Image1','charitoki'),
                        'type'  => 'attach_image',        
                    ),
                    array(
                        'name'  => 'fun_title1',
                        'label' => esc_html__('Funfact Title1','charitoki'),
                        'type'  => 'text', 
                        'value' => esc_html__( 'Happy Doners', 'charitoki'),       
                    ),
                    array(
                        'name'  => 'fun_number1',
                        'label' => esc_html__('Funfact Number1','charitoki'),
                        'type'  => 'text', 
                        'value' => esc_html__( '120', 'charitoki'),       
                    ),

                    array(
                        'name'  => 'fun_image2',
                        'label' => esc_html__('Funfact Image2','charitoki'),
                        'type'  => 'attach_image',        
                    ),
                    array(
                        'name'  => 'fun_title2',
                        'label' => esc_html__('Funfact Title2','charitoki'),
                        'type'  => 'text',   
                        'value' => esc_html__( 'Happy Doners', 'charitoki'),   
                    ),
                    array(
                        'name'  => 'fun_number2',
                        'label' => esc_html__('Funfact Number2','charitoki'),
                        'type'  => 'text',
                        'value' => esc_html__( '200', 'charitoki'),        
                    ),

                    array(
                        'name'  => 'fun_image3',
                        'label' => esc_html__('Funfact Image3','charitoki'),
                        'type'  => 'attach_image',        
                    ),
                    array(
                        'name'  => 'fun_title3',
                        'label' => esc_html__('Funfact Title3','charitoki'),
                        'type'  => 'text',
                        'value' => esc_html__( 'Happy Doners', 'charitoki'),      
                    ),
                    array(
                        'name'  => 'fun_number3',
                        'label' => esc_html__('Funfact Number3','charitoki'),
                        'type'  => 'text',  
                        'value' => esc_html__( '300', 'charitoki'),      
                    ),

                    array(
                        'name'  => 'fun_image4',
                        'label' => esc_html__('Funfact Image4','charitoki'),
                        'type'  => 'attach_image',        
                    ),
                    array(
                        'name'  => 'fun_title4',
                        'label' => esc_html__('Funfact Title4','charitoki'),
                        'type'  => 'text',
                        'value' => esc_html__( 'Happy Doners', 'charitoki'),      
                    ),
                    array(
                        'name'  => 'fun_number4',
                        'label' => esc_html__('Funfact Number4','charitoki'),
                        'type'  => 'text', 
                        'value' => esc_html__( '120', 'charitoki'),       
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
            'image'            => '',
            'sub_title'        => '',
            'title'            => '',
            'btn_text'         => '',
            'btn_url'          => '',
            'info_image'       => '',
            'sec_title'        => '',
            'sec_con'          => '',
            'fun_image1'       => '',
            'fun_image2'       => '',
            'fun_image3'       => '',
            'fun_image4'       => '',
            'fun_title1'       => '',
            'fun_title2'       => '',
            'fun_title3'       => '',
            'fun_title4'       => '',
            'fun_number1'      => '',
            'fun_number2'      => '',
            'fun_number3'      => '',
            'fun_number4'      => '',
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

new Charitoki_Fun;
