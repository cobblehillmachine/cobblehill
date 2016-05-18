<?php get_header(); ?>
<div id="story-slider" class="cont black-bg">
	<div class="center-cont">
		<div class="flexslider cont">
			<ul class="slides">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php echo get_the_content(); ?>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
	<div class="page-header cont">
		<div class="mid-cont">
			<h5><?php the_title(); ?></h5>
			<h1><span><?php the_field('page_headline'); ?></span></h1>
			<div class="paragraph"><?php the_field('left_copy'); ?></div>
			<div class="paragraph"><?php the_field('right_copy'); ?></div>
			<p>
			<a class="button" href="<?php the_field('link_1'); ?>"><?php the_field('link_1_title'); ?></a>
			<a class="button" href="<?php the_field('link_2'); ?>"><?php the_field('link_2_title'); ?></a>
			</p>
		</div>
	</div>
<!-- shit
	<div id="testimonial-slider" class="cont darker">
		<div class="center-cont">
			<?php query_posts(array('post_type' => 'Featured Works', 'order' => 'DESC', 'posts_per_page' => 10)); ?>			
			<div class="flexslider cont">
				<ul class="slides">
					<?php while ( have_posts() ) : the_post(); ?>
					<li style="background:url(<?php echo the_field('testimonial_background'); ?>) no-repeat center center;">
						<div class="testimonial-cont cont">
							<div class="testimonial-info">
								<div class="table">
									<div class="table-cell">
										<h3>testimonial</h3>
										<div class="testimonial">"<?php the_field('testimonial'); ?>"</div>
										<div class="author">&ndash; <?php the_field('testimonial_author'); ?>,<span>&nbsp;<?php the_title(); ?></span></div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<?php endwhile; wp_reset_query(); ?>
				</ul>
			</div>	
		</div>
	</div> 
-->
	<div class="cont blue">
		<div class="center-cont">
			<?php
			global $wp_query;
			$postid = $wp_query->post->ID;
			$myCopyBlockMeta = get_post_meta($postid, 'extra_field', true);
			//$myCopyBlock = wpautop($myCopyBlockMeta);
			wp_reset_query();

			if ($myCopyBlockMeta) {
			echo $myCopyBlockMeta;
			}
			?>
		</div>
	</div>
	<div class="latest-posts cont row">
	    <?php $latest = new WP_Query('posts_per_page=2&post_type=post'); if ($latest->have_posts()) : ?>
	    	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
				<div class="latest">
    				<h5 class="date"><?php the_time('m.d.Y'); ?></h5>
					<div class="small-divider"></div>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    				<div class="description">
    					<?php the_excerpt(); ?>
    				</div>
					<a class="button white" href="<?php the_permalink(); ?>">continue reading</a>
				</div>

	    <?php endwhile; endif; wp_reset_postdata(); ?>	
	</div>
			
			
<?php get_footer(); ?>