<?php
/**
 * Title: About Section
 * Slug: wens-beats/about
 * Categories: wens-beats
 *
 * @package wens-beats
 * @since 1.0.0
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"140px"}}},"layout":{"type":"constrained"},"anchor":"about-section"} -->
<div class="wp-block-group alignfull" id="about-section" style="padding-top:90px;padding-bottom:140px"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"image-wrapper"} -->
<div class="wp-block-column image-wrapper"><!-- wp:group {"style":{"border":{"width":"20px"},"spacing":{"margin":{"top":"0px"}}},"borderColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-secondary-border-color" style="border-width:20px;margin-top:0px"><!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/two.jpg","dimRatio":0,"customOverlayColor":"#3a2049","isUserOverlayColor":false,"minHeight":500,"minHeightUnit":"px","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"left":"0px"}}},"layout":{"type":"constrained"},"anchor":"featured-image"} -->
<div class="wp-block-cover" style="margin-top:0px;margin-bottom:0px;padding-left:0px;min-height:500px" id="featured-image"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/two.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#3a2049"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"40px","padding":{"left":"70px","top":"50px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:50px;padding-left:70px"><!-- wp:group {"style":{"typography":{"lineHeight":"0.5"},"spacing":{"margin":{"top":"12px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"},"anchor":"section-title"} -->
<div id="section-title" class="wp-block-group" style="margin-top:12px;line-height:0.5"><!-- wp:paragraph {"style":{"typography":{"fontSize":"35px"}},"fontFamily":"aclonica"} -->
<p class="has-aclonica-font-family" style="font-size:35px"><?php echo esc_html__( 'Welcome', 'wens-beats' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"50px"}}} -->
<h2 class="wp-block-heading" style="font-size:50px"><strong><?php echo esc_html__( 'New Era Music', 'wens-beats' ); ?></strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Having enjoyed a breathlessly successful 2015, there can be no doubting', 'wens-beats' ); ?> <strong><?php echo esc_html__( 'Beats Music', 'wens-beats' ); ?></strong> <?php echo esc_html__( 'position as one of the most influential electronic artists of the moment. Continues to transition rapidly from the techno underground.', 'wens-beats' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More', 'wens-beats' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->