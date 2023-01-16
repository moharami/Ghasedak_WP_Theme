<footer id="footer">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-4">
                <p>پرواز خارجی</p>
                <hr>
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'item_wrap' => '<ul class="list-group">%3$s</ul>',
                    )
                );
                ?>
            </div>
            <div class="col-lg-4">
                <p>پرواز داخلی</p>
                <hr>
                <ul>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'item_wrap' => '<ul class="list-group">%3$s</ul>',
                        )
                    );
                    ?>
                </ul>
            </div>
            <div class="col-lg-4">
                <p>قاصدک سفید در شبکه های اجتماعی</p>
                <hr>
                <ul>
                    <ul class="o-iconList o-iconList--hr o-iconList--4 c-footer2__socials">
                        <li class="o-iconList__item c-footer2__socialItem">
                            <a class="o-iconList__link c-socialLink c-socialLink--instagram" target="_blank"
                               rel="nofollow" title="instagram" href="https://www.instagram.com/myjobinja/">
                                <span class="c-socialLink__text">instagram</span>
                            </a>
                        </li>
                        <li class="o-iconList__item c-footer2__socialItem">
                            <a class="o-iconList__link c-socialLink c-socialLink--twitter" target="_blank"
                               title="twitter" rel="nofollow" href="https://twitter.com/Jobinja_ir">
                                <span class="c-socialLink__text">twitter</span>
                            </a>
                        </li>
                        <li class="o-iconList__item c-footer2__socialItem">
                            <a class="o-iconList__link c-socialLink c-socialLink--telegram" target="_blank"
                               title="telegram" rel="nofollow" href="https://jobinja.ir/telegram">
                                <span class="c-socialLink__text">telegram</span>
                            </a>
                        </li>
                        <li class="o-iconList__item c-footer2__socialItem">
                            <a class="o-iconList__link c-socialLink c-socialLink--linkedin" target="_blank"
                               title="linkedin" rel="nofollow" href="https://www.linkedin.com/company/10081041">
                                <span class="c-socialLink__text">linkedin</span>
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 contact-info">
                <p>اطلاعات تماس </p>
            </div>

            <?php
            $args_copywirte_section = array(
                'post_type' => 'footer_contact_info'
            );

            $copywirte_section = new WP_Query($args_copywirte_section);

            if ($copywirte_section->have_posts()) {
                while ($copywirte_section->have_posts()) {
                    $copywirte_section->the_post();

                }
            }
            ?>
            <div class="col-lg-8 pb-3">
                <p>تلفن تماس :
                   <?php  the_field('telephone'); ?>
                </p>
            </div>

            <div class="col-lg-8 pb-3">
                <p>آدرس:  </p>
                <?php
                the_field('address');
                ?>
            </div>


        </div>
    </div>
    <div class="row navbt">
        <?php

        $args_copywirte_section = array(
            'post_type' => 'copywrite'
        );

        $copywirte_section = new WP_Query($args_copywirte_section);

        if ($copywirte_section->have_posts()) {
            while ($copywirte_section->have_posts()) {
                $copywirte_section->the_post();
                the_title();
            }
        }

        ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>