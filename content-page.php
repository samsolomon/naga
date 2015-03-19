<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package NAGA
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- ACF Hero Image -->
	<?php
	$image = get_field('hero_image');
	if( !empty($image) ): ?>
		<img class="hero-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endif; ?>

<div id="content" class="site-content">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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

	<!-- ABOUT PAGE  -->
	<?php
	// OFFICERS
	// check if the repeater field has rows of data
	if( have_rows('officers') ):
	 	// loop through the rows of data
	    while ( have_rows('officers') ) : the_row();
					//variables
					$name = get_sub_field('name');
					$title = get_sub_field('title');
					$image = get_sub_field('image');
					?>

					<?php if( $name ): ?>
						<p><?php echo $name; ?></p>
					<?php endif; ?>

					<?php if( $title ): ?>
					<p><?php echo $title; ?></p>
					<?php endif; ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

			<?php
			endwhile;
	else :
	    // no rows found
	endif;
?>
<?php
	//TRUSTEES
	// check if the repeater field has rows of data
	if( have_rows('trustees') ):
		// loop through the rows of data
			while ( have_rows('trustees') ) : the_row(); ?>
					<p><?php the_sub_field('trustee_name');?></p>
					<p><?php the_sub_field('trustee_title');?></p>
					<img src="<?php trustee_image('image'); ?>" alt="<?php trustee_image('alt'); ?>" />
			<?php
			endwhile;
	else :
			// no rows found
	endif;
?>

<?php
	//REGIONAL ASSOCIATIONS
	// check if the repeater field has rows of data
	if( have_rows('regional_associations') ):
		// loop through the rows of data
			while ( have_rows('regional_associations') ) : the_row();
					// display a sub field value
					the_sub_field('regional_image');
					the_sub_field('regional_information');
			endwhile;
	else :
			// no rows found
	endif;
	?>



	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'naga' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
