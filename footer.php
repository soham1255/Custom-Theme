<!-- Footer Section Start -->
<footer>
    <?php $footer_option = Cts\Component\Cts_Page_Content::cts_get_page_content('footer'); ?>
    <div class="container">
        <div class="row">
            <?php get_template_part('templates/footer/footer', 'column1', $footer_option); ?>
            <?php get_template_part('templates/footer/footer', 'column2', $footer_option); ?>
            <?php get_template_part('templates/footer/footer', 'column3', $footer_option); ?>
            <?php get_template_part('templates/footer/footer', 'column4', $footer_option); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<!-- Footer Section End -->
</body>

</html>
