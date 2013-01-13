<?php
/**
 * @package WordPress
 * @subpackage ehemm
 * Template Name: No Aside
 */
?>
<?php get_header(); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article id="page-<?php the_ID(); ?>" class="center columnsx9">
				
				<div class="postcontent columnsx9 spacebottomx4">
					<hgroup>
						<h2><?php the_title(); ?></h2>
						<h3><?php get_custom_field_data('ehemm_subtitol', true); ?></h3>
					</hgroup>
					<?php the_content(); ?>
				</div>
				
			</article>
		
		<?php endwhile; ?>

<?php get_footer(); ?>