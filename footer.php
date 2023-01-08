<footer id="footer">
    <div class="container padd">
        <div class="row">
            <div class="col-lg-4">
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
        </div>
        <div class="row">
            <div class="col-lg-8 contact-info">
                <p>اطلاعات تماس </p>
            </div>

            <div class="col-lg-8">
                <p>تلفن تماس : 03136642286</p>
            </div>

            <div class="col-lg-8">
                <p>آدرس: اصفهان - بوستان سعدی - روبروی درب صدا و سیما - ساختمان پیمان </p>
            </div>

            <div class="col-lg-4">
                <div class="col-lg-8 contact-info">
                    <p>با ما همراه باشید </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>