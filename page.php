<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

$stylePath = "styles/css/content.min.css";
include(locate_template('header.php'));
?>

        	<?php if( get_field('heading_background_class') ): ?>
				<div class="<?php the_field('heading_background_class'); ?>">
					<?php the_title( '<h1>', '</h1>' ); ?>									
				</div>
			<?php endif; ?>


            </header>
<section class="<?php ( get_field('section_content_class') )?  the_field('section_content_class') :""; ?>"> 
	<div class="container">

		<?php
		while ( have_posts() ) : the_post();

		the_content();

		endwhile; // End of the loop.
		?>
		<?php
		while ( have_posts() ) : the_post();

		the_content();

		endwhile; // End of the loop.
		?>
		<?php
		while ( have_posts() ) : the_post();

		the_content();

		endwhile; // End of the loop.
		?>
		<?php
		while ( have_posts() ) : the_post();

		the_content();

		endwhile; // End of the loop.
		?>

	</div><!-- #conatiner -->
</section><!-- .wrap -->

<?php get_footer();


