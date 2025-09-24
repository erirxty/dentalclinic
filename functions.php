<?php
// スタイルシートとスクリプトを登録・読み込み
function dentalclinic_theme_scripts() {
    // 独自のスタイルシート
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );

    // Swiperのスタイルシート
    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0' );

    // 独自のスクリプト（main.js）
    // hamburger-menu.jsよりも先に読み込む必要がある場合は、依存関係に hamburger-menu を追加します
    wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/main.js', array('swiper-script', 'hamburger-menu'), '1.0', true );
    
    // Hamburger Menuのスクリプト
    wp_enqueue_script(
        'hamburger-menu', // スクリプトのハンドル名
        get_template_directory_uri() . '/js/hamburger-menu.js', // スクリプトのファイルパス
        array(), // 依存関係の配列（なし）
        '1.0', // バージョン
        true // フッターで読み込む（推奨）
    );

    // Swiperのライブラリ
    wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10.0', true );

}
add_action( 'wp_enqueue_scripts', 'dentalclinic_theme_scripts' );
?>