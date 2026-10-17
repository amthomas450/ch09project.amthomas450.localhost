<?php
/**
 * Title: Playlist Section
 * Slug: wens-beats/playlist
 * Categories: wens-beats
 *
 * @package wens-beats
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"140px","top":"90px"}}},"layout":{"type":"constrained"},"anchor":"playlist-section"} -->
<div class="wp-block-group alignfull" id="playlist-section" style="padding-top:90px;padding-bottom:140px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"image-wrapper"} -->
<div class="wp-block-column image-wrapper"><!-- wp:group {"style":{"border":{"width":"20px"},"spacing":{"margin":{"top":"0px"}}},"borderColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-secondary-border-color" style="border-width:20px;margin-top:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/eight.jpg","dimRatio":0,"customOverlayColor":"#535759","isUserOverlayColor":false,"minHeight":600,"minHeightUnit":"px","contentPosition":"bottom center","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"left":"20px","bottom":"10px"}}},"layout":{"type":"constrained"},"anchor":"featured-image"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="margin-top:0px;margin-bottom:0px;padding-bottom:10px;padding-left:20px;min-height:600px" id="featured-image"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/eight.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#535759"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:audio {"id":22} -->
<figure class="wp-block-audio"><audio controls src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/mp3/track-one.mp3"></audio></figure>
<!-- /wp:audio -->

<!-- wp:audio {"id":23} -->
<figure class="wp-block-audio"><audio controls src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/mp3/track-two.mp3"></audio></figure>
<!-- /wp:audio -->

<!-- wp:audio {"id":21} -->
<figure class="wp-block-audio"><audio controls src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/mp3/track-one.mp3"></audio></figure>
<!-- /wp:audio --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"40px","padding":{"left":"70px","top":"10px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:10px;padding-left:70px"><!-- wp:group {"style":{"typography":{"lineHeight":"0.5"},"spacing":{"margin":{"top":"12px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"},"anchor":"section-title"} -->
<div id="section-title" class="wp-block-group" style="margin-top:12px;line-height:0.5"><!-- wp:paragraph {"style":{"typography":{"fontSize":"35px"}},"fontFamily":"aclonica"} -->
<p class="has-aclonica-font-family" style="font-size:35px"><?php echo esc_html__( 'Music', 'wens-beats' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"50px"}}} -->
<h2 class="wp-block-heading" style="font-size:50px"><strong><?php echo esc_html__( 'New Beats Music', 'wens-beats' ); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><strong><?php echo esc_html__( 'Beats Music', 'wens-beats' ); ?></strong><?php echo esc_html__( ' knows how to move your mind, body and soul by delivering tracks that stand out from the norm. As if this impressive succession of high impact, floor-filling bombs wasn’t enough to sustain.', 'wens-beats' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Sound Cloud', 'wens-beats' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
