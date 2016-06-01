<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package UnderSkeleton
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">

    <div class="row">

  		<div class="site-info">
  			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underskeleton' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'underskeleton' ), 'WordPress' ); ?></a>
  			<span class="sep"> | </span>
  			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'underskeleton' ), 'underskeleton', '<a href="http://dvlopes.github.io" rel="designer">Diego Versiani</a>' ); ?>
  		</div><!-- .site-info -->

    </div><!-- .row -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
