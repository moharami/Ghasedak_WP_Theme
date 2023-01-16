    <div class="row">
        <div class="col-lg-12">
            <?php
            $args_header_image = array(
                'post_type' => 'header_image'
            );

            $header_image = new WP_Query($args_header_image);

            if ($header_image->have_posts()) {
                while ($header_image->have_posts()) {
                    $header_image->the_post();

                }
            }
            ?>
            <img src="<?php the_field('header_image'); ?>" width="100%" alt="">
        </div>
    </div>