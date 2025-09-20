<?php get_header(); ?>

<main>
    <section id="content" class="site-main">
        <div class="container">
            <?php
            // 投稿があるか確認し、ループを開始
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                    </header><div class="entry-content">
                        <?php
                        // 投稿本文を表示
                        the_content();
                        ?>
                    </div></article>

            <?php
                endwhile;
                // ページネーション
                the_posts_pagination();

            else :
                // 投稿がない場合のメッセージ
            ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>