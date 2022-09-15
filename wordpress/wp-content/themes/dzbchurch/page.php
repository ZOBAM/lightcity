<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
?>
    <h1 class="text-center">
        <?php the_title() ?>
    </h1>
    <section class="p-4">
        <?php the_content() ?>
    </section>
<?php
} ?>

<?php get_footer();
