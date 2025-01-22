<?php
/**
 * Template Name: Template accueil
 */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="page-accueil" <?php post_class(); ?>>
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>