<?php
/**
 * @package WordPress
 * @subpackage ehemm
 */
?>
<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

	<head>

		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1">
		
		<title><?php
			global $page, $paged; 
			wp_title('-', true, 'right');
			bloginfo('name');
			$site_description = get_bloginfo('description', 'display');
			if ( $site_description && ( is_home() || is_front_page() ) ) {
				echo " - $site_description";
			}
		?></title>
		
		<link type="text/css" rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
		
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<!--[if lt IE 9]>
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.scroll.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sharrre-1.3.0.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.showHide.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$('.show_hide').showHide({
					speed: 500,
					changeText: 0
				});
			});
		</script>
		
		<?php wp_head(); ?>
		
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-375607-14']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		
	</head>


	<body>

		<header id="upstairs" class="spacebottomx2">
			<div class="headerbackground">

				<div class="header center columnsx9">
					<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
					<div id="headermenu">
						<a class="twittermenu squaredbutton headerextras roundedcorners" href="//twitter.com/#!/ehemm_net"></a>
						<a class="rss squaredbutton headerextras roundedcorners columngapleft" href="<?php bloginfo('rss2_url'); ?>"></a>
						<a class="menubutton headerextras roundedcorners columngapleft show_hide" href="#" rel="#menu_hidden"></a>
					</div><!-- #headermenu -->
				</div>


				<nav id="menu_hidden" class="center columnsx9">
				
					<div class="columnsx2 margintop spacebottomx2">
						<?php if ( !dynamic_sidebar('header1') ) : ?>
							<h4>Páginas</h4>
							<ul>
								<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
							</ul>
						<?php endif; ?>
					</div>

					<div class="columnsx2 columngapleft margintop spacebottomx2">
						<?php if ( !dynamic_sidebar('header2') ) : ?>
							<h4>Categorías</h4>
							<ul>
								<?php wp_list_categories('orderby=name&show_count=1&title_li='); ?>
							</ul>
						<?php endif; ?>
					</div>
	
					<div class="columnsx2 columngapleft margintop spacebottomx2">
						<?php if ( !dynamic_sidebar('header3') ) : ?>
							<h4>Archivo mensual</h4>
							<ul>
								<?php wp_get_archives('type=monthly'); ?>
							</ul>
						<?php endif; ?>
					</div>
					
					<div class="columnsx3 columngapleft spacebottomx2">
						<?php get_search_form(); ?>
						<?php dynamic_sidebar('header4'); ?>
					</div>

				</nav><!-- #menu_hidden -->


			</div><!-- .headerbackground -->

			<div class="headerbottom clear"></div>

		</header>