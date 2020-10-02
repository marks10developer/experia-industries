<?php get_header(); ?>

<div class="container animated fadeInUp">
    <div class="page_content page_content_inner">
        <section class="site-main" id="sitefull">
            <header class="page-header">
                <h1 class="entry-title text-center"><?php esc_html_e( '404 Not Found', 'experia' ); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p class="text-404 text-center">
                 <i class="fa fa-warning fa-4x warning-color"></i> <br /><br />
                <?php esc_html_e( "Looks like you have taken a wrong turn..... Don't worry... it happens to the best of us.", 'experia' ); ?></p>
            </div><!-- .page-content -->
        </section>
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>