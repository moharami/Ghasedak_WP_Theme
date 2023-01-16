<div class="col-lg-4 post">
    <img class="img-fluid height246" src="<?php the_post_thumbnail() ?>

    <a href="<?php echo esc_url(get_permalink()); ?>">
    <h5 class=" post-title"><?php the_title(); ?></h5>
    </a>
    <p><?php the_excerpt(); ?></p>
</div>