<div class="project-item">
    <?php echo wp_get_attachment_image( $atts['image'], 'full',"", array( "class" => "comment-title-icon icon" )); ?>
    <h2 class="title"><?php echo esc_html($atts['title']);?></h2>
     <p class="pra-text"><?php echo esc_html($atts['line_one']);?><br> <?php echo esc_html($atts['line_two']);?></p>
</div>