<?php
get_header();
?>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .article-tag {
        background-color: #5cb85c;
        color: white;
        font-weight: bold;
        padding: 5px 10px;
        border-radius: 0;
        font-size: 0.8rem;
        text-transform: uppercase;
        display: inline-block;
        margin-bottom: 15px;
    }

    .article-title {
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .article-card {
        margin-bottom: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-card a {
        text-decoration: none;
        color: inherit;
        display: block;
        padding: 10px;
        border-radius: 5px;
        background-color: #fff;
        height: 100%;
    }

    .article-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .article-image {
        width: 100%;
        height: 200px; /* Fijamos altura para todas */
        object-fit: cover; /* Recorta para ajustarse */
        margin-bottom: 15px;
        border-radius: 5px;
        display: block;
    }

    .contact-button {
        position: fixed;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        background-color: #5cb85c;
        color: white;
        border: none;
        padding: 15px;
        writing-mode: vertical-lr;
        text-orientation: upright;
        font-weight: bold;
        letter-spacing: -5px;
        font-size: 1.2rem;
        z-index: 1000;
    }
</style>

<div class="container mt-4">
    <h2 class="title text-center">Blog</h2>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'blog',
                    'posts_per_page' => -1,
                );
                $blog_query = new WP_Query($args);

                if ($blog_query->have_posts()) :
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                ?>
                        <div class="col-md-4 article-card mb-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('blog-thumb'); ?>" alt="<?php the_title_attribute(); ?>" class="article-image">
                                <?php else : ?>
                                    <img src="https://placehold.co/800x400/333/fff?text=Sin+imagen" alt="Sin imagen destacada" class="article-image">
                                <?php endif; ?>
                                <div class="article-tag">#BLOG</div>
                                <h2 class="article-title"><?php the_title(); ?></h2>
                            </a>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center">No hay entradas de blog disponibles.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>


<button class="contact-button">CONTACTO</button>

<?php get_footer(); ?>
