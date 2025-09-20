<?php
// スタイルシートとスクリプトを登録・読み込み
function dentalclinic_scripts() {
    // 独自のスタイルシート
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );

    // Swiperのスタイルシート
    wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), '10.0' );

    // スクリプトの読み込み
    // Swiperのライブラリ
    wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10.0', true );

    // 独自のスクリプト（main.js）
    wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/main.js', array('swiper-script'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'dentalclinic_scripts' );
?>