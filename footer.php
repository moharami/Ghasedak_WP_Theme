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
                <a class="o-iconList__link c-socialLink c-socialLink--instagram" target="_blank" rel="nofollow" title="instagram" href="https://www.instagram.com/myjobinja/">
                  <span class="c-socialLink__text">instagram</span>
                </a>
              </li>
              <li class="o-iconList__item c-footer2__socialItem">
                <a class="o-iconList__link c-socialLink c-socialLink--twitter" target="_blank" title="twitter" rel="nofollow" href="https://twitter.com/Jobinja_ir">
                  <span class="c-socialLink__text">twitter</span>
                </a>
              </li>
              <li class="o-iconList__item c-footer2__socialItem">
                <a class="o-iconList__link c-socialLink c-socialLink--telegram" target="_blank" title="telegram" rel="nofollow" href="https://jobinja.ir/telegram">
                  <span class="c-socialLink__text">telegram</span>
                </a>
              </li>
              <li class="o-iconList__item c-footer2__socialItem">
                <a class="o-iconList__link c-socialLink c-socialLink--linkedin" target="_blank" title="linkedin" rel="nofollow" href="https://www.linkedin.com/company/10081041">
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

            <div class="col-lg-8 pb-3">
                <p>تلفن تماس : 03136642286</p>
            </div>

            <div class="col-lg-8 pb-3">
                <p>آدرس: اصفهان - بوستان سعدی - روبروی درب صدا و سیما - ساختمان پیمان </p>
            </div>


        </div>
    </div>
    <div class="row navbt">
        استفاده از مطالب این وب سایت فقط برای مقاصد غیر تجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به
        قاصدک سفید می‌باشد.
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>