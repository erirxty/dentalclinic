<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    // 投稿があるか確認
    if ( have_posts() ) :
    ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php the_archive_title(); ?>
            </h1>
            <div class="archive-description">
                <?php the_archive_description(); ?>
            </div>
        </header><?php
        // 投稿を1件ずつループして表示
        while ( have_posts() ) :
            the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            </header><div class="entry-content">
                <?php the_excerpt(); ?>
            </div></article><?php
        endwhile;
        ?>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php
    else :
        // 投稿がない場合のメッセージ
        ?>
        <p>投稿が見つかりませんでした。</p>
    <?php endif; ?>

    </main></div><?php get_sidebar(); ?>
<?php get_footer(); ?>