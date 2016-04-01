<?php
/*
Template Name: Testimonials
*/
get_header(); ?>
<section class="full-screen">
	<div class="carousel-img" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/testimonial2.png';?>')"></div>
</section>
<section id="about">
	<div class="section-bg">
		<div class="row margin-rl-zero">
			<div class="about-title">
				<div class="strike">
					<span>TESTIMONIALS</span>
				</div>
			</div>
		</div>
		<div class="container section-bg">
			<div class="col-md-4">
				<div class="col-md-6 col-md-offset-3 testimonial-pictures"><img src="<?php echo get_template_directory_uri(); echo '/img/mikeparr.png';?>"></div>
				<div class="col-md-12 testimonial-box">
					
					<div class="col-md-12 col-no-margin">      
					<?php
	          $type = 'testimonial1';
	          $args=array(
	          'post_type' => $type,
	          'post_status' => 'publish',
	          );
	          $my_query = new WP_Query($args);
	          if( $my_query->have_posts() ) {
	          while ($my_query->have_posts()) : $my_query->the_post(); ?>
	          <span class="testimonial-box" >
	            <?php the_content(); ?>
	          </span>
	          <?php
	          endwhile;
	          }
	          wp_reset_query();  // Restore global post data stomped by the_post().
          ?>
					</div>
					<div class="col-md-12 testimonial-signature"> Mike Parr</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6 col-md-offset-3 testimonial-pictures"><img src="<?php echo get_template_directory_uri(); echo '/img/FES.png';?>"></div>
				<div class="col-md-12 testimonial-box">
					<div class="col-md-12 col-no-margin">
						<?php
	          $type = 'testimonial2';
	          $args=array(
	          'post_type' => $type,
	          'post_status' => 'publish',
	          );
	          $my_query = new WP_Query($args);
	          if( $my_query->have_posts() ) {
	          while ($my_query->have_posts()) : $my_query->the_post(); ?>
	          <span class="testimonial-box" >
	            <?php the_content(); ?>
	          </span>
	          <?php
	          endwhile;
	          }
	          wp_reset_query();  // Restore global post data stomped by the_post().
          ?>
					</div>
					<div class="col-md-12 testimonial-signature"> Fri Ecological Services</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-md-6 col-md-offset-3 testimonial-pictures"><img src="<?php echo get_template_directory_uri(); echo '/img/davidmaki.png';?>">
				</div>
				<div class="col-md-12 testimonial-box">
					<div class="col-md-12 col-no-margin"><?php
	          $type = 'testimonial3';
	          $args=array(
	          'post_type' => $type,
	          'post_status' => 'publish',
	          );
	          $my_query = new WP_Query($args);
	          if( $my_query->have_posts() ) {
	          while ($my_query->have_posts()) : $my_query->the_post(); ?>
	          <span class="testimonial-box" >
	            <?php the_content(); ?>
	          </span>
	          <?php
	          endwhile;
	          }
	          wp_reset_query();  // Restore global post data stomped by the_post().
          ?>
						<br><br>
					</div>
					<div class="col-md-12 testimonial-signature"> David Maki</div>
				</div>
			</div>
		</div>
	</section>
	<div class="mainblogwrapper section-bg">
		<div class="container">
			
		</div></div>
		<?php get_footer(); ?>