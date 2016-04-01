<?php
/*
 Template Name: Travel-info
*/

get_header(); ?>
<section class="full-screen">
	   <?php
          $type = 'goodle_map';
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
</section>
<section id="about">
	<div class="section-bg decreased-padding">
		<div class="row margin-rl-zero">
			<div class="about-title col-md-12 map-title-below-margin">
				<div class="strike">
				   <span>DEPARTURE &amp; ARRIVAL</span>
				</div>    	
		</div></div>
			 <div class="container section-bg decreased-padding">
			 		<div class="col-md-2"></div>
			 		<div class="col-md-8"><span class="about-text" ><p>The Seairterminal at 4640 Inglis Drive, Richmond BC V7B 1W4, is part of Airport South which is a regional hub for small aircrafts, float planes, helicopter operations, corporate charters, sport fishing camps and aerospace facilities. You will be departing fro there on a Duncanby chartered aircraft with Seair Seaplanes. The approximate flight time
			 		from Vancouver to Duncanby (a direct flight) is 1.5 hrs. The type of planes we are chartering is Caravan<br>
			 					<br>
							For driving directions to the Seair terminal, or for more information, click following on the link:Seair Seaplanes website.
							<br>
								<br>
								Check in Time 12:00 PM - Departure Time 1:00 PM
								<br>
								<br>
								Upon your arrival, a friendly Duncanby Representative will be there to greet you and answer any last minute questions you may have. From the Seair
								Terminal, you will depart directly to Duncanby for the 1-5 hour flight up the straight of Georgia. You will arrive at our dock at approximately 2:30 PM.
								<br>
								<br>
								You will depart from Duncanby on Saturday or Tuesday accordingly, at approximately 3:00 PM, retracing your route back to seair at the YVR floatplane
								terminal in Vancouver. Your arrival time in Vancouver will be approximately 5:00 PM. We recommend that you do not book any connecting flights until at
								least 7:30 PM that day.
								<br>
								<br>
								Baggage allowance is restricted to 25lbs. to make room for your catch on the flight back to Vancouver. We recommend that you use a soft-sided duffel bag or 
								sports bag to make loading of the aircraft quick and easy. No carry-ons, please.
							<p></span>
					</div> 
					<div class="col-md-2"></div>
		</div>
	</div>
