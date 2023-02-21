<?php get_header(); ?>

<main id="main-content">
    <?php if ( have_posts() ) :
        while ( have_posts() ) :  the_post();
            get_template_part( 'template-parts/post/content' );
        endwhile;
    else :
        get_template_part( 'template-parts/post/content', 'none' );
    endif; ?>
</main>
<?php get_footer(); ?>
