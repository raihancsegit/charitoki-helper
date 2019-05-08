<section class="causes-section">
        <div class="container">
            <div class="row">
            <?php 
                $post = new wp_Query(array(
                    'post_type' => 'campaign',
                    'posts_per_page'=> $atts['max_items']
                ));
                while($post->have_posts()):$post->the_post();
                ?>
                <div class="col-lg-4">
                    <div class="causes-item col-grid1">
                        <?php the_post_thumbnail();?>
                        <h4 class="title"><?php the_title();?></h4>
                        <p class="sub-title">Finibus vitae, luctus eu erat.</p>
                        <p class="donation-info"><span>$10,205</span> of $15,000</p>
                        <div class="progress-cause">
                            <div class="progress" data-value="85">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                   <div class="value-holder"><span class="value">85</span>%</div>
                                </div>
                            </div>
                        </div>
                        <p class="donator-count">Placed by 2,225 people in donation</p>
                        <a class="btn-thm" href="<?php the_permalink();?>">Donate Now</a>
                    </div>
                </div>
                <?php endwhile;?>  
            </div>
        </div>
        <img class="sec-floatimg" src="<?php echo get_template_directory_uri();?>/assets/images/photos/causes-float.png">
    </section>