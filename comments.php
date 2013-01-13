<?php
/**
 * @package WordPress
 * @subpackage ehemm
 */
?>		
		<?php if ( post_password_required() ) : ?>
		
			<hr class="postseparator center columnsx9 spacebottomx2 clear" />
			
			<div id="comments" class="center columnsx9">			
				<h3 class="nopassword">Esta entrada está protegida con contraseña.</h3>
				<h3><a href="<?php echo wp_login_url( get_permalink() ); ?>">Accede para ver los comentarios.</a></h3>				
			</div><!-- #comments -->
	
		<?php
				/* Stop the rest of comments.php from being processed,
				 * but don't kill the script entirely -- we still have
				 * to fully load the template.
				 */
				return;
			endif; 
		?>
		
		
		<?php if ( have_comments() ) : ?>
		
			<hr class="postseparator center columnsx9 spacebottomx2 clear" />
		
			<div id="comments" class="center columnsx9">
		
				<h3><?php comments_number( '0 comentarios', '1 comentario', '% comentarios' ); ?></h3>
	
				<article id="comment-<?php comment_ID(); ?>" class="center columnsx9">
				
					<?php foreach ($comments as $comment) : ?>
	
						<aside class="small2 columnsx2 spacebottomx2">
							<?php echo get_avatar( $comment, 40 ); ?>
							<ul>
								<li><b><?php comment_author_link() ?></b></li>
								<li><time pubdate datetime="<?php comment_date('c') ?>"><?php comment_date('d\/m\/Y \a \l\a\s g:i') ?></time></li>
							</ul>
						</aside>
		
						<div class="comment columnsx7 columngapleft spacebottomx4">
							<?php if ($comment->comment_approved == '0') { ?>
								<p class='unapprovedcomment'>Tu comentario está a la espera de ser aprobado por el administrador.</p>
							<?php } ?>
							<?php comment_text() ?>
						</div>
		
					</article>
				
				<?php endforeach; /* end for each comment */ ?>
				
			</div><!-- #comments -->
		
		<?php else : // This is displayed if there are no comments so far ?>
		
			<?php if ( comments_open() ) : ?>
				<!-- If there are no comments and comments are open -->
			<?php else : // comments are closed ?>
				<!-- If there are no comments and comments are closed -->
			
				<hr class="postseparator center columnsx9 spacebottomx2 clear" />
				
				<div id="comments" class="center columnsx9 spacebottomx4">			
					<h3>Los comentarios están cerrados.</h3>				
				</div><!-- #comments -->
			<?php endif; ?>
			
		<?php endif; ?>
		
		
		<?php if ( comments_open() ) : ?>
		
			<hr class="postseparator center columnsx9 spacebottomx2 clear" />
						
			<div id="reply" class="center columnsx9">
			
			<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : // If registration is required and user is not logged in ?>
			
					<h3>Necesitas estar <a href="<?php echo wp_login_url( get_permalink() ); ?>">registrado</a> para poder comentar.</h3>
					
				</div><!-- #reply -->
			
			<?php else : // If registration is not required ?>
			
					<h3>Podrías comentar algo</h3>
					
					<form method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
		
						<div class="columnsx2 spacebottomx4">
						
							<?php if ( is_user_logged_in() ) : // If user is logged in we display his identity ?>
							
								<p>&nbsp;</p>
								<p class="spacebottom">Hola de nuevo <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><b><?php echo $user_identity; ?></b></a>.</p>
								<p class="spacebottom">Puedes empezar a comentar,<br />o <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">desconectarte</a>.</p> 
							
							<?php else : // If user is not logged in then we display the normal name/email/website fields ?>
		
								<label for="author">
									<p>Nombre<?php if ($req) echo ' *'; ?></p>
									<input type="text" class="inputcomment commentform" name="author" id="author" placeholder="Puedes usar un pseudónimo" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo 'required'; ?> />
								</label>
			
								<label for="email">
									<p>Email<?php if ($req) echo ' *'; ?></p>
									<input type="email" class="inputcomment commentform" name="email" id="email" placeholder="Tranquilo/a, no se mostrará" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo 'required'; ?> />
								</label>
			
								<label for="url">
									<p>Web / Blog / Twitter / Algo</p>
									<input type="url" class="inputcomment commentform" name="url" id="url" placeholder="Publicita tu web, si quieres" tabindex="3" value="<?php echo esc_attr($comment_author_url); ?>" />
								</label>
								
								<?php if ($req) echo '<p class="requiredtext small">*Obligatorios</p>'; ?>
							
							<?php endif; // In any case a textarea for the comment and the send button are shown ?>
							
							<input type="submit" class="commentbutton" name="submit" id="submit" value="Enviar" tabindex="6" />
		
						</div>
						
						<div class="columnsx7 columngapleft spacebottomx4">
							<textarea class="textareacomment commentform" name="comment" id="comment" placeholder="Aquí es donde va tu comentario. Sientete libre de decir lo que quieras, pero te recomiendo que te mires primero la página «Comentarios y privacidad», he tratado de mantenerla corta, no son más que un par de párrafos con unas normas básicas de convivencia y respeto. Al hacer click en el botón de enviar de este formulario estas aceptando dichas normas. No te molesto más, te dejo escribir ya tu comentario tranquilamente, será un placer leer tu opinión al respecto del texto, o del tema que se trata en el mismo." tabindex="4" required></textarea>
						</div>
		
						<?php comment_id_fields(); ?>
		
					</form>
					
				</div><!-- #reply -->
			
			<?php endif; ?>
			
			<?php else : // This is displayed if comments are closed ?>
			
			<?php endif; ?>