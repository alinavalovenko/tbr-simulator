<?php get_header(); ?>
<div id="primary" class="content-area row">
	<main id="main" class="site-main col-sm-8" role="main">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content', get_post_format() );
				// End the loop.
			endwhile;
			// Previous/next page navigation.
			the_posts_pagination(
				array(
					'prev_text'          => __( 'Previous page', 'tbr' ),
					'next_text'          => __( 'Next page', 'tbr' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'tbr' ) . ' </span>',
				)
			);
		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
	</main>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
