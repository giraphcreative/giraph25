<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
$admin_email = get_option( 'admin_email' );
?>
	
	</section>
	
	<footer class="footer">
		<div class="column">
			<img src="<?php bloginfo( 'template_url' ) ?>/img/logo-white.svg" class="logo-footer">
		</div>
		<div class="column">
			<?php the_field( 'footer_address', 'option' ); ?>
		</div>
	</footer>

</div><!-- #container -->

<?php wp_footer(); ?>
<div class="lightbox-container">
	<div class="lightbox">
		<a class="lightbox-close">X</a>
		<div class="lightbox-inner">
			<div class="column image">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/loading.gif" />
			</div>
			<div class="column content">
				<p>Vestibulum sit amet nulla imperdiet nunc facilisis finibus vel sed odio. Praesent enim metus, auctor id mollis vel, ullamcorper vitae lacus. Nulla commodo magna a lorem ultrices, ut pharetra diam pretium. Donec a lorem in nunc ultricies fringilla sed sed purus. Pellentesque a consequat urna. Curabitur in quam nec enim tempus convallis sed vel ipsum. Nullam vehicula, leo vel efficitur sodales, massa dolor tincidunt tellus, non pellentesque nisi neque eget orci. Nullam scelerisque pulvinar leo id consectetur. Curabitur at pellentesque ligula, a iaculis ante. Praesent nisl sem, semper ac hendrerit vitae, venenatis non nunc. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In interdum, enim sit amet consectetur cursus, ante mi imperdiet sem, non lobortis neque enim ac justo. Donec elit ipsum, lacinia sed enim in, pretium fermentum tellus.</p>
				<p>Ut nec mauris aliquet, ornare neque id, semper nisi. Nam fringilla ante elit, sit amet lobortis metus suscipit et.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>