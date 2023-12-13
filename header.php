<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta property="og:locale" content="ja_JP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/common/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/common/slick.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/common/slick-theme.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/style.css" />
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>

</head>

<body>
    <header>
        <div class="header">
            <a href="<?php echo home_url('/')?>" class="logo">
                <img class="logo-img" src="<?php echo get_template_directory_uri()?>/assets/img/Vector.svg" alt="">
            </a>
            <div class="mobile-tap" id="mobileTap">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="mobile-menu" id="mobileMenu">
            <div><a href="<?php echo home_url('/')?>">トップページ</a></div>
            <div><a href="<?php echo home_url('/article')?>">記事詳細</a></div>
            <div><a href="<?php echo home_url('/category')?>">カテゴリ一覧</a></div>
            <div><a href="<?php echo home_url('/category-detail')?>">カテゴリ詳細</a></div>
            <hr>
            <div><a href="https://al-bo.io/">運営会社</a></div>
            <div><a href="<?php echo home_url('/description')?>">特定商取引法に基づく表示</a></div>
            <div><a href="<?php echo home_url('/term')?>">利用規約</a></div>
            <div><a href="<?php echo home_url('/privacy')?>">プライバシーポリシー</a></div>
            <div><a href="<?php echo home_url('/guarantee')?>">返金保証について</a></div>
            <hr>
            <p>ALBONA inc</p>
        </div>
    </header>
  <?php
  wp_head();
  ?>