<?php
/**
 * @package Melany
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'jumbotron' ); ?>>
	<header class="page-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
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

	<?php if ( is_search() || is_home() || is_archive() ) : // Display Excerpts for blog homepage, archives and search ?>
	<div class="entry-summary clearfix">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content clearfix">
		<?php the_content( __( 'Continue reading', 'melany' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'melany' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

<?php if ( 'post' == get_post_type() ) : // Hide tag text for pages on Search ?>
	<?php $tags_list = get_the_tag_list( '', __( ' - ', 'melany' ) );
		if ( $tags_list ) : ?>

	<footer class="panel panel-success">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo __( 'Tags', 'melany' ); ?></h3>
		</div><!-- .panel-heading -->
		<div class="panel-body">
			<?php printf( __( '%1$s', 'melany' ), $tags_list ); ?>
		</div><!-- .panel-body -->
	</footer><!-- .panel-success -->

	<?php endif; // End if $tags_list ?>
<?php endif; // End if 'post' ?>
</article><!-- #post-## -->
