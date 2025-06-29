<?php 
/**
 * Title: Grid of posts in two columns.
 * Slug: alla/posts-grid-2col
 * Categories: posts
 * Block Types: core/query
 */
 ?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":2}} -->
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--large)">
      <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
      <!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
      <!-- wp:group {"layout":{"type":"flex"},"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"x-small"} -->
      <div class="wp-block-group has-x-small-font-size" style="margin-top:10px">
        <!-- wp:post-date /-->
        <!-- wp:paragraph -->
        <p>·</p>
        <!-- /wp:paragraph -->
        <!-- wp:post-author-name {"isLink":true} /-->
      </div>
      <!-- /wp:group -->
      <!-- wp:post-excerpt {"moreText":"Read More →","excerptLength":20,"fontSize":"small"} /-->
    </div>
    <!-- /wp:group -->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination -->
    <!-- wp:query-pagination-previous /-->
    <!-- wp:query-pagination-next /-->
  <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->