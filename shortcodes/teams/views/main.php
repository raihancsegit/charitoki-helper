<section class="team-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 grid-wrp">

                <?php 
                    if ( !empty( $team ) ) {
                    foreach ( $team as $item ) { 
                ?>
                    <div class="grid-col left-pd">
                        <div class="team-item">
                            <div class="thumb">
                                <?php echo wp_get_attachment_image( $item->image, 'full' ); ?>
                            </div>
                            <div class="content">
                                <h4><?php echo esc_html($item->name);?></h4>
                                <p><?php echo esc_html($item->desg);?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                     } }
                    ?>
                </div>
            </div>
        </div>
    </section>