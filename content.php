<?php
/**
 * @package Melany
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'hero-unit' ); ?>>
	<header class="page-header">
		<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta muted">
			<small><?php melany_posted_on();
					/* Check categories for this blog */
					if( melany_categorized_blog() ){
						$category_list = get_the_category_list( __( ', ', 'melany' ) );
						printf( __( ' in %1$s', 'melany' ), $category_list );
					}
				?></small>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content clearfix">
		<?php melany_the_content( __( 'Continue reading', 'melany' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'melany' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="well well-small">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'melany' ) );
				if ( $categories_list && melany_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'melany' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'melany' ) );
				if ( $tags_list ) :
			?>
			<span class="sep"> | </span>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'melany' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="sep"> | </span>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'melany' ), __( '1 Comment', 'melany' ), __( '% Comments', 'melany' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'melany' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
