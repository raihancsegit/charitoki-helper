 <!-- Partner Section Start -->
 <section class="partner-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-items">
                    <?php 
                        if ( !empty( $logo ) ) {
                        foreach ( $logo as $item ) { 
                        ?>
                        <div class="item">
                            <div class="partner-item">
                            <?php echo wp_get_attachment_image( $item->image, 'full' ); ?>
                            </div>
                        </div>
                        <?php
                            } }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>