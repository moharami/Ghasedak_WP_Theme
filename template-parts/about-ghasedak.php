<?php
$args_header_image = array(
    'category_name' => 'about_us',
    'post_type' => 'post',
    'posts_per_page' => 1
);

$header_image = new WP_Query($args_header_image);

if ($header_image->have_posts()) {
    while ($header_image->have_posts()) {
        $header_image->the_post();
    }
}
?>

<div class="row m-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3><?php the_title() ?></h3>
                <hr>
                <p class="lead">
                    <?php the_content() ?>
                </p>
            </div>
            <div class="col-lg-5">
                <?php the_post_thumbnail(); ?>
            </div>
        </div>
    </div>
</div>