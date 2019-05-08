<section class="blog-sec">
        <div class="container">
            <div class="row">
                <?php 
                $post = new wp_Query(array(
                    'post_type' => 'post',
                    'posts_per_page'=> $atts['max_items']
                ));
                while($post->have_posts()):$post->the_post();
                ?>
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="blog-img">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="blog-meta">
                            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            <div class="post-date">By Founder On <span><?php the_time('d F Y');?></span></div>
                        </div>
                        <p><?php echo wp_trim_words(get_the_content(),'30',' ');?></p>
                        <a href="<?php the_permalink();?>" class="blog-readmore">Read More</a>
                    </div>
                </div>                      
            <?php endwhile;?>            
               
            </div>
        </div>
    </section>