<?php
/*
Template Name: Home
*/
?>

<div class="homepage">

<?php get_header(); ?>

<div id="content" class="site-content">

<h1 class="hero-text mt5 mb2"><?php the_field('hero_text'); ?></h1>

<p class="subhead mb3"><?php the_field('subhead'); ?></p>

<a class="btn big display-inline-block" href="<?php the_field('button_link'); ?>"><?php the_field('button_text'); ?></a>

</div>
