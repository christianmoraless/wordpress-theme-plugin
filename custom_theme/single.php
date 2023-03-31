<?php get_header(); ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-9">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <article class="<?php post_class();?>">
                        <header>
                            <h1><?php the_title(); ?></h1>
                            <h6><?php get_the_taxonomies(); ?></h6>
                        </header>
                        <div class="mt-5">
                            <p><?php the_content(); ?></p>
                        </div>
                    </article>

                <?php endwhile; else: ?>

                <?php endif; ?>
            </div>

            <div class="col-lg-3 d-none d-lg-block">

                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
<?php get_footer(); ?>