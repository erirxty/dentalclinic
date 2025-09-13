<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <div class="container">
        <div class="header-inner">
          <div class="site-title">
            <img
              src="logo2.svg"
              alt="さわやか歯科クリニック ロゴ"
              class="logo"
            />
            <p class="tagline">
              地域の皆様が安心して通える、家族みんなのための歯科医院
            </p>
          </div>
          <div class="header-info">
            <p>Tel: 03-xxxx-xxxx</p>
            <p>【診療時間】9:00〜13:00 / 14:00〜18:30</p>
            <p>
              【休診日】水曜・日曜・祝日<br />
              土曜日のみは午前のみ
            </p>
          </div>
        </div>
        <nav class="g-nav">
          <ul>
            <li><a href="#about">当院について</a></li>
            <li><a href="#staff">スタッフ紹介</a></li>
            <li><a href="#services">診療内容</a></li>
            <li><a href="#contact">お問い合わせ</a></li>
            <li><a href="#access">アクセス</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <main>