<?php
/*
Template Name: Booking
*/
get_header(); ?>
<section class="full-screen">
	<div class="container section-bg">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="col-md-12 about-title">
					<span> ALL INCLUSIVE PACKAGES</span>
				</div>
				<div class="col-md-12 about-text">
					<p>
						Your all-inclusive fishing trip with us begins with yur flight from Vacouver Seair Seaplanes chartered aircraft.
						You will fly directly to Duncanby fishing lodge in rivers inlet.
						<br><br>
						During your all-inclusive fishing trip you will have unlimited use of our fleet of boats that are well stocked,
						fuelled and cleaned every morning. We have no set fishing times; you get to spend as much time on the water salmon
						and halibut fishing as you want! Your fish are cleaned, processed and packaged, ready for your departure
						<br><br>
						There are no set meal times and we do not have a present menu of just two or three items.
						Our restaurant and patio are open from early mornin to late in the evening, with a full menu for you to order from.
						House beer and wine are also included in your all inclusive fishing trip.
						<br><br>
						After a long day fishing the coast of BC you may want to relax in out loung.
						In our lounge, we have a computer with Internet access, satellite TV and telephone for your use. We also have kayaks and canoe for you to enjoy.
						<br><br>
						All of our accommodations have a spectacular ocean view and include daily maid servcie. No detail is overlooked!
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12 about-title">
					<span> FOR BOOKINGS CALL: 1.877.846.6548</span>
				</div>
				<div class="col-md-12">
					<?php
					$type = 'booking_form';
					$args=array(
					'post_type' => $type,
					'post_status' => 'publish',
					);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<span class="about-text" >
						<?php the_content(); ?>
					</span>
					<?php
					endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-md-12 line-separator"></div>
		</div>
	</div>
</section>
<section id="rates">
	<div class="container section-bg">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="col-md-12 about-title">
					<span>RATES</span>
				</div>
				<div class="col-md-12 rate-subtitle col-no-margin">
					<span>ALL INCLUSIVE PACKAGE FROM VANCOUVER</span>
				</div>
				<div class="col-md-12 rate-price-title col-no-margin">
					<span>"price for 2016 and 2017 are subject to change"</span>
				</div>
				<div class="col-md-12 rate-text">
					<p>
						4 day/ 3 night - $3,675<br>
						5 day/ 4 night - $3,950<br>
						8 day/ 7 night - $7,110<br>
						11 day/ 10 night - $9,975<br>
						12 day/ 11 night - $10,250<br>
					</p>
				</div>
				
				<div class="col-md-12 rate-subtitle col-no-margin">
					<span>GUIDING WITH PACKAGE</span>
				</div>
				<div class="col-md-12 rate-text">
					<p>
						23'Grady White - $425 per half day (arrival day only)<br>
						23'Grady White - $650 per full day<br>
						26' or 28' Grady White - $500 per half day (arrival day only)<br>
						26' or 28' Grady White - $800 per full day<br>
						<br><br>
						Single person - one cabin - supplement will be 50% additional cost<br>
						and subject to availability.
					</p>
				</div>
				<div class="col-md-12 rate-subtitle col-no-margin">
					<span>ALL INCLUSIVE PACKAGE INCLUDES:</span>
				</div>
				<ul class="col-md-12 rate-text list-style">
					<li class="">Return airfare from Vancouver</li>
					<li class="">Deluxe land based accommodation</li>
					<li class="">All metals and snacks, including beer and wine</li>
					<li class="">Access to computer and telephone in the lounge</li>
					<li class="">Use of kayaks and canoes</li>
					<li class="">Professional fishing instruction by our fish master and dock staff</li>
					<li class="">Cleaning, vaccum sealing and packaging for your catch</li>
					<li class="">Floatation and rain gear</li>
					<li class="">Bait and cut plug equipment. Including lures, spoons and jigs
					<li class="">Use of our fleet of 16' Boston Whaler's or 17'Hourston Glasscraft's</li>
				</ul>
			</div>
			<div class="col-md-6">
				<div class="col-md-12 about-title">
					<span> OTHER MARINE SERVICES</span>
				</div>
				<div class="col-md-12 rate-text">
					No wifi. Hardware internet only - $20<br>
					Moorage - $1.75 per foot, per day<br>
					Power 30 amp - $45 per day<br>
					Power 50 amp - $85 per day<br>
					Gas -tbd<br>
					Diesel - tbd<br>
					<br>
					Guide Services - $1100.00 per day<br>
					Kayak/ Canoe - $38.50 per day<br>
					Showers - $11,00<br>
					Laundry - $16.50 per load, includes detergent<br>
					Fish Processing - $2.50 per pound($10.00 minimum)<br>
					Fish box - $11.00<br>
					Garbage Disposal - $5.50 per bag<br>
					Bait - $1.50 per piece<br>
					Ice - $5.50 per bag<br>
					Phone - $5.50 per 5 min<br>
					One way flight - $825.00 + $4.50 per lb. for freight, subject to availability<br>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-md-12 line-separator"></div>
		</div>
	</div>
</section>
<section>
	<div class="container section-bg">
		<div class="col-md-4">
			<div class="col-md-12 about-title">
				SCHEDULE
			</div>
			<div class="container col-no-margin col-md-12">
				<div class="col-md-6 col-no-margin">
				<div class="available-box"></div><span class="rate-text">Available</span></div>
				<div class="col-md-6 col-no-margin"><div class="booked-box"></div><span class="rate-text">Booked</span></div>
			</div>
			<div class="col-md-6">
				<?php
				$type = 'booking_calendar';
				$args=array(
				'post_type' => $type,
				'post_status' => 'publish',
				);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<span class="about-text" >
					<?php the_content(); ?>
				</span>
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