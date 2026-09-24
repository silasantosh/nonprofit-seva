<?php
/**
 * Title: Donate page (80G + UPI/QR)
 * Slug: nonprofit-seva/donate-page
 * Categories: nonprofit-seva-pages
 * Description: Full donate page - 80G tax note front and center, UPI/QR layout, suggested amounts.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.25rem","right":"1.25rem"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;padding-top:1rem;padding-right:1.25rem;padding-bottom:1rem;padding-left:1.25rem">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><strong>Your donation is eligible for 50% tax exemption under Section 80G</strong> of the Income Tax Act. Replace this note with your own 80G registration details.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Give with UPI</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Scan with any UPI app - GPay, PhonePe, Paytm, BHIM. Add your QR image below.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"border":{"radius":"8px","width":"2px","style":"dashed","color":"var:preset|color|subtle"},"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"1rem","right":"1rem"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="border-color:var(--wp--preset--color--subtle);border-style:dashed;border-width:2px;border-radius:8px;padding-top:3rem;padding-right:1rem;padding-bottom:3rem;padding-left:1rem">
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">Your UPI QR code image goes here. Tap this box, replace it with an Image block, upload your QR.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">UPI ID: yourorg@upi - replace with yours</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">Or give online</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Install the free GiveWP plugin and place its donation form block here - this theme styles it to look native. Cards, netbanking and more through your own payment account. Add a consent checkbox to the form and link your Privacy Policy - by donating, visitors share their name, email and PAN (for the 80G receipt) with your NGO only.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Donate online</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Suggested: Rs 500 feeds a child for a week - tell donors what each amount does.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
