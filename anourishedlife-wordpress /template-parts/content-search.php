<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ANourishedLife
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<img class="img-fluid d-block mb-4" style=" height: 200px; object-fit: cover;" width="100%" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ), 'full' ); ?>">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php anourishedlife_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<a href='<?php the_permalink(); ?>'><button style="font-size: 12px;" class="btn btn-secondary">Keep Reading ↠</button></a>
	<footer class="entry-footer py-2">
		<?php anourishedlife_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
