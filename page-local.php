<?php
/**
 * Template Name: PageLocal
 *
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php
		// Start the loop.
		$args =  array(
			'post_type' => 'tribe_organizer',
			'orderby' => 'menu_order',
			'order' => 'ASC'
		);

		$custom_query = new WP_Query( $args );
		while ($custom_query->have_posts()) :
			$custom_query->the_post();

			// Include the page content template.
			get_template_part( 'template-parts/local', 'tribe_organizer' );

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
