<?php get_header(); ?>

<section id="best-meals" class="py-5">
    <div class="container">
        <div class="row gx-5">
            <?php echo do_shortcode( ' [showOnePost] ' ); ?>
        </div>
    </div>
</section>

<div class="container">
    <hr class="separator my-5">
</div>

<section id="restaurant-menu-items">
    <div class="container">
        <div class="row">
        <?php echo do_shortcode( ' [showPostsFront] ' ); ?>
        </div>
        <div class="row">
            <div class="mt-lg-5 mt-md-5 text-center">
                <a class="btn text-uppercase see-menu" href="http://localhost/crazy-imagine-prueba/menu/">see menu</a>
            </div>
        </div>
    </div>
</section>

<section id="why-choose-us" class="my-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="">
                    <img src="<?php bloginfo('template_url')?>/images/why-choose-us.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 description-container">
                <div class="description d-flex flex-column justify-content-center align-items-center py-lg-0 py-md-5">
                    <h4 class="text-capitalize text-md"><?php echo get_theme_mod( 'whyChooseUsSubtitle', '' ); ?></h4>
                    <h1 class="text-uppercase fw-bold"><?php echo get_theme_mod( 'whyChooseUsTitle', '' ); ?></h1>
                    <p class=""><?php echo get_theme_mod( 'whyChooseUsParagraph', '' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>