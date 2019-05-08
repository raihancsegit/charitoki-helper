 <!-- CountdownTimer Divider Start -->
 <section class="timer-divider parallax-sec">
        <div class="containers">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="countdown-timer timer-center">
                        <div class="timer-content">
                            <h1 class="title"><?php echo esc_html($atts['title_one']);?> <br><?php echo esc_html($atts['title_two']);?> <span><?php echo esc_html($atts['title_there']);?></span></h1>
                            <p class="timer-loc"><i class="icofont-google-map"></i> <?php echo esc_html($atts['sub_text']);?></p>
                        </div>
                        <div class="countdownTm"
                            data-start="1362139202"
                            data-end="1388461320"
                            data-now="1387461319"
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
    <!-- CountdownTimer Divider End -->