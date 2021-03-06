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
	if( have_rows('officers') ): ?>

		<h2>Officers</h2>

	  <?php
		// loop through the rows of data
	    while ( have_rows('officers') ) : the_row();
					//vars
					$officer_name = get_sub_field('officer_name');
					$officer_title = get_sub_field('officer_title');
					$officer_image = get_sub_field('officer_image');
					$officer_link = get_sub_field('officer_link');
					?>
					<div class="col-sm-4">
							<?php if( $officer_name ): ?>
								<p><?php echo $officer_name; ?></p>
							<?php endif; ?>

							<?php if( $officer_title ): ?>
								<p><?php echo $officer_title; ?></p>
							<?php endif; ?>

							<?php if( $officer_link ): ?>
								<a href="<?php echo $officer_link; ?>">
							<?php endif; ?>
								<img src="<?php echo $officer_image['url']; ?>" alt="<?php echo $officer_image['alt'] ?>" />
								<?php if( $officer_link ): ?>
										</a>
								<?php endif; ?>
					</div>

				<?php
			  endwhile;

	else :
	    // no rows found
	endif;

	//TRUSTEES
	// check if the repeater field has rows of data
	if( have_rows('trustees') ): ?>

		<h2>Trustees</h2>
		<?php
		// loop through the rows of data
			while ( have_rows('trustees') ) : the_row();
				//vars
				$trustee_name = get_sub_field('trustee_name');
				$trustee_title = get_sub_field('trustee_title');
				$trustee_image = get_sub_field('trustee_image');
				$trustee_link = get_sub_field('trustee_link');
				?>
				<div class="col-sm-4">
					<?php if( $trustee_name ): ?>
						<p><?php echo $trustee_name; ?></p>
					<?php endif; ?>

					<?php if( $trustee_title ): ?>
						<p><?php echo $trustee_title; ?></p>
					<?php endif; ?>

					<?php if( $trustee_link ): ?>
						<a href="<?php echo $trustee_link; ?>">
					<?php endif; ?>
					<img src="<?php echo $trustee_image['url']; ?>" alt="<?php echo $trustee_image['alt'] ?>" />
					<?php if( $officer_link ): ?>
							</a>
					<?php endif; ?>

				</div>
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
					//vars
					$regional_image = get_sub_field('regional_image');
					$regional_information = get_sub_field('regional_information');
					?>

					<img src="<?php echo $regional_image['url']; ?>" alt="<?php echo $regional_image['alt'] ?>" />

					<?php if( $regional_information ): ?>
						<p><?php echo $regional_information; ?></p>
					<?php endif; ?>

					<?php
			endwhile;
	else :
			// no rows found
	endif;
	?>



	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'naga' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
