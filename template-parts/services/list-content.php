
<div class="tab-pane fade <?php echo $args['class-content']; ?>" id="<?php  echo 'number' . the_ID(); ?>">
    <div class="row pad2">
        <div class="col-lg-4">
            <img class="img-fluid"
                 src="./wp-content/themes/Ghasedak_WP_Theme/assets/images/services/1.webp" alt="flight">
        </div>
        <div class="col-lg-8">
            <h5 class="pb-2"><?php the_title(); ?></h5>
            <p class="service-p">
                <?php the_content(); ?>
            </p>
        </div>
    </div>
</div>