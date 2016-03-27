<?php
/*
Template Name: Front Page
Design Theme's Front Page to Display the Home Page if Selected

*/
get_header(); ?>
<?php
$type = 'carousel';
$args=array(
'post_type' => $type,
'post_status' => 'publish',
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
<div class="carousel-border">
  <?php the_content(); ?>
</div>
<?php
endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>
<section class="explore">
  <div class="section-bg">
    <div class="row margin-rl-zero">
      <div class="col-md-12  col-xs-12 margin-zero">
        <div class="col-xs-12  text-center margin-zero explore-title">EXPLORE &amp; EXPERIENCE</div>
      </div>
      <div class="col-md-12 col-xs-12">
        <div class="col-xs-12 text-center popular-title">Our most popular activities</div>
      </div>
      <div class="col-md-12 col-xs-12">
        <div class="col-md-5 col-md-offset-1 col-xs-12">
          <div class="col-md-12 fishing-box">
            <div class="activities-headlines"><span class="thumb-text"><a class="anchor-style" href="fishing">FISHING</a></span></div>
          </div>
        </div>
        <div class="col-md-5 col-xs-12">
          <div class="col-md-12 hatchery-box">
            <div class="activities-headlines"><span class="thumb-text"><a class="anchor-style" href="salmon-hatchery">HATCHERY</a></span></div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-xs-12">
        <div class="col-md-2 col-md-offset-1 col-xs-12">
          <div class="activity-thumb" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/whale.png';?>');">
            <div class="mini-activities-headlines"><span class="mini-thumb-text"><a class="anchor-style" href="activities-2/#whale">WHALE WATCHING</a></span></div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="activity-thumb" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/bird.png';?>');">
            <div class="mini-activities-headlines"><span class="mini-thumb-text"><a class="anchor-style" href="activities-2/#bird">BIRD WATCHING</a></span></div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="activity-thumb" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/bear.png';?>');">
            <div class="mini-activities-headlines"><span class="mini-thumb-text"><a class="anchor-style" href="activities-2/#bear">BEAR WATCHING</a></span></div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="activity-thumb" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/kayak.png';?>');">
            <div class="mini-activities-headlines"><span class="mini-thumb-text"><a class="anchor-style" href="activities-2/#kayak">KAYAK &amp; CANOE</a></span></div>
          </div>
        </div>
        <div class="col-md-2 col-xs-12">
          <div class="activity-thumb" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/dine.png';?>');">
            <div class="mini-activities-headlines"><span class="mini-thumb-text"><a class="anchor-style" href="dining/#dining">WINE &amp; DINE</a></span></div>
          </div>
        </div>
        <div class="col-md-1 col-xs-1"></div>
      </div>
      <div class="col-xs-12 col-no-margin">
        <div class="col-xs-12 text-center"><span class="fishing-days-title">DAYS UNTIL FISHING SEASON</span></div>
      </div>
      <div class="col-xs-12">
        <div class="col-md-3 col-xs-2"></div>
        <div class="col-xs-10 col-md-6 text-center">
          <?php
          $type = 'countdown';
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
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>
</section>
<section id="about">
  <div class="section-bg">
    <div class="row margin-rl-zero">
      <div class="col-xs-12 about-title">
        <div class="strike">
          <span>TESTIMONIALS</span>
        </div>
      </div>
    </div>
    <div class="container section-bg">
      <div class="col-md-4">
        <div class="col-md-6 col-md-offset-3 testimonial-pictures"><img src="<?php echo get_template_directory_uri(); echo '/img/mikeparr.png';?>"></div>
        <div class="col-md-12 testimonial-box">
          
          <div class="col-md-12 col-no-margin">"The 5th consecutive year at the Duncanby leaves me groping
            for a new way to express my thanks. The trip was
            fantastic--and each year has been better than the ones before... No change in attitude or the level of customer
            service. A seperate page could easily be written on the dining-- but the short version is that it's as great as ever.""
          </div>
          <div class="col-md-12 testimonial-signature"> Mike Parr</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-6 col-md-offset-3 testimonial-pictures"><img src="<?php echo get_template_directory_uri(); echo '/img/FES.png';?>"></div>
        <div class="col-md-12 testimonial-box">
          <div class="col-md-12 col-no-margin">"A 5 star rating s usually something that attests to the
            highest standards. Duncanby should be in the dictionary
            under the 5 star definition. If I can scape some more shekels together, I WILL be back for a visit. You've made
            me a little more complete, and I thank you for that All the best to your family and crew.""
          </div>
          <div class="col-md-12 testimonial-signature"> Fri Ecological Services</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-6 col-md-offset-3 testimonial-pictures"><img src="<?php echo get_template_directory_uri(); echo '/img/davidmaki.png';?>">
        </div>
        <div class="col-md-12 testimonial-box">
          <div class="col-md-12 col-no-margin">"You in the enviable position of being the owner of the lodge where some of the guests greatest memories of their lives are created. We may limit on fish, but we never limit on good times and great memories. Thank you again for both.""
            <br><br>
          </div>
          <div class="col-md-12 testimonial-signature"> David Maki</div>
        </div>
      </div>
    </div>
  </section>
  <section id="team">
    <div class="section-bg">
      <div class="container">
        <div class="row margin-rl-zero">
          <div class="team-title col-xs-12">
            <div class="strike">
              <span class="meet-team-color">FUNDRAISERS</span>
            </div>
          </div>
          <div class="col-md-12 col-no-margin">
            <div class="col-md-6">
              <div class="fund" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/fundr.png';?>');">
                <div class="activities-headlines"><span class="thumb-text"><a class="anchor-style" href="this-week-2/#fundraiser">JIM HUGHSON &amp; KIDSPORT</a></span></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="fund" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/fund2.png';?>');">
                <div class="activities-headlines"><span class="thumb-text"><a class="anchor-style" href="this-week-2/#fundraiser">RICK HANSON FOUNDATION</a></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="news">
    <div class="section-bg">
      <div class="container">
        <div class="row margin-rl-zero">
          <div class="col-md-12 line-separator"></div>
          <div class="col-md-12">
            <div class="col-md-4">
              <div class="col-xs-12 about-title">
                <i class="fa fa-video-camera"></i>  FEATURED VIDEO
              </div>
              <div class="col-md-12">
                <div class="videowrapper">
                  <iframe width="420" height="315" src="https://www.youtube.com/embed/nF0msuqpshg" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-12 feature-video-title">
                  The Salmon Hatchery
                </div>
                <div class="feature-video-text about-text">
                  Our first set at this years Wannok river hatchery program
                  egg take. Shared with these special people.
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="col-xs-12 about-title">
                <i class="fa fa-th-list"></i>  FAQS
              </div>
              <div class="col-md-12 question-text">
                How much baggage am I allowed to take with me?
              </div>
              <div class="col-md-12 answer-text">
                On our scheduled service, our baggage allowance is 25lbs per paying passenger.
                Seair does offer free baggage storage if you'd like to leaver your extra luggage behind
              </div>
              <div class="col-md-12 question-text">
                Where do I leave my vehicle when flying with Seair?
              </div>
              <div class="col-md-12 answer-text"> You may park your vehicle for free across the street from Seair terminal.</div>
              <div class="col-md-12 question-text"> Is there a shuttle bus that I can catch to YVR Airport? </div>
              <div class="col-md-12 answer-text"> Yes, we provide out Seair cutomers with a complimentary shuttle service to the airport
              but restrictions prohibit us from picking up customers from the airport. Therefore, we can only provide one way shuttle service</div>
            </div>
            <div class="col-md-4">
              <div class="col-xs-12 about-title">
                <i class="fa fa-times-circle"></i>  WHERE WE ARE
              </div>
              <div class="col-md-12 col-no-margin question-text"> Rivers Inlet, BC </div>
              <div class="col-md-12  question-text">GPS:XXX:XXX:XXX</div>
              <div class="col-md-12 col-no-margin question-text">How do I get there</div>
              <div class="col-md-12 about-title">
                <i class="fa fa-search"></i>  FISHING LICENSE
              </div>
              <div class="col-md-12"><a href="https://www-ops2.pac.dfo-mpo.gc.ca/nrls-sndpp/index-eng.cfm"><img src='<?php echo get_template_directory_uri(); echo '/img/license.png';?>'></a></div>
              <div class="col-md-12 get-here-catch"><a href="fishing/#catch-release"><img src='<?php echo get_template_directory_uri(); echo '/img/catch.png';?>'></a></div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <div class="col-xs-12 home-second-footer">
    <div class="col-xs-12">
      <div class="col-xs-12 col-no-margin"><span class="second-footer-title">WHERE WE ARE</span></div>
      <div class="col-xs-12 col-no-margin"><span class="second-footer-title-2">Rivers Inlet, BC VON 1MO</span></div>
    </div>
    <div class="col-xs-6">
      <div class="col-xs-12 col-no-margin second-footer-images" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/map.png';?>')"></div>
    </div>
    <div class="col-xs-6">
      <div class="col-xs-12 col-no-margin second-footer-images" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/view.png';?>')"></div>
    </div>
  </div>
  
  
  
  
  <?php get_footer(); ?>