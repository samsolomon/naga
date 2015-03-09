<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<h1><?php the_field('hero_text'); ?></h1>

<p><?php the_field('subhead'); ?></p>

<a href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>

<?php get_footer(); ?>
