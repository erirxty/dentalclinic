</main>

    <footer class="footer">
      <div class="container">
        <div class="footer-info">
          <p>さわやか歯科クリニック</p>
          <p>
            〒105-0001 東京都港区虎ノ門１丁目３−１<br />
            東京メトロ　虎ノ門駅より直結・徒歩1分
          </p>
          <p>駐車場はないので、近隣のコインパーキングをご利用ください</p>
          <p>TEL: 03-xxxx-xxxx</p>
        </div>
        <ul class="footer-links">
          <li><a href="#">オンライン予約</a></li>
          <li><a href="#">お問い合わせ</a></li>
          <li><a href="#">アクセス</a></li>
        </ul>
      </div>
    </footer>

    <script>
        // シンプルな設定
        const mySwiper = new Swiper(".swiper-container", {
            loop: true,
            autoplay: {
                delay: 4000,
            },
            slidesPerView: 3,
            spaceBetween: 20,
            
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>