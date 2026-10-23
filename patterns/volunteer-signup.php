<?php
/**
 * Title: Volunteer signup
 * Slug: nonprofit-seva/volunteer-signup
 * Categories: nonprofit-seva-sections
 * Description: Get involved section with no-plugin fallback actions.
 *
 * @package Nonprofit_Seva
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
	<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'Place a form block from a free forms plugin here, or replace the line below with your own contact details. With a form, add a consent checkbox and link your Privacy Policy: by submitting, visitors agree to be contacted about volunteering.', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html__( 'To volunteer, write to [your email address] or call [your phone number].', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
