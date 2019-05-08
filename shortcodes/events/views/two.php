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
                <div class="col-md-6">
                    <div class="event-list">
                    
                        <div class="event-item">
                            <h4 class="title"><?php the_title();?></h4>
                            <p class="event-info"><i class="icon icofont-clock-time"></i><?php the_time('g a'); ?><i class="icon icofont-google-map"></i>
                            <?php  echo esc_html($address);?></p>
                            <p class="pra-text"><?php echo wp_trim_words(get_the_content(),'40',' ')?></p>
                        </div>
                        
                    </div>
                </div>
                <?php 
             endwhile;
                    ?>
            </div>
            
        </div>
    </section>