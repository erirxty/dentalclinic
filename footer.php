<footer class="footer">
    <div class="container footer-inner">
        <div class="footer-block">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/logo2.svg" alt="さわやか歯科クリニック" class="logo">
            </a>
            
            <p>
                〒105-0001 東京都港区虎ノ門１丁目３−１<br />
                東京メトロ　虎ノ門駅より直結・徒歩1分
            </p>
            <p>駐車場はないので、近隣のコインパーキングをご利用ください</p>
            <p>TEL: 03-xxxx-xxxx</p>
        </div>
        <div class="footer-block">
            <ul class="footer-links">
                
                <li><a href="<?php echo home_url('/#contact'); ?>">お問い合わせ・ご予約</a></li>
                <li><a href="<?php echo home_url('/#access'); ?>">アクセス</a></li>
            </ul>
        </div>
        
        
    </div>
</footer>
<!-- Swiperの初期化スクリプト -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>

</body>
</html>