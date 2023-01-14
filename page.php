<?php get_header() ?>
    <div class="row">
        <div class="container padd">
            <div class="col-lg-9">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>