</section>
<section id="about">
	<div class="section-bg decreased-padding">
		<div class="row margin-rl-zero">
			<div class="about-title col-md-12">
				<div class="strike">
				   <span>TRAVEL INFORMATION</span>
				</div>    	
		</div></div>
			 <div class="container section-bg decreased-padding">
			 		<div class="col-md-2"></div>
			 		<div class="col-md-8"><span class="about-text" ><p>We recommend the following hotels for our guests staying in Vancouver. They offer our guests preferred rate, shuttle 
			 		service to and from the airport, and fish freezer and storage capabilities. Be sure to mention Duncanby when making your reservations, or simply askk us to arrange your reservation for you
			 		when you book your trip. 
			 		<br>
			 					<br>
			 		Note: You will not received Duncanby's preferred rates if you book your hotel through a third party such as Expedia.ca or a travel agent. Be sure to mention Duncanby when booking your room  directly. 
					</p></span>
					</div> 
					<div class="col-md-2"></div>
					<div class="col-md-12 col-no-margin">
						<div class="col-md-2"></div>
						<div class="col-md-1 col-no-margin tygo"><a href="https://shop.tugo.com"><img src='<?php echo get_template_directory_uri(); echo '/img/tugo.png';?>'></a></div>
						<div class="col-md-8">
							<div class="tygo-text"><a class="tygo-text" href="https://shop.tugo.com">TUGO - OUR NEW TRAVEL AND MEDICAL INSURANCE PARTNER</a></div>
							<div class="about-text">Plans that are specifically made to fit all our guests needs for insurance while planning your trip to Duncanby.</div>
						</div>
					</div>
					<div class="col-md-12 col-no-margin">
						<div class="col-md-3"></div>
						<div class="col-md-8"></div>
					</div>
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="col-md-12 travel-info-mini-img" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/RR.png';?>')"></div>
							<div class="col-md-12">
								<div class="col-md-12 tygo-text">
									RIVERROCK CASINO RESORT
								</div>
								<div class="col-md-12 about-text col-no-margin">
									811 RIVER ROAD RICHMOND, BC V6X 3P8
								</div>
								<div class="col-md-12 about-text col-no-margin">Sales@riverrock.com</div>
								<div class="col-md-12 about-text col-no-margin">C:(604) 247-8900</div>
								<div class="col-md-12 about-text">Toll Free: 1-866-743-3718</div>
								<div class="rate-text col-md-12">ROOM RATES</div>
								<ul class="col-md-12 list-style">
									<li class="about-text">City Room $149.00 (One King or two Queen beds)</li>
									<li class="about-text">One Bedroom Resort Suite: $169.00</li>
								</ul>
							</div>
						
							<div class="col-md-12">
								
							</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 travel-info-mini-img" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/MR.png';?>')"></div>
							<div class="col-md-12 tygo-text ">MARRIOT VANCOUVER AIRPORT HOTEL</div>
							<div class="col-md-12 about-text col-no-margin">7571 WESTMINSTER HIGHWAY</div>
							<div class="col-md-12 about-text col-no-margin">RICHMOND, BC V6X 1A3</div>
							<div class="col-md-12 about-text col-no-margin">reservations@vancouver-marriott.com</div>
							<div class="col-md-12 about-text ">Toll Free: 1-877-323-8888</div>
							<div class="col-md-12 rate-text">ROOM RATES</div>
							<ul class="col-md-12 list-style">
								<li class="about-text">Studio Room $155.00 (single/double occupancy)</li>
							</ul>
							<div class="col-md-12 about-text">Please request for "Duncanby Lodge Rate When Booking"</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-12 travel-info-mini-img" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/PG.png';?>')"></div>
							<div class="col-md-12 tygo-text">PACIFIC GATEWAY HOTEL VANCOUVER AIRPORT</div>
							<div class="col-md-12">
							<div class="col-md-12 about-text col-no-margin">3500 CESSNA DRIVE</div>
							<div class="col-md-12 about-text col-no-margin">RICHMOND, BC V7B 1C7</div>
							<div class="col-md-12 about-text col-no-margin">res@pacificgatewayhotel.com</div>
							<div class="col-md-12 about-text">C: (604) 278-1241</div>
							<div class="col-md-12 rate-text">ROOM RATES</div>
									<ul class="col-md-12 list-style">
								<li class="about-text">Deluxe Room: $153.00 (single/double occupancy)</li>
								<li class="about-text">Club Room: $203.00 (single/double occupancy)</li>
							</ul>
							<div class="col-md-12 about-text">Early bird Promotion Book Early and Save!</div>
					
						<div class="col-md-4"></div>
						<div class="col-md-4"></div>
					</div>
					</div>
		</div>
	</div>
</section>
<section id="checklist">
	<div class="section-bg decreased-padding">
		<div class="row margin-rl-zero">
			<div class="about-title col-md-12">
				<div class="strike">
				   <span>TRAVEL CHECKLIST</span>
				</div>    	
		</div></div>
			 <div class="container section-bg decreased-padding">
				<div class="col-md-12">
					<div class="col-md-4">
						<ul class="rate-text list-style-circle">
							<li>Canada Fishing License</li>
							<li>Sunscreen</li>
							<li>Bathing Suit (for a refreshing Swim)</li>
							<li>Socks </li>
							<li> Long and short Sleeve Shorts</li>
							<li>Camera with extra film, batteries, chargers, and/or memory card</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="rate-text list-style-circle">
							<li>Wind Resistant Jacket</li>
							<li>Chapstick</li>
							<li>Base Layer Tops and Bottoms</li>
							<li>Soft-soled shoes</li>
							<li>Prescription Medication</li>
							<li>Extra pair of prescription glasses, contact lenses and reading glasses</li>
						</ul>
					</div>
					<div class="col-md-4">
						<ul class="rate-text list-style-circle">
							<li>Sunglasses</li>
							<li>Hat</li>
							<li>Gloves (for mornings on the water)</li>
							<li>Pants</li>
							<li>Light Reading Materials</li>
						</ul>
					</div>
				</div>
			<div class="col-md-12 col-xs-12 col-no-margin">
				<span class="col-md-12 col-xs-12 col-no-margin tygo-text">SAVE ROOM IN YOUR TRAVEL BAG</span>
				<span class="col-md-12 col-xs-12 rate-text">We provide rain jackets, pants, rubber boots, and life vests. We also provide basic toiletries in all our rooms (soap and shampoo)</span>
			</div>
		</div>
	</div>
	<div class="line-separator"></div>
