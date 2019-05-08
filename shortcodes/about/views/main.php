<section class="welcome-ac">
        <!-- About Start -->
        <div class="about-wlc">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="about-info">
                            <h1 class="title"><?php echo esc_html($atts['left_title']);?></h1>
                            <p class="pra"><?php echo esc_html($atts['left_content']);?></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="about-thumb">
                            <h1 class="sec-title"><?php echo esc_html($atts['title']);?></h1>
                            <div class="thumb">
                                <?php echo wp_get_attachment_image( $atts['image_one'], 'full',"", array( "class" => "img-pos1" )); ?>
                                <?php echo wp_get_attachment_image( $atts['image_two'], 'full',"", array( "class" => "img-pos2" )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>