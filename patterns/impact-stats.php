<?php
/**
 * Title: Impact stats row
 * Slug: nonprofit-seva/impact-stats
 * Categories: nonprofit-seva-sections
 * Description: Big numbers and plain labels. Works with zero photography.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large","style":{"typography":{"fontWeight":"800"},"color":{"text":"var:preset|color|accent"}}} -->
			<h3 class="wp-block-heading has-text-align-center has-text-color has-x-large-font-size" style="color:var(--wp--preset--color--accent);font-weight:800"><?php echo esc_html__( '12,400', 'nonprofit-seva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo esc_html__( 'Meals served', 'nonprofit-seva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large","style":{"typography":{"fontWeight":"800"},"color":{"text":"var:preset|color|accent"}}} -->
			<h3 class="wp-block-heading has-text-align-center has-text-color has-x-large-font-size" style="color:var(--wp--preset--color--accent);font-weight:800"><?php echo esc_html__( '38', 'nonprofit-seva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo esc_html__( 'Villages reached', 'nonprofit-seva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large","style":{"typography":{"fontWeight":"800"},"color":{"text":"var:preset|color|accent"}}} -->
			<h3 class="wp-block-heading has-text-align-center has-text-color has-x-large-font-size" style="color:var(--wp--preset--color--accent);font-weight:800"><?php echo esc_html__( '210', 'nonprofit-seva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php echo esc_html__( 'Active volunteers', 'nonprofit-seva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
