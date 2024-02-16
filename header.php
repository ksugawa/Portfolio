<?php
/*
* ヘッダー／ナビメニュー
*/
$nav_menus = [
    [
        "name" => "HOME",
        "link" => "/"
    ],
    [
        "name" => "WORK",
        "link" => "/work"
    ],
    [
        "name" => "BLOG",
        "link" => "/blog"
    ],
    [
        "name" => "OTHER",
        "link" => "/other"
    ]
];
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/scss/style.scss?<?php echo (date('YmdHis')); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?<?php echo (date('YmdHis')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Source+Sans+Pro:wght@200;600&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css">


    <!-- ページ専用css -->

    <?php if (is_page('ecoact')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ecoact.css?<?php echo (date('YmdHis')); ?>" />
    <?php endif; ?>

    <?php if (is_page('other')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/other.css?<?php echo (date('YmdHis')); ?>" />
    <?php endif; ?>

    <!--/ ページ専用css -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <header class="header-container">
            <div class="sitetitle">
                <nav class="menu">
                    <ul>
                        <?php foreach ($nav_menus as $nav_menu) : ?>
                        <li>
                            <a href="<?= $nav_menu['link'] ?>">
                                <?= $nav_menu['name'] ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <div class="navbtn"><span></span><span></span><span></span></div>
            </div>
        </header>