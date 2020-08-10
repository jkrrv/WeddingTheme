<?php
/**
 * Display Header Media Text
 *
 * @package Catch_Wedding
 */
?>
<?php
$header_media_title = get_theme_mod( 'catch_wedding_header_media_title', esc_html__( 'Diane and William', 'catch-wedding' ) );

$header_media_text = get_theme_mod( 'catch_wedding_header_media_text', esc_html__( 'Make things as simple as possible but no simpler.', 'catch-wedding' ) );

if ( '' !== $header_media_title || '' !== $header_media_text ) : ?>
<div class="custom-header-content sections header-media-section">
	<?php if ( '' !== $header_media_title ) : ?>
	<h2 class="entry-title"><?php echo wp_kses_post( $header_media_title ); ?></h2>
	<?php endif; ?>


	<p class="site-header-text"><?php echo wp_kses_post( $header_media_text ); ?>
</div>
<?php endif; ?>
