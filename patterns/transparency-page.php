<?php
/**
 * Title: Transparency page (80G, 12A, FCRA, CSR-1)
 * Slug: nonprofit-seva/transparency-page
 * Categories: nonprofit-seva-pages
 * Description: Compliance and trust page - certificates, annual reports and financials as downloads.
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php echo esc_html__( 'Every certificate, report and filing, in one place. Donors and CSR teams check this page before they give.', 'nonprofit-seva' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--60)"><?php echo esc_html__( 'Registrations', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:list -->
	<ul>
		<li><?php echo esc_html__( 'Society / Trust registration no: replace with yours', 'nonprofit-seva' ); ?></li>
		<li><?php echo esc_html__( 'PAN: replace with yours', 'nonprofit-seva' ); ?></li>
		<li><?php echo esc_html__( '80G registration: replace with yours', 'nonprofit-seva' ); ?></li>
		<li><?php echo esc_html__( '12A registration: replace with yours', 'nonprofit-seva' ); ?></li>
		<li><?php echo esc_html__( 'FCRA registration (if applicable): replace with yours', 'nonprofit-seva' ); ?></li>
		<li><?php echo esc_html__( 'CSR-1 registration (if applicable): replace with yours', 'nonprofit-seva' ); ?></li>
	</ul>
	<!-- /wp:list -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'Certificates and filings', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:file {"displayPreview":false} -->
	<div class="wp-block-file"><a href="#"><?php echo esc_html__( '80G certificate (PDF)', 'nonprofit-seva' ); ?></a><a href="#" class="wp-block-file__button wp-element-button" download><?php echo esc_html__( 'Download', 'nonprofit-seva' ); ?></a></div>
	<!-- /wp:file -->
	<!-- wp:file {"displayPreview":false} -->
	<div class="wp-block-file"><a href="#"><?php echo esc_html__( '12A certificate (PDF)', 'nonprofit-seva' ); ?></a><a href="#" class="wp-block-file__button wp-element-button" download><?php echo esc_html__( 'Download', 'nonprofit-seva' ); ?></a></div>
	<!-- /wp:file -->
	<!-- wp:file {"displayPreview":false} -->
	<div class="wp-block-file"><a href="#"><?php echo esc_html__( 'FCRA certificate (PDF)', 'nonprofit-seva' ); ?></a><a href="#" class="wp-block-file__button wp-element-button" download><?php echo esc_html__( 'Download', 'nonprofit-seva' ); ?></a></div>
	<!-- /wp:file -->
	<!-- wp:file {"displayPreview":false} -->
	<div class="wp-block-file"><a href="#"><?php echo esc_html__( 'CSR-1 registration (PDF)', 'nonprofit-seva' ); ?></a><a href="#" class="wp-block-file__button wp-element-button" download><?php echo esc_html__( 'Download', 'nonprofit-seva' ); ?></a></div>
	<!-- /wp:file -->

	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php echo esc_html__( 'Annual reports and audited financials', 'nonprofit-seva' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:file {"displayPreview":false} -->
	<div class="wp-block-file"><a href="#"><?php echo esc_html__( 'Annual report 2025-26 (PDF)', 'nonprofit-seva' ); ?></a><a href="#" class="wp-block-file__button wp-element-button" download><?php echo esc_html__( 'Download', 'nonprofit-seva' ); ?></a></div>
	<!-- /wp:file -->
	<!-- wp:file {"displayPreview":false} -->
	<div class="wp-block-file"><a href="#"><?php echo esc_html__( 'Audited financials 2025-26 (PDF)', 'nonprofit-seva' ); ?></a><a href="#" class="wp-block-file__button wp-element-button" download><?php echo esc_html__( 'Download', 'nonprofit-seva' ); ?></a></div>
	<!-- /wp:file -->
</section>
<!-- /wp:group -->
