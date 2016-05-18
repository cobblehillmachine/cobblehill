<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


<div class="page-header cont gradient">
	<div class="mid-cont">
		<img  alt="" src="<?php echo get_template_directory_uri(); ?>/images/404.png" />
		<h1><span>Whoops, that page doesn’t exist.</span></h1>
		<a class="button" href="/">go back to the home page</a>

	</div>
</div>

<?php
get_footer();
