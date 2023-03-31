<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Grill How</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        <link href="<?php bloginfo('template_url')?>/css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- HEADER -->
        <header id="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg" id="nav">
                    <a class="navbar-brand" href="#">
                        <img src="<?php bloginfo('template_url')?>/images/logo.png" class="img-fluid" alt="logo" id="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list"></i>
                      </button>
                    <?php
                        wp_nav_menu(array(
                            'theme_location'=>'menu',
                            'container'=>'div',
                            'container_class'=>'collapse navbar-collapse justify-content-end',
                            'container_id'=>'navbarSupportedContent',
                            'items_wrap'=>'<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
                            'menu_class'=>'nav-item'
                        ));
                    ?>
                  </nav> 
            </div>
        </header>
        <!-- BANNER -->
        <section id="banner">
            <h1 class="text-center text-uppercase fw-bold"><?php echo get_theme_mod( 'title', '' ); ?></h1>
            <div class="d-flex justify-content-center">
                <button class="btn text-uppercase" id="btn-banner"><?php echo get_theme_mod( 'button', '' ); ?></button>
            </div>
        </section>
        <section id="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 py-5">
                        <h4 class="text-center text-uppercase">address</h4>
                        <p class="text-center"><?php echo get_theme_mod( 'address', '' ); ?></p>
                    </div>
                    <div class="col-md-3 py-5">
                        <h4 class="text-center text-uppercase">opening hours</h4>
                        <p class="text-center"><?php echo get_theme_mod( 'openingHours', '' ); ?></p>
                    </div>
                    <div class="col-md-3 py-5">
                        <h4 class="text-center text-uppercase">phones</h4>
                        <p class="text-center"><?php echo get_theme_mod( 'phones', '' ); ?></p>
                    </div>
                    <div class="col-md-3 py-5">
                        <h4 class="text-center text-uppercase">emails</h4>
                        <p class="text-center"><?php echo get_theme_mod( 'emails', '' ); ?></p>
                    </div>
                </div>
            </div>
        </section>