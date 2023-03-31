        <!-- FOOTER -->
        <section id="newsletter" class="">
            <div class="container">
                <h3 class="text-center text-capitalize ">newsletter signup</h3>
                <h1 class="text-center text-uppercase mt-4 fw-bold"><?php echo get_theme_mod( 'newsletterTitle', '' ); ?></h1>
                <div class="d-flex justify-content-center mt-4">
                    <form class="d-flex" id="formNewsletter">
                        <input type="email" class="form-control py-3" placeholder="Your Email">
                        <button type="submit" class="btn" id="button-subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-3 footer-item">
                        <img src="<?php bloginfo('template_url')?>/images/logo.png" class="img-fluid" alt="logo" id="logo">
                    </div>
                    <div class="col-md-3 footer-item">
                        <p class="text-uppercase"><?php echo get_theme_mod( 'address', '' ); ?></p>
                    </div>
                    <div class="col-md-3 footer-item">
                        <div id="ft_widgets">
                            <!-- widgets -->
                        </div>
                    </div>
                    <div class="col-md-3 footer-item">
                        <p class="text-uppercase"><?php echo get_theme_mod( 'emails', '' ); ?><br/><?php echo get_theme_mod( 'phones', '' ); ?></p>
                    </div>
                </div>
                <div class="py-2 mt-3 footer-item">
                    <small class="d-flex justify-content-center text-uppercase">2023 grill how. All rights reserved. Made by Christian Morales</small>
                </div>
            </div>
        </footer>
        <script src="<?php bloginfo('template_url')?>/js/bootstrap/bootstrap.min.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>