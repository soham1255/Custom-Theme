<?php get_header(); ?>
<?php $home_content = Cts\Component\Cts_Page_Content::cts_get_page_content('home'); ?>
<main id="cts-home">
  
    <?php get_template_part('templates/home/banner', '', $home_content['banner']); ?>

</main>
<?php get_footer(); ?>
