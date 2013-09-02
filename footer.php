<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Melany
 */
?>
		</main><!-- #main -->
	</section><!-- #content -->
</div><!-- #page -->

<footer id="colophon" <?php melany_footer_class(); ?> role="contentinfo">
	<div class="site-info navbar-text text-center">
		<small>
			<?php printf( '&copy; ' ); ?>
			<?php echo date( 'Y ' ); ?>
			<?php bloginfo( 'name' ); ?>
			<span class="sep"> - </span>
			<?php printf( __( 'Powered by ', 'melany' )); ?><a href="http://wordpress.org/" target="_blank" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'melany' ); ?>" rel="generator">WordPress</a>
			<span class="sep"> - </span>
			<?php printf( __( '%1$s theme by %2$s', 'melany' ), 'Melany', '<a href="http://www.deshack.net" target="_blank" rel="designer">deshack</a>' ); ?>
		</small>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
