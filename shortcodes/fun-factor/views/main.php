<!-- Funfact Section Start -->
<section class="funfact-sec parallax-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="funfact-info">
                        <p class="sub-title"><?php echo esc_html($atts['sub_title']);?></p>
                        <h2 class="title"><?php echo esc_html($atts['title']);?></h2>
                        <a class="btn-thm" href="<?php echo esc_url($atts['btn_url']);?>"><?php echo esc_html($atts['btn_text']);?></a>
                        <?php 
                        $info_image = wp_get_attachment_image_src( $atts['info_image'], 'full' );
                        $fun_image1 = wp_get_attachment_image_src( $atts['fun_image1'], 'full' );
                        $fun_image2 = wp_get_attachment_image_src( $atts['fun_image2'], 'full' );
                        $fun_image3 = wp_get_attachment_image_src( $atts['fun_image3'], 'full' );
                        $fun_image4 = wp_get_attachment_image_src( $atts['fun_image4'], 'full' );
                        ?>
                        <img src="<?php echo esc_url($info_image[0]);?>" alt="image">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <h2 class="sec-title"><?php echo esc_html($atts['sec_title']);?></h2>
                    <p class="sec-text"><?php echo esc_html($atts['sec_con']);?></p>
                    <div class="funfact-items">
                        <div class="funfact-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($fun_image1[0]);?>" alt="icon">
                            </div>
                            <span class="timer" data-from="10" data-to="<?php echo esc_attr($atts['fun_number1']);?>" data-speed="5000" data-refresh-interval="50"><?php echo esc_html($atts['fun_number1']);?></span>
                            <h4 class="title"><?php echo esc_html($atts['fun_title1']);?></h4>
                        </div>
                        <div class="funfact-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($fun_image2[0]);?>" alt="icon">
                            </div>
                            <span class="timer" data-from="10" data-to="<?php echo esc_attr($atts['fun_number2']);?>" data-speed="5000" data-refresh-interval="50"><?php echo esc_html($atts['fun_number2']);?></span>
                            <h4 class="title"><?php echo esc_html($atts['fun_title2']);?></h4>
                        </div>
                        <div class="funfact-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($fun_image3[0]);?>" alt="icon">
                            </div>
                            <span class="timer" data-from="10" data-to="<?php echo esc_attr($atts['fun_number3']);?>" data-speed="5000" data-refresh-interval="50"><?php echo esc_html($atts['fun_number3']);?></span>
                            <h4 class="title"><?php echo esc_html($atts['fun_title3']);?></h4>
                        </div>
                        <div class="funfact-item">
                            <div class="icon-box">
                                <img src="<?php echo esc_url($fun_image4[0]);?>" alt="icon">
                            </div>
                            <span class="timer" data-from="10" data-to="<?php echo esc_attr($atts['fun_number4']);?>" data-speed="5000" data-refresh-interval="50"><?php echo esc_html($atts['fun_number4']);?></span>
                            <h4 class="title"><?php echo esc_html($atts['fun_title4']);?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Funfact Section End -->