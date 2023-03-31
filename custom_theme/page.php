<?php get_header(); ?>

    <div class="container my-5">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="<?php post_class();?>">
            <header>
                <h1 class="text-center"><?php the_title(); ?></h1>
            </header>
            <?php the_content(); ?>
        </article>

        <?php endwhile; else: ?>

        <article>
            <p>No hay contenido a mostrar </p>
        </article>

        <?php endif; ?>
            
    </div>

<?php get_footer(); ?>