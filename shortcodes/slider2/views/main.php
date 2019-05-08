    <!-- Home Section Start -->
    <section class="home-banner slider home-slider2 hm-sld2">
        <div class="all-slide">

        <?php 
            if ( !empty( $slider2 ) ) {
             foreach ( $slider2 as $item ) { 
                $images = wp_get_attachment_image_src( $item->image, 'full' )
             ?>
            <div class="single-slide owl-item" style="background-image:url(<?php echo esc_url($images[0])?>);">
                <div class="slider-overlay"></div>
                <div class="slider-wrapper">
                    <div class="container slider-text">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="">
                                    <div class="slider-caption">
                                        <h1><?php echo esc_html($item->title);?> <span><?php echo esc_html($item->title_con);?></span></h1>  
                                    </div>  
                                    <ul>
                                        <li><a href="<?php echo esc_url($item->btn_one_link);?>"><?php echo esc_html($item->btn_one_text);?></a></li>
                                        <li><a href="<?php echo esc_url($item->btn_one_link);?>"><?php echo esc_html($item->btn_two_text);?></a></li>                 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            <?php
                } }
             ?>
                 
        </div>
    </section>
    <!-- Home Section End -->