</section>
<section id="news">
    <div class="section-bg decreased-padding">
      <div class="container ">
        <div class="row margin-rl-zero">
          <div class="col-md-12">
             <div class="col-md-4">
              <div class="col-xs-12 about-title">
                <i class="fa fa-th-list"></i>  FAQS
              </div>
              <div class="col-md-12 travel-text">
                How much baggage am I allowed to take with me?
              </div>
              <div class="col-md-12 answer-text">
                On our scheduled service, our baggage allowance is 25lbs per paying passenger.
                Seair does offer free baggage storage if you'd like to leaver your extra luggage behind
              </div>
              <div class="col-md-12 travel-text">
                Where do I leave my vehicle when flying with Seair?
              </div>
              <div class="col-md-12 answer-text"> You may park your vehicle for free across the street from Seair terminal.</div>
              <div class="col-md-12 travel-text"> Is there a shuttle bus that I can catch to YVR Airport? </div>
              <div class="col-md-12 answer-text"> Yes, we provide out Seair cutomers with a complimentary shuttle service to the airport
              but restrictions prohibit us from picking up customers from the airport. Therefore, we can only provide one way shuttle service</div>
            </div>
            <div class="col-md-4">
              <div class="col-xs-12 about-title">
                WEATHER
              </div>
              <div class="col-md-12 rate-text">
              The weather in River Inlet is generally sunny and calm but minor wind and rain storms have been known to occur. Check the weather forecast
              prior to your departure to make sure that you have picked appropriate clothing for your trip.
              </div>
              <div class="col-md-12">
              	<ul class="list-style travel-text col-md-12">
              		<li><a class="travel-text" href="http://weather.gc.ca/marine/forecast_e.html?mapID=02&siteID=02300">View Environment Canada Report</a></li>
              		<li><a class="travel-text" href="http://www.theweathernetwork.com/ca/weather/british-columbia/port-hardy">View Port Hardy weather forcast</a></li>
              		<li><a class="travel-text"  https://www.wunderground.com/wundermap/?lat=51.53609&lon=-128.39996&zoom=9&type=hyb&units=metric&rad=1&rad.num=1&rad.spd=25&rad.opa=70&rad.stm=0&rad.type=N0R&rad.smo=1&rad.mrg=0&wxsn=1&wxsn.mode=tw&svr=0&cams=0&sat=0&riv=0&mm=0&hur=0&fire=0&tor=0&ndfd=0&pix=0>View BUOY 46204 45 miles west from Duncanby(Goose Bay)</a></li>
              	</ul>
              </div>
            </div>

            <div class="col-md-4">
              <div class="col-xs-12 about-title">
                USEFUL LINKS
              </div>
              <div class="col-md-12 col-no-margin travel-text"><a class="travel-text" href="http://www.lodgescanada.ca"> Fishing in Canada</a></div>
              <div class="col-md-12  rate-text"><a class="rate-text"href="http://www.lodgescanada.ca ">Information on Fishing Lodges in Canada</a></div>
              <div class="col-md-12  travel-text"><a class="travel-text" href="http://www.fishingcanada.com">Fishing Canada Links Directory</a></div>
              <div class="col-md-12 col-no-margin travel-text"><a class="travel-text" href="http://www.aroundtheworldtravel.ca">Around the World Travel Agency</a></div>
              <div class="col-md-12  rate-text">Information for coordinating flights and hotels to and from Vancouver and your residence</div>
    					<div class="col-md-12">
              	<ul class="list-style travel-text col-md-12">
              		<li><a href="http://tides.mobilegeographics.com/locations/6817.html" class="travel-text">Up Inlet tides</a></li>
              		<li><a href="http://tides.mobilegeographics.com/locations/1769.html" class="travel-text">Mouth of inlet tides</li>
              		<li><a href="http://www.sportfishing.bc.ca/sfibc/membership.html" class="travel-text">Sport Fishing Institute</li>
              		<li><a href="http://www.pac.dfo-mpo.gc.ca/index-eng.html" class="travel-text">Sport Fishing Advisory Board</li>
              	</ul>
              </div>          
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>