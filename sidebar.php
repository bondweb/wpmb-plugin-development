<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * Based on the sidebar file from twenty sixteen with a hook added
 */
?>

<?php do_action( 'mbwp_sidebar' ); ?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
