<?php 
  $image = wp_get_attachment_image_src($atts['bg_image'])
?>
<div class="action-divider parallax-sec" style="background-image:url(<?php echo $image[0];?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 divider-center">
                    <h5><?php echo esc_html($atts['pre_title']);?></h5>
                    <h2><?php echo esc_html($atts['title']);?></h2>
                    <p><?php echo esc_html($atts['call_content']);?></p>
                    <a class="btn-thm" href="<?php echo esc_url($atts['btn_url']);?>"><?php echo esc_html($atts['btn_text']);?></a>
                    <div class="callvol-pimg"><?php echo wp_get_attachment_image( $atts['image'], 'full' ); ?></div>
                </div>
            </div>
        </div>
    </div>