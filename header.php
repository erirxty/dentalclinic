<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css">
    
    <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
  <header class="header">
    <div class="container header-inner">
        <div class="header-left">
            <div class="site-title">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/logo2.svg" alt="さわやか歯科クリニック ロゴ" class="logo" />
                </a>
                <p class="tagline">地域の皆様が安心して通える、<br>家族みんなのための歯科医院</p>
            </div>
        </div>

        <div class="header-right">
            <div class="header-info">
                <p>Tel: 03-xxxx-xxxx</p>
                <p>【診療時間】9:00〜13:00 / 14:00〜18:30</p>
                <p>
                    【休診日】水曜・日曜・祝日<br />
                    土曜日のみは午前のみ
                </p>
            </div>
            <nav class="g-nav">
                <ul>
                    <li><a href="#about">当院について</a></li>
                    <li><a href="#services">診療内容</a></li>
                    <li><a href="#director">院長・スタッフ紹介</a></li>
                    <li><a href="#contact">お問い合わせ</a></li>
                    <li><a href="#news">お知らせ</a></li>
                    <li><a href="#access">アクセス</a></li>
                </ul>
            </nav>
        </div>
        
        <button class="menu-toggle" aria-expanded="false" aria-controls="g-nav-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
</header>

    <main>