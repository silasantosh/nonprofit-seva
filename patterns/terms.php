<?php
/**
 * Title: Terms of Use starter
 * Slug: nonprofit-seva/terms
 * Categories: nonprofit-seva-pages
 * Description: Starter terms of use - voluntary donations, 80G receipts, refund contact. Lawyer review before publishing.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.25rem","right":"1.25rem"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;padding-top:1rem;padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem">
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><strong><?php echo esc_html__( 'Starter template.', 'nonprofit-seva' ); ?></strong> <?php echo esc_html__( 'Replace every bracketed line with your own details and have a lawyer review before you rely on it.', 'nonprofit-seva' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'Donations are voluntary', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'Every donation on this site is a voluntary gift to [organisation name]. It is not a purchase and creates no membership or ownership right.', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html__( '80G tax receipts', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'Donations are eligible for deduction under Section 80G of the Income Tax Act as per our registration [number, validity dates]. Receipts are issued by us to the name and PAN you provide - check them while donating. Tax benefit depends on your own tax situation; we cannot advise on that.', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'Refunds and cancellations', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'If a donation was made by mistake or charged incorrectly, write to [email] within [X] days and we will review it. Donations are otherwise final.', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'Using this site', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html__( 'Content here is for general information about our work. Do not misuse this site, its donation channels or our name. We may update these terms; the date of the latest version is [date].', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'Contact', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph -->
	<p><?php echo esc_html__( '[Organisation name], [address]. Email: [email]. Phone: [number].', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
