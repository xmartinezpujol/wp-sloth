<?php
/**
 * Displays content for front page
 *
*/
?>
<article id="post-<?php the_ID(); ?>" >
	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'sloth-featured-image' );

		$post_thumbnail_id = get_post_thumbnail_id( $post->ID );

		$thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'sloth-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail_attributes[2] / $thumbnail_attributes[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<?php the_title( '<h2 class="center-txt">', '</h2>' ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content();
				?>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
