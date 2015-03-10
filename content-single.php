<?php
/**
 * @package NAGA
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- ACF Hero Image -->
	<?php
	$image = get_field('hero_image');
	if( !empty($image) ): ?>
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endif; ?>

<div id="content" class="site-content">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php naga_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'naga' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php naga_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
