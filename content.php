<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package vietmoz base 1.0 
 * @since vietmoz base 1.0 
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( is_single() ): ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-meta">
				<span class="entry-date"><?php echo get_the_date(); ?></span>
				<?php if ( comments_open() ) : ?>
					<div class="comments-link">
						<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
					</div><!-- .comments-link -->
				<?php endif; // comments_open() ?>
			</div> <!-- .entry-meta -->
		</header><!-- .entry-header -->

		<?php if ( ! is_single() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<section class="entry-content">
			<?php the_content(); ?>
		</section><!-- .entry-content -->
		<?php endif; ?>
		<footer class="entry-meta">
			<div class="tag-list">
				<?php the_tags(); ?>
			</div>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->