<section class="event-sec">
        <div class="container">
            <div class="row">
                <?php 
                    $events = new wp_Query(array(
                        'post_type' => 'events',
                        'posts_per_page'=> $atts['max_itemss']
                    ));
                    while($events->have_posts()):$events->the_post();
                    $event_meta = get_post_meta(get_the_ID(),'_events',true);
                    $address    = isset($event_meta['address']) ? $event_meta['address'] : array();?>
                <div class="col-lg-6 col-md-12">
                    <div class="event-item thumb-box">
                        <div class="thumb">
                            <?php the_post_thumbnail();?>
                            <div class="event-time"><i class="icon icofont-calendar"></i><?php the_time('d F y'); ?></div>
                        </div>
                        <h4 class="title"><?php the_title();?></h4>
                        <p class="event-info"><i class="icon icofont-clock-time"></i><?php the_time('g a'); ?> <i class="icon icofont-google-map"></i><?php
                        echo esc_html($address)
                        ?></p>
                        <p class="pra-text"> 
                            <?php echo wp_trim_words(get_the_content(),'40',' ')?>
                        </p>
                        <a class="btn-link" href="<?php the_permalink(); ?>">Join event <i class="icon icofont-double-right"></i></a>
                    </div>
                </div>
                <?php 
                    endwhile;
                    ?>
            </div>
        </div>
    </section>