<!-- Gallery Section Start -->
<?php 
$left_image_one = wp_get_attachment_image_src( $atts['left_image_one'], 'full' );
$left_image_two = wp_get_attachment_image_src( $atts['left_image_two'], 'full' );
$right_image_one = wp_get_attachment_image_src( $atts['right_image_one'], 'full' );
$right_image_two = wp_get_attachment_image_src( $atts['right_image_two'], 'full' );
$right_image_there = wp_get_attachment_image_src( $atts['right_image_there'], 'full' );

$left_image_one_title = $atts['left_image_one_title'];
$left_image_two_title = $atts['left_image_two_title'];
$right_image_title_one = $atts['right_image_title_one'];
$right_image_title_two = $atts['right_image_title_two'];
$right_image_title_there = $atts['right_image_title_there'];
?>
<div class="gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="glry-wrp">
                        <div class="glry-twone">
                            <div class="glry-grid">
                                <img src="<?php echo esc_url($left_image_one[0]);?>" alt="image">
                                <div class="glry-overlay">
                                    <div class="content">
                                        <h2><?php echo esc_html($left_image_one_title);?></h2>
                                        <h6><?php the_time('F j, Y');?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="glry-grid">
                                <img src="<?php echo esc_url($left_image_two[0]);?>" alt="image">
                                <div class="glry-overlay">
                                    <div class="content">
                                        <h2><?php echo esc_html($left_image_two_title);?></h2>
                                        <h6><?php the_time('F j, Y');?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="glry-grid">
                            <img src="<?php echo esc_url($right_image_one[0]);?>" alt="image">
                            <div class="glry-overlay">
                                <div class="content">
                                    <h2><?php echo esc_html($right_image_title_one);?></h2>
                                    <h6><?php the_time('F j, Y');?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="glry-grid">
                            <img src="<?php echo esc_url($right_image_two[0]);?>" alt="image">
                            <div class="glry-overlay">
                                <div class="content">
                                    <h2><?php echo esc_html($right_image_title_two);?></h2>
                                    <h6><?php the_time('F j, Y');?></h6>
                                </div>
                            </div>
                        </div>
                        <div class="glry-grid">
                            <img src="<?php echo esc_url($right_image_there[0]);?>" alt="image">
                            <div class="glry-overlay">
                                <div class="content">
                                    <h2><?php echo esc_html($right_image_title_there);?></h2>
                                    <h6><?php the_time('F j, Y');?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section End -->