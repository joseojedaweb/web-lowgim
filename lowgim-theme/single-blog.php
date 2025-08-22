<?php get_header(); ?>

<style>
    .single-blog-container {
        padding: 40px 20px;
        font-family: Arial, sans-serif;
    }
    .article-tag {
        background-color: #5cb85c;
        color: white;
        font-weight: bold;
        padding: 5px 10px;
        font-size: 0.8rem;
        text-transform: uppercase;
        display: inline-block;
        margin-bottom: 15px;
    }
    .article-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
    .article-image {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }
    .article-content {
        font-size: 1rem;
        line-height: 1.6;
    }
</style>

<div class="container single-blog-container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="article-tag">#BLOG</div>
            <h1 class="article-title"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('blog-banner-mobile'); ?>" alt="<?php the_title_attribute(); ?>" class="article-image">
            <?php endif; ?>

            <div class="article-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile;
    else :
        echo '<p>No se ha encontrado la entrada.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
