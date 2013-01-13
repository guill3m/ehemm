<?php
/**
 * @package WordPress
 * @subpackage ehemm
 */
?>
<?php get_header(); ?>

<?php $post_number = 0;
while (have_posts()) : the_post(); ?>

	<?php if($post_number) : ?>
	
		<hr class="postseparator center columnsx9 spacebottomx2 clear" />
		
	<?php endif; ?>
	
		<article id="post-<?php the_ID(); ?>" class="center columnsx9">
		
			<aside class="postinfo small columnsx2">
				<ul class="spacebottom">
					<li class="pubdate"><b><time pubdate datetime="<?php the_time('c'); ?>"><?php the_time('j\t\h F, Y'); ?></time></b>.</li>
					<li class="author"><?php the_author(); ?>.</li>
					<li class="category spacebottom"><?php the_category(', '); ?>.</li>
					<li class="commentnumber"><a href="<?php the_permalink(); ?>#reply"><b>Puedes dejar un comentario.</b></a><a href="<?php the_permalink(); ?>#comments" class="count"><b><?php comments_number( '0', '1', '%' ); ?></b></a></li>
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
					<h2><a href="<?php the_permalink(); ?>" title="Leer «<?php the_title_attribute(); ?>. <?php get_custom_field_data('ehemm_subtitol', true); ?>»"><?php the_title(); ?></a></h2>
					<h3><?php get_custom_field_data('ehemm_subtitol', true); ?></h3>
				</hgroup>
				<?php the_content("Continuar leyendo " . the_title('«', '»', false)); ?>
			</div>
			
		</article>
	
	<?php $post_number++; ?>

<?php endwhile; ?>

<?php get_footer(); ?>