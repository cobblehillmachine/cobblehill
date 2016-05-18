<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mid-cont">
		<h5><?php twentyfourteen_posted_on(); ?></h5>
		<div class="small-divider"></div>
		<?php

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				} 	
			endif;
		?>		
		<div class="cont"><div class="post-excerpt"><?php if(is_single()) { ?><?php the_content(); ?><?php } else { ?><?php the_excerpt(); ?><?php } ?></div></div>
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
			<div class="entry-meta">
				<span class="cat-links button">Posted in <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
				<?php if (!is_single()) { ?><a class="button post-btn" href="<?php the_permalink(); ?>">view post</a><?php } ?>
			</div>
		<?php endif; ?>
	</div>
</article><!-- #post-## -->
