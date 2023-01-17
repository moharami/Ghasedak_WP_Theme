<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" sizes="32x32" href="favicon.png">
    <?php wp_head(); ?>
</head>

<body class="rtl">
<div class="container">
    <div class="row pt-2">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>
    </div>
</div>
<div class="row top-menu">
    <div class="container">
        <div id="navbar" class="navbar-collapse">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'items_wrap' => '<ul id="menu-main" class="navbar-nav me-auto">%3$s</ul>',
            ));
            ?>
        </div>
    </div>
</div>



