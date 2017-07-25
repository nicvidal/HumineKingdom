<?php
/**
 * The sidebar containing the main widget area
 *
 * @package HumineCraft Theme
 * @subpackage HumineCraft Theme
 * @since 1.0
 * @version 2.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->