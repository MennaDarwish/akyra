<?php
/*
Template Name: Gallery
*/
get_header(); ?>
<section class="full-screen">
	<div class="container section-bg">
		<div class="col-md-12">
			<div class="col-md-12 text-center about-title">
				<span> DUNCANBY'S PHOTO GALLERY</span>
			</div>
			<div class="col-md-12">
				<?php
				$type = 'gallery_pictures';
				$args=array(
				'post_type' => $type,
				'post_status' => 'publish',
				);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<?php the_content(); ?>
				<?php
				endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
			</div>
		</div>
		<div class="container">
			<div class="col-md-12 line-separator"></div>
		</div>
	</div>
</section>
<section id="gallery-videos">
	<div class="container section-bg">
		<div class="col-md-12">
			<div class="col-md-12 about-title">
				VIDEOS
			</div>
			<div class="col-md-12">
				<?php
				$type = 'gallery_videos';
				$args=array(
				'post_type' => $type,
				'post_status' => 'publish',
				);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<?php the_content(); ?>
				<?php
				endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>