<?php
/*
 Template Name: Facilities
*/

get_header(); ?>
<section class="full-screen">
	<div class="carousel-img" style="background-image: url('<?php echo get_template_directory_uri(); echo '/img/Layer 36.png';?>')"></div> 
</section>
<section id="about">
	<div class="section-bg">
		<div class="row margin-rl-zero">
			<div class="about-title col-md-12">
				<div class="strike">
				   <span>THE FACILITIES</span>
				</div>    	
		</div></div>
			 <div class="container section-bg">
			 		<div class="col-md-2"></div>
			 		<div class="col-md-8"><span class="about-text" ><p>Located in the rugged wilderness of the central coast of BC, Duncanby Lodge has all the comforts and conveniences you'd expect to find at a five
			 		star resort, while surrounded by the natural beauty of River Inlet. We believe we have the best accommodations and finest cuisine of any fishing lodge in BC and take prode in our outstanding level of service.<br>
			 					<br>
								Every year, during the off-season, we continue to make improvements to our fishing lodge through the renovation and building of new cabins and docks, and upgrades to our main lodge and environmentally friendly waste management system.
								We've even installed a new hydro system, taking advantage of renewable energy.
								<br>
								<br>
								Among all the salmon halibut fishing lodges in BC, Duncanby Lodge is without a doubt your best choice for an unforgettable fishing trip.<br>
								Experience the Duncanby difference in all aspects of our operation.
								
							</p></span>
					</div> 
					<div class="col-md-2"></div>
		</div>
	</div>
</section>
<section id="accomdation">
		<div class="section-bg">
		<div class="container">
		<div class="row">
			<div class="team-title col-md-12">
				<div class="strike">
				   <span class="meet-team-color">ACCOMMODATIONS</span>
				</div> 
			</div>
		</div>
		<div class="col-md-3 col-xs-12">
			<div class="col-xs-12"><img id="myImg" src="<?php echo get_template_directory_uri(); echo '/img/DSC_8406.jpg';?>"></div>
			<div id="myModal" class="modal">
					  <!-- The Close Button -->
					  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

					  <!-- Modal Content (The Image) -->
					  <img class="modal-content" id="img01">

					  <!-- Modal Caption (Image Text) -->
					  <div id="caption"></div>
			 </div>
			<div class="col-xs-12"><img id="myImg2" src="<?php echo get_template_directory_uri(); echo '/img/DSC_8403.jpg';?>"></div>
		</div>
		<div class="col-md-6 col-xs-12">
			<div class="col-xs-12 about-text text-padding">Located at the base of Mount Rivers, our cabins line a cedar-planked
			Boardwalk with breathtaking ocean views. Listen to the waves gently crashing as you fall asleep
			dreaming of the next morning'ssport fishing or relax after a day of adventure.
			<br><br>
			There are a total of 12 cabins that can sleep from three to four fisherpeople comfortably.
			Each cabin has a full bathroom with either a queen size bed and a set of bunks or a queen size
			bed, a double bed and two singles. The Eagles Nest can sleep up to six guests. It has two bedrooms
			with one set of bunk beds in each room and a loft with two single beds.
			<br><br>
			We have the capacity for 43 guests with custom packages available for corporations, teams and special occasions such as weddings, reunions and milestones. All of our cabins include daily housekeeping service and basic toiletries.
			<br><br>
			</div>
		</div>
		<div class="col-md-3 col-xs-12">
				<div class="col-xs-12"><img id="myImg3" src="<?php echo get_template_directory_uri(); echo '/img/DSC_8400.jpg';?>"></div>
				<div class="col-xs-12"><img id="myImg4" class="height-white-room" src="<?php echo get_template_directory_uri(); echo '/img/IMG_2308.JPG';?>"></div>
		</div>
		</div>
		</div>
</section>
<script type="text/javascript">
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById('myImg');
		var img2 = document.getElementById('myImg2');
		var img3 = document.getElementById('myImg3');
		var img4 = document.getElementById('myImg4');
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		    modal.style.display = "block";
		    modalImg.src = this.src;
		    modalImg.alt = this.alt;
		    captionText.innerHTML = this.alt;
		}
		img2.onclick = function() {
				modal.style.display = "block";
		    modalImg.src = this.src;
		    modalImg.alt = this.alt;
		    captionText.innerHTML = this.alt;
		}
				img3.onclick = function() {
				modal.style.display = "block";
		    modalImg.src = this.src;
		    modalImg.alt = this.alt;
		    captionText.innerHTML = this.alt;
		}	
			img4.onclick = function() {
			modal.style.display = "block";
	    modalImg.src = this.src;
	    modalImg.alt = this.alt;
	    captionText.innerHTML = this.alt;
		}	

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
		  modal.style.display = "none";
		}

</script>

<?php get_footer(); ?>