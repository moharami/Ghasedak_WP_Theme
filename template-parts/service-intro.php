<div class="row background-normal navitem">
    <div class="container">
        <ul class="nav nav-tabs">
            <?php
            $the_query = new WP_Query(
                array(
                    'category_name' => 'service_intro',
                    'post_type' => 'post',
                    'posts_per_page' => 3
                )
            );

            $active = 'active';

            while ($the_query->have_posts()) {
                $the_query->the_post();
                $args = [
                    'class' => $active,
                ];
                get_template_part('template-parts/services/list-item', null, $args);
                $active = '';
            }
            ?>
        </ul>
    </div>
</div>


<div class="row background-dark">
    <div class="container">
        <div id="myTabContent" class="tab-content">

            <?php
            $the_query = new WP_Query(
                array(
                    'category_name' => 'service_intro',
                    'post_type' => 'post',
                    'posts_per_page' => 3
                )
            );

            $active = 'active show';

            while ($the_query->have_posts()) {
//                var_dump($active);
                $the_query->the_post();
                $args = [
                    'class-content' => $active,
                    'content' => the_content(),
                ];

                get_template_part('template-parts/services/list-content', null, $args);
                $active = '';

            }

            ?>

        </div>
    </div>
</div>