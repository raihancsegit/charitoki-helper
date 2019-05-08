    <!-- About Section Start -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="mission-area">
                    <?php 
                     $image = wp_get_attachment_image_src( $atts['image'], 'full' );
                     ?>
                        <img src="<?php echo esc_url($image[0]);?>" alt="">
                        <div class="mission-box">
                            <h4 class="title">Our Mission :</h4>
                            <ul class="list">
                                <li><?php echo esc_html($atts['mission_list1']);?></li>
                                <li><?php echo esc_html($atts['mission_list2']);?></li>
                                <li><?php echo esc_html($atts['mission_list3']);?></li>
                                <li><?php echo esc_html($atts['mission_list4']);?></li>
                            </ul>
                            <a class="btn-thm" href="<?php echo esc_url($atts['btn_url']);?>"><?php echo esc_html($atts['btn_text']);?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1 class="sec-title">About</h1>
                    <div class="about-content">
                        <h1 class="title"><?php echo esc_html($atts['right_title_one']);?><span><?php echo esc_html($atts['right_title_two']);?></span> <?php echo esc_html($atts['right_title_there']);?></h1>
                        <p><?php echo esc_html($atts['right_content']);?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->