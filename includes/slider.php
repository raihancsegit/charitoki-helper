<?php
function smtone_slider_shortcode($atts,$content){
    ob_start();
        $smtone_slider_atts = shortcode_atts(array(
            'slider_id' => '',
        ),$atts);

        $slider_id = $smtone_slider_atts['slider_id'];
            $args = array(
                'post_type' => array( 'slider' ),
                'p' => $slider_id
            );
        $query = new WP_Query( $args );
        $slider_section = get_post_meta(get_the_ID(),'_sliderpage' , true );
        $slider_sections = isset($slider_section ['banner_style']) ? $slider_section ['banner_style'] : array();

    ?>
<!-- Slider Area Start Here -->
    <div class="slider-area home-one-slider">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
              <?php
               $i = 1;
              while ( $query->have_posts() ) : $query->the_post();
                   $slider_metadata = get_post_meta($slider_id, '_slider_metabox', true );
                   $meta_groups = isset( $slider_metadata['slider_group_option'] ) ? $slider_metadata['slider_group_option'] : array();
                   if(!empty($meta_groups)):
                   foreach ( $meta_groups as  $value) {
                    $imgurl= wp_get_attachment_image_url( $value['slider_image'], 'full' );
                    ?>
                <img src="<?php echo esc_url($imgurl) ?>" title="#slider-direction-<?php echo $i++?>" />
                 <?php
                    }
                    endif;
                    endwhile;
                    wp_reset_postdata();
                 ?>
            </div>
            <!-- direction 1 -->
            <?php
            $i = 1;
            while ( $query->have_posts() ) : $query->the_post();
              $slider_metadata = get_post_meta($slider_id, '_slider_metabox', true );
                   $meta_groups = isset( $slider_metadata['slider_group_option'] ) ? $slider_metadata['slider_group_option'] : array();
                   if(!empty($meta_groups)):
                   foreach ( $meta_groups as  $value) {

            ?>
            <div id="slider-direction-<?php echo $i++?>" class="t-cn slider-direction">
                <div class="slider-content t-cn s-tb slider-1 ">
                    <div class="title-container s-tb-c title-compress">
                        <div class="medium-text"><?php echo esc_html ($value['slider_pretitle']);?></div>
                        <div class="title1"><?php echo esc_html ($value['slider_title']);?></div>
                        <div class="read-more">
                            <ul>
                                <li><a href="<?php echo esc_url ($value['btn_link']);?>"><?php echo esc_html ($value['btn_text']);?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo esc_url ($value['btn_link2']);?>"><?php echo esc_html ($value['btn_text2']);?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
             <?php
                    }
                    endif;
                    endwhile;
                    wp_reset_postdata();
                 ?>

        </div>
    </div>
    <!-- Slider Area End Here -->

   <?php  }

add_shortcode('smtone_slider','smtone_slider_shortcode');


add_action("manage_posts_custom_column",  "smtone_slider_shortcode_column");
add_filter("manage_edit-slider_columns", "smtone_slider_post_type_columns");
function smtone_slider_post_type_columns($columns){
  $columns = array(
    "cb" => "<input type=\"checkbox\" />",
    "title" => "Slider Name",
    "shortcode" => "Slider Shortcode",
    "Date" => "Date",
  );
  return $columns;
}

function smtone_slider_shortcode_column($column){
  global $post;

  if ( 'shortcode' == $column) {
      $shortcode = "[Smtone_slider slider_id=".$post->ID."]";
      echo '<input type="text" readonly value="'.$shortcode.'">';
  }
}

