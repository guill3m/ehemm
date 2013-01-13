<?php
/**
 * @package WordPress
 * @subpackage ehemm
 */
?>
<?php get_header(); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article id="page-<?php the_ID(); ?>" class="center columnsx9">
			
				<aside class="postinfo small columnsx2">
					<ul class="spacebottom">
						<li><b>Puedes hacer todo esto:</b></li>
						<div class="sharrre-twitter" data-url="<?php the_permalink(); ?>" data-text="«<?php the_title_attribute(); ?>. <?php get_custom_field_data('ehemm_subtitol', true); ?>»" data-title="Tuitearlo, que no cuesta nada."></div>
						<div class="sharrre-facebook" data-url="<?php the_permalink(); ?>" data-text="«<?php the_title_attribute(); ?>. <?php get_custom_field_data('ehemm_subtitol', true); ?>»" data-title="Decir &quot;Me Gusta&quot; en Facebook."></div>
						<div class="sharrre-googleplus" data-url="<?php the_permalink(); ?>" data-text="«<?php the_title_attribute(); ?>. <?php get_custom_field_data('ehemm_subtitol', true); ?>»" data-title="O hacerle un +1 en Google."></div>
					</ul>
					<?php if ( has_post_thumbnail()) {
					  $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
					  echo '<a href="' . $full_image_url[0] . '" title="' . get_custom_field_data('ehemm_titolimatge', false) . '" rel="shadowbox">';
					  the_post_thumbnail('thumbnail');
					  echo '</a>';
					} ?>
				</aside>
				
				<div class="postcontent columnsx7 columngapleft spacebottomx4">
					<hgroup>
						<h2><?php the_title(); ?></h2>
						<h3><?php get_custom_field_data('ehemm_subtitol', true); ?></h3>
					</hgroup>
					<?php the_content(); ?>
				</div>
				
			</article>
		
		<?php endwhile; ?>

<?php get_footer(); ?>