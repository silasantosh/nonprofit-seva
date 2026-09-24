<?php
/**
 * Title: Impact stories
 * Slug: nonprofit-seva/impact-stories
 * Categories: nonprofit-seva-sections
 * Description: Recent stories as cards; strong with no photos.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center">Impact stories</h2>
	<!-- /wp:heading -->
	<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"muted","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-muted-background-color has-background" style="border-radius:8px;padding:1.5rem">
				<!-- wp:post-title {"isLink":true,"level":3} /-->
				<!-- wp:post-excerpt {"moreText":"Read the story","excerptLength":20} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Publish your first story and it appears here. Text-only stories look great - no photos needed.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
