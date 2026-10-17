<?php
/**
 * Title: Main Banner Section
 * Slug: wens-beats/main-banner
 * Categories: wens-beats
 *
 * @package wens-beats
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/one.jpg","dimRatio":30,"customOverlayColor":"#3f4241","isUserOverlayColor":false,"minHeight":800,"minHeightUnit":"px","contentPosition":"center center","sizeSlug":"large","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:800px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/one.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim" style="background-color:#3f4241"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><mark style="background-color:rgba(0, 0, 0, 0);color:#ff6900" class="has-inline-color"><strong><?php echo esc_html__( '21 Sept', 'wens-beats' ); ?></strong></mark><?php echo esc_html__( 'Themel Street', 'wens-beats' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"typography":{"lineHeight":"0.8"},"spacing":{"margin":{"top":"12px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:12px;line-height:0.8"><!-- wp:paragraph {"style":{"typography":{"fontSize":"45px"}},"fontFamily":"aclonica"} -->
<p class="has-aclonica-font-family" style="font-size:45px"><?php echo esc_html__( 'this week', 'wens-beats' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"70px"}}} -->
<h2 class="wp-block-heading" style="font-size:70px"><strong><?php echo esc_html__( 'Purple House', 'wens-beats' ); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-orange"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-luminous-vivid-orange-background-color has-background wp-element-button" href="#"><?php echo esc_html__( 'Get Tickets', 'wens-beats' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'More Information', 'wens-beats' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->