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
					//vars
					$officer_name = get_sub_field('officer_name');
					$officer_title = get_sub_field('officer_title');
					$officer_image = get_sub_field('officer_image');
					?>

					<?php if( $officer_name ): ?>
						<p><?php echo $officer_name; ?></p>
					<?php endif; ?>

					<?php if( $officer_title ): ?>
						<p><?php echo $officer_title; ?></p>
					<?php endif; ?>

					<img src="<?php echo $officer_image['url']; ?>" alt="<?php echo $officer_image['alt'] ?>" />
			<?php
	    endwhile;
	else :
	    // no rows found
	endif;

	//TRUSTEES
	// check if the repeater field has rows of data
	if( have_rows('trustees') ):
		// loop through the rows of data
			while ( have_rows('trustees') ) : the_row();
				//vars
				$trustee_name = get_sub_field('trustee_name');
				$trustee_title = get_sub_field('trustee_title');
				$trustee_image = get_sub_field('trustee_image');
				?>

				<?php if( $officer_name ): ?>
					<p><?php echo $officer_name; ?></p>
				<?php endif; ?>

				<?php if( $officer_title ): ?>
					<p><?php echo $officer_title; ?></p>
				<?php endif; ?>

				<img src="<?php echo $trustee_image['url']; ?>" alt="<?php echo $trustee_image['alt'] ?>" />

			<?php
			endwhile;
	else :
			// no rows found
	endif;

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
