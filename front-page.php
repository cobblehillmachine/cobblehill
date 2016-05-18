<?php get_header(); ?>

<div id="bg-video" class="cont desktop">
	<div class="veil"></div>
	<div class="home-tagline desktop"><?php the_field('home_tagline'); ?></div>
	<div id="home-scroll" class="desktop" onclick="scrollToHome();"><img class="pointer" alt="" src="<?php echo get_template_directory_uri(); ?>/images/scroll-icon.png" /></div>
	<div class="videoWrapper">
		<video autoplay="true" loop="true" preload="auto" muted="true">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/cobble-hill-video.mp4" type="video/mp4">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/cobble-hill-video.ogv" type="video/ogv">
		  <source src="<?php echo get_template_directory_uri(); ?>/videos/cobble-hill-video.webm" type="video/webm">
				<!--[if IE]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->
		</video>
	</div>
</div>
<div id="section1" class="cont">
	<div class="mid-cont">
		<img id="elephant" alt="" src="<?php echo get_template_directory_uri(); ?>/images/elephant.png" />
		<h5></h5>
		<h1 class="headline"><span><?php the_field('description'); ?></span></h1>
		<a class="button white" href="<?php the_field('link_1_url'); ?>"><?php the_field('link_1'); ?></a>
		<a class="button white" href="<?php the_field('link_2_url'); ?>"><?php the_field('link_2'); ?></a>

	</div>
</div>
<div id="section2" class="cont">
	<!--
<div class="header cont">
		<span>Our Specialties</span>
		<div class="span_4">
			<a class="button black" href="/services">what we do</a>
		</div>
	</div>
	<div id="cta-cont" class="cont">
		<?php query_posts(array('post_type' => 'Services', 'order' => 'ASC', 'posts_per_page' => 3)); ?>
				<?php while ( have_posts() ) : the_post(); ?>	
						
					<a class="cta <?php echo strtolower(str_replace(' ','-',get_the_title())); ?>" href="/services/#<?php echo strtolower(str_replace(' ','-',get_the_title())); ?>" style="background:<?php the_field('background_color'); ?>">
						<div class="no-hover">
							<div class="icon"><?php the_post_thumbnail('full'); ?></div>
							<h3><?php the_title(); ?></h3>
						</div>
						<div class="for-hover">
							<div class="icon"><?php the_post_thumbnail('full'); ?></div>
							<h3><?php the_title(); ?></h3>
							<div class="description cont"><div class="sep"></div><span><?php the_field('service_description'); ?></span></div>
						</div>
					</a>
				<?php endwhile; wp_reset_query(); ?>
	</div>
-->
	<!--
<div class="cont btn-mobile">
		<div class="mid-cont">
			<a class="button white" href="/services">what we do</a>
		</div>
	</div>
-->
	<div id="home-slider" class="cont black-bg">
		<div class="center-cont">
			<div class="title-header cont mobile"><h5>featured work</h5></div>
			<?php query_posts(array('post_type' => 'Featured Works', 'order' => 'DESC', 'posts_per_page' => 10)); ?>
			<div class="flexslider cont">
				<ul class="slides">
					<?php while ( have_posts() ) : the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>">
								<img alt="" src="<?php the_field('header_image'); ?>" />
								<div class="featured-info">
									<div class="title-header cont desktop"><h5>featured work</h5></div>
									<div class="info-cont cont">
										<h5><?php the_title(); ?></h5>
										<h2><?php the_field('tagline'); ?></h2>
										<div class="sub-title cont"><?php the_field('sub_title'); ?></div>
									</div>
								</div>
							</a>
						</li>
					
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="latest-posts cont">
	    <?php $latest = new WP_Query('posts_per_page=2&post_type=post'); if ($latest->have_posts()) : ?>
	    	<?php while ($latest->have_posts()) : $latest->the_post(); ?>
				<div class="latest">
    				<!-- <h5 class="date"><?php the_time('m.d.Y'); ?></h5> -->				
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="small-divider"></div>
    				<div class="description">
    					<?php the_excerpt(); ?>
    				</div>
					<a class="button white" href="<?php the_permalink(); ?>">continue reading</a>
				</div>

	    <?php endwhile; endif; wp_reset_postdata(); ?>	
	</div>
</div>

<?php get_footer(); ?>