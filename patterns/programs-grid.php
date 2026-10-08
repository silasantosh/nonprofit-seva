<?php
/**
 * Title: Programs grid
 * Slug: nonprofit-seva/programs-grid
 * Categories: nonprofit-seva-sections
 * Description: Program cards that work with or without images.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Our programs', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"muted"} -->
		<div class="wp-block-column has-muted-background-color has-background" style="border-radius:8px;padding:1.5rem">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html__( 'Program one', 'nonprofit-seva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Who it helps, where, and what changes. Two honest sentences beat a stock photo.', 'nonprofit-seva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"muted"} -->
		<div class="wp-block-column has-muted-background-color has-background" style="border-radius:8px;padding:1.5rem">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html__( 'Program two', 'nonprofit-seva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Duplicate this card for each program. It looks complete with no images.', 'nonprofit-seva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"muted"} -->
		<div class="wp-block-column has-muted-background-color has-background" style="border-radius:8px;padding:1.5rem">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading"><?php echo esc_html__( 'Program three', 'nonprofit-seva' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Add a photo later if you have one - the card works without it.', 'nonprofit-seva' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
