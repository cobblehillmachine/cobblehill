<?php get_header(); ?>

<div class="page-header cont gradient">
	<div class="mid-cont">
		<h5><?php the_title(); ?></h5>
		<h1><span><?php the_field('page_headline'); ?></span></h1>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>
<div id="featured-cont" class="cont">
	<?php query_posts(array('post_type' => 'Featured Works', 'order' => 'DESC', 'posts_per_page' => 10)); ?>
			<?php while ( have_posts() ) : the_post(); ?>	
				<div id="<?php echo strtolower(str_replace(' ','-',get_the_title())); ?>" class="work cont hideme" style="background:<?php if ( get_post_meta($post->ID, 'background_image', true) ) { ?>url(<?php the_field('background_image'); ?>) no-repeat center 0 <?php the_field('background_color'); ?><?php } else { ?><?php the_field('background_color'); ?><?php } ?>;">
					
						<div class="thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
						<div class="work-info<?php if ( get_post_meta($post->ID, 'text_color', true) ) { ?> color-white<?php } ?>">
							<h5><?php the_title(); ?></h5>
							<h2><?php the_field('tagline'); ?></h2>
							<div class="sub-title cont"><?php the_field('sub_title'); ?></div>
							<a class="button" href="<?php the_permalink(); ?>">view case study</a>
						</div>
					
				</div>
			<?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>