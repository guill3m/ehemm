<?php
/**
 * @package WordPress
 * @subpackage ehemm
 */
?>
		<footer class="footer small centeredtext center columnsx9 clear">
		<?php if ( !dynamic_sidebar('footer1') ) : ?>
			<p>Supongo que aquí esperabas encontrarte con lo típico de <q>gestionado con <a href="http://wordpress.org/" title="Wordpress &mdash; Gracias a esa maravillosa gente que lo creó, y la que lo mantiene y mejora, puedes estar leyendo esto ahora, un aplauso para todos ellos, en serio." target="_blank">Wordpress</a></q>, el nombre del theme (que no tiene), y el autor del mismo (mi amigo <a href="http://guillemandreu.com/es/" title="Guillem Andreu &mdash; Un amigo, diseñador gráfico (no dejeis de visitar su web, tiene cositas muy guays, de verdad), que tuvo la bondad de bendecir este blog con un diseño propio cuando le conté que iba a abrirlo, si no fuese por él estaría usando el theme por defecto del Wordpress, así que un gran aplauso para él también." target="_blank">Guillem</a>).</p>
			<p>También suele estar la licencia que protege estos textos. No tienen, pero si haces uso de ellos debes citar la fuente (es decir, con un enlace bien visible al post en concreto).</p>
			<p>Si no citas la fuente cuando uses uno de mis textos me enteraré, e iré a tu casa a decirte a la cara lo mala persona que eres, no lo dudes.</p>
			<p><b>Paz, amor, sexo, y rock'n'roll.</b> 2012</p>
		<?php endif; ?>
		</footer>
		
		<div class="go-upstairs scroll"><a href="#upstairs" class="small">Volver arriba</a></div>

		<script	type="text/javascript">
			$('.sharrre-twitter').sharrre({
				share: {
					twitter: true
				},
				enableHover: false,
				enableTracking: true,
				urlCurl: '<?php bloginfo('template_url'); ?>/js/sharrre.php',
				template: '<li class="twitter"><a href="#" class="share">Tuitearlo, que no cuesta nada.</a><a href="#" class="count">{total}</a></li>',
				buttons: { twitter: {via: 'ehemm_net', lang: 'es'}},
				click: function(api, options){
					api.openPopup('twitter');
				}
			});
			$('.sharrre-facebook').sharrre({
				share: {
					facebook: true
				},
				enableHover: false,
				enableTracking: true,
				urlCurl: '<?php bloginfo('template_url'); ?>/js/sharrre.php',
				template: '<li class="facebook"><a href="#" class="share">Decir &quot;Me Gusta&quot; en Facebook.</a><a href="#" class="count">{total}</a></li>',
				buttons: { facebook: {lang: 'es_ES', action: 'like'}},
				click: function(api, options){
					api.openPopup('facebook');
				}
			});
			$('.sharrre-googleplus').sharrre({
				share: {
					googlePlus: true
				},
				enableHover: false,
				enableTracking: true,
				urlCurl: '<?php bloginfo('template_url'); ?>/js/sharrre.php',
				template: '<li class="googleplus"><a href="#" class="share">O hacerle un +1 en Google.</a><a href="#" class="count">{total}</a></li>',
				buttons: { googlePlus: {lang: 'es'}},
				click: function(api, options){
					api.openPopup('googlePlus');
				}
			});
		</script>

		<?php wp_footer(); ?>
		
	</body>
</html>