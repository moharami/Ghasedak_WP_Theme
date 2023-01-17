<!--    post    -->
<div class="row background-normal  pt-3">
    <div class="container ">
        <div class="row">
            <h3>
               سفر های خارجی
                <hr>
            </h3>
            <br>
        </div>
        <div class="row">
            <?php
            $the_query = new WP_Query(
                array(
                    'category_name' => 'foreign',
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