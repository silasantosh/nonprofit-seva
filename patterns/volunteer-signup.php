<?php
/**
 * Title: Volunteer signup
 * Slug: nonprofit-seva/volunteer-signup
 * Categories: nonprofit-seva-sections
 * Description: Get involved section with no-plugin fallback actions.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-muted-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Volunteer with us', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html__( 'Two hours a week changes a life. Tell us how you want to help.', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Place any free form plugin\'s block here - or keep the buttons below, they work with no plugin at all. With a form, add a consent checkbox and link your Privacy Policy: by submitting, visitors agree to be contacted about volunteering.', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.org"><?php echo esc_html__( 'Email us to volunteer', 'nonprofit-seva' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://wa.me/910000000000"><?php echo esc_html__( 'WhatsApp us', 'nonprofit-seva' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
