<?php
/*
 Template Name: This-week
*/

get_header(); ?>
<section class="full-screen">
	<div class="carousel-img" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/Layer 41.png';?>')"></div> 
</section>
<section id="about">
	<div class="section-bg">
		<div class="row margin-rl-zero">
			<div class="about-title">
				<div class="strike">
					<span>THIS WEEK AT DUNCANBY</span>
				</div>
			</div>
		</div>
		<div class="container section-bg">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?> 
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      		<div class="col-xs-1"></div>
          <div class="col-xs-9">
          <span class="about-text" >
              <?php the_content(); ?>
           </span>
          </div>
          <div class="col-xs-1"></div>
      </div>
  <?php endwhile; ?>

	</div>
</section>
<section id="fundraiser">
	<div class="section-bg">
		<div class="container">
			<div class="row">
				<div class="team-title col-md-12">
						<div class="strike">
					   	<span class="meet-team-color">EVENTS &amp; FUNDRAISERS</span>
					</div> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); echo '/img/Layer 43.png';?>"></div>
				<div class="col-md-8 col-no-margin"><span class="event-title">JIM HUGHSON &amp; KID SPORT</span><br>
						<span class="about-text">"Fishin' for KidSport" July9-12-2016</span><br>
						<p class="about-text">There is a wonderful simplicty to the growing organization KIDSPORT. Through the work of voluneers
						and without costly administrations it simple raises money that grants registeration fee so needy kids
						can play sports. So when you make a donation you feel sure your money is getting to the kids
						<br><br>
						Simple as that!
						<br><br>
						It's the uncluttered philosophy "So all kids can play" that inspired me to get involved, as well as Leigh
						and Sid Keay of Duncanby Lodge to champion the cause.<br>
						</p>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-12">				
					<p class="about-text">
						So once again this summer, Duncanby will team up with KIDSPORT for a fund raising fishing trip on July 9th -12th and we'd love you to join us and go "Fishin for KidSport".
							Your part is simple too! Sign up for the trip then fly up to the most popular lodge in one of the most beautiful places on the west coast. For every booking on the trip, Duncanby
							will make a donation to the White Rock — Surrey KidSport chapter. Last year, our first cast at "Fishin for KidSport" raised over $15,000 and pushed yearly fundraising to its
							highest level yet. Over a short four years White rock — Surrey KidSport has raised nearly $400,000 and put 1500 kids on a field of play. Still the applications for help continue to
							grow. So give yourself a treat. Enjoy a world class West Coast wilderness adventure and make our world a bit 
							<br>
					</p>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-md-4"><img src="<?php echo get_template_directory_uri(); echo '/img/Layer 44.png';?>"></div>
				<div class="col-md-8 col-no-margin"><span class="event-title">RICK HANSON FOUNDATION</span><br>
						<p class="about-text"><br>
						Spend time with the Man in Motion, Rick Hanses: benefiting Salmon Enhancement in Rivers Inlet
						between June 11 to June 14, 2016. Since childhood, Rick Hanses has had a strong passion for the
						outdoors — resulting in personal volunteering and leadership in conservation. Rick was introduced to
						Rivers Inlet in 2010 and, from his experience there, committed to apply his leadership to support a
						sustainable ecosystem for Rivers Inlet salmon. In 2011, the Wulkinuxv First Nation, local lodge owners,
						Fisheries and Oceans Canada, Rick Hansen, Pacific Salmon Foundation and independent scientists
						confirmed their commitment to work together to achieve healthy and sustainable salmon populations
						in River Inlet
						</p>
				</div>
			</div>

	</div>
</div>
</section>
<?php get_footer(); ?>