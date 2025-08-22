<?php
get_header();
?>

<style>
    body {
        background-color: #ffffff;
        font-family: Arial, sans-serif;
    }

    .actividad-container {
        padding: 40px 15px;
    }

    .actividad-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 30px;
    }

    .actividad-title {
        font-size: 2rem;
        text-transform: uppercase;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
    }

    .actividad-content {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #444;
    }
</style>

<div class="container actividad-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="actividad-image">
        <?php endif; ?>

        <h1 class="actividad-title"><?php the_title(); ?></h1>

        <div class="actividad-content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; else : ?>
        <p>No se encontró la actividad.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
