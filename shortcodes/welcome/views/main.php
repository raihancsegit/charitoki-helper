    <!-- Welcome Section Start -->
    <section class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wbox-one">
                        <i class="ficon flaticon-groceries"></i>
                        <h2 class="title"><?php echo esc_html($atts['box1_title']);?></h2>
                        <p><?php echo esc_html($atts['box1_content']);?></p>
                    </div>
                    <div class="wbox-two">
                        <div class="content">
                            <i class="ficon flaticon-open-book"></i>
                            <h2 class="title"><?php echo esc_html($atts['box2_title']);?></h2>
                            <p><?php echo esc_html($atts['box2_content']);?></p>
                        </div>
                        <div class="thumb-box">
                            <?php 
                            $box2_image = wp_get_attachment_image_src( $atts['box2_image'], 'full' );
                            $box3_image = wp_get_attachment_image_src( $atts['box3_image'], 'full' );
                            ?>
                            <img src="<?php echo esc_url($box2_image[0]);?>" alt="image">
                        </div>
                    </div>
                    <div class="wbox-video">
                        <img src="<?php echo esc_url($box3_image[0]);?>" alt="image">
                        <div class="overlay">
                            <a href="<?php echo esc_url($box3_video_url);?>" class="mfp-iframe vedio-play"><i class="ficon icofont-play-alt-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="countdown-timer">
                        <div class="timer-content">
                            <h1 class="title"><?php echo esc_html($atts['title']);?> <span><?php echo esc_html($atts['year']);?></span></h1>
                            <p class="timer-loc"><i class="icofont-google-map"></i> <?php echo esc_html($atts['address']);?></p>
                        </div>
                        <div class="countdownTm"
                            data-start="1362179200"
                            data-end="1388471320"
                            data-now="1387471319"
                            data-border-color="rgba(255, 114, 0, 1)">
                            <div class="clock">
                            <div class="clock-item clock-days countdown-time-value">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-days" class="clock-canvas"></div>

                                        <div class="text">
                                            <h3 class="val">0</h3>
                                            <h5 class="type-days type-time">DAYS</h5>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->

                            <div class="clock-item clock-hours countdown-time-value">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-hours" class="clock-canvas"></div>

                                        <div class="text">
                                            <h3 class="val">0</h3>
                                            <h5 class="type-hours type-time">HOURS</h5>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->

                            <div class="clock-item clock-minutes countdown-time-value">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-minutes" class="clock-canvas"></div>

                                        <div class="text">
                                            <h3 class="val">0</h3>
                                            <h5 class="type-minutes type-time">MINUTES</h5>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->

                            <div class="clock-item clock-seconds countdown-time-value">
                                <div class="wrap">
                                    <div class="inner">
                                        <div id="canvas-seconds" class="clock-canvas"></div>

                                        <div class="text">
                                            <h3 class="val">0</h3>
                                            <h5 class="type-seconds type-time">SECONDS</h5>
                                        </div><!-- /.text -->
                                    </div><!-- /.inner -->
                                </div><!-- /.wrap -->
                            </div><!-- /.clock-item -->
                            </div><!-- /.clock -->
                        </div><!-- /.countdown-wrapper -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Section End -->