<?php
/**
 * Title: Hero - home
 * Slug: nonprofit-seva/hero-home
 * Categories: nonprofit-seva-sections
 * Description: A type-led hero that looks complete with no logo and no photos.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
	<h1 class="wp-block-heading has-text-align-center has-huge-font-size"><?php echo esc_html__( 'Every rupee reaches the work.', 'nonprofit-seva' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php echo esc_html__( 'Say who you help and how, in one honest sentence. This section needs no logo and no photos to look complete.', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Donate', 'nonprofit-seva' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'See our work', 'nonprofit-seva' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
