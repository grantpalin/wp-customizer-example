<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress_Customizer_Example
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php if ( get_theme_mod( 'footer_logo' ) ) : ?>
				<img src='<?php echo esc_url( get_theme_mod( 'footer_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
			<?php endif; ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wordpress-customizer-example' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wordpress-customizer-example' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wordpress-customizer-example' ), 'wordpress-customizer-example', '<a href="https://automattic.com/" rel="designer">Grant Palin</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
