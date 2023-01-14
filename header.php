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
        <nav class="navbar-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'items_wrap' => '<ul class="nav navbar-nav navbar-right headerMenu">%3$s</ul>'
            ));
            ?>
        </nav>
    </div>
</div>


