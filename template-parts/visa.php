<!--    post    -->
<div class="row background-normal padd">
    <div class="container ">
        <div class="row">
            <h3>
               ویزا
            <hr>
            </h3>
        </div>
        <div class="row">
            <?php
            $the_query = new WP_Query(
                array(
                    'category_name' => 'visa',
                    'post_type' => 'post',
                    'posts_per_page' => 3
                )
            );

            while ($the_query->have_posts()) {
                $the_query->the_post();
                get_template_part('template-parts/post');
            }
            ?>
        </div>
    </div>
</div>