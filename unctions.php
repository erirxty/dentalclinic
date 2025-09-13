<?php
/**
 * テーマのセットアップ
 *
 * @package Dentist Theme
 */

function dentist_theme_setup() {
    // スタイルシートとスクリプトの読み込み
    function dentist_enqueue_styles() {
        wp_enqueue_style( 'dentist-style', get_stylesheet_uri() );
        wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v6.5.1/css/all.css' );
        wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    }
    add_action( 'wp_enqueue_scripts', 'dentist_enqueue_styles' );
}
add_action( 'after_setup_theme', 'dentist_theme_setup' );