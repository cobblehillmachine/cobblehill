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
<div id="services-cont" class="cont">
	<?php query_posts(array('post_type' => 'Services', 'order' => 'ASC', 'posts_per_page' => 3)); ?>
			<?php while ( have_posts() ) : the_post(); ?>	
					<?php $post_image_id = get_post_thumbnail_id($post_to_use->ID);
							if ($post_image_id) {
								$thumbnail = wp_get_attachment_image_src( $post_image_id, 'full', false);
								if ($thumbnail) (string)$thumbnail = $thumbnail[0];
							} ?>
				<div id="<?php echo strtolower(str_replace(' ','-',get_the_title())); ?>" class="service cont">
					<div class="icon <?php echo strtolower(str_replace(' ','-',get_the_title())); ?>" style="background: url('<?php echo $thumbnail; ?>') no-repeat center 112px <?php the_field('background_color'); ?>"></div>
					<div class="service-info">
						<h3><?php the_field('sub_title'); ?></h3>
						<h2><?php the_field('service_description'); ?></h2>
						<?php the_field('service_copy'); ?>
					</div>
					<div class="service-list">
						<?php echo get_the_content(); ?>
					</div>
				</div>
			<?php endwhile; wp_reset_query(); ?>
</div>

<?php get_footer(); ?>