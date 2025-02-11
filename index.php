<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'HOME';
?>
<?php
	include("templates/header.php");
	// include("templates/conn.php");
?>

	<!-- Slider -->
	<div class = "large-12 medium-12 small-12 div_show"
		style = "padding:0;margin-bottom:20px;border-radius:10px;">
		<ul class="autoplay" data-orbit data-options="animation:fade;
                         animation_speed:7000;
                         bullets:false;
                         navigation_arrows:false;
                         timer:true;
                         timer_speed: 2500;
                         slide_number:false;
                         next_on_click:false;
                         pause_on_hover:false;">


			<?php for ($i=1; $i <=3; $i++):?>
			<li style="color:#fff;">
				<img src = "<?php echo 'images/'.'slider_'.$i.'.jpg'; ?>"
				width="100%" style ="border-radius:2px;
				border:1px solid #FFF;color:#fff;height: auto;">
			</li>
			<?php endfor; ?>
		</ul>
	</div>
	<!-- End Of Sliders -->	
	<!-- Banner -->
	<div class="small-12">
		<div class="small-11 medium-12 large-12 column" 
		style="background-color:rgba(0, 0, 0, 0.9);">
			<h5 style="text-transform: capitalize;color: #fff;
				padding-top:20px;">founded to help the aging and children under the care of the aging.
				<a href="support.php" class="button medium radius" 
					style="float:right;">Take Action Today</a>
			</h5>
		</div>			
	</div>
	<div class="row"></div>
	<!-- End Banner -->
	<!-- Welcome Message -->
	<div class="row">
      <div class="large-5 medium-5 small-12 small-centered columns"
      	style="margin-top:30px;">
        <h2 style="color:green;text-align: center;background-color: #fff;">
          Who we are</h2>
      </div>
   </div>
	<div class = "row"  style = "margin-bottom:10px;margin-top:10px;padding:10px;background-color: #fff;">	
		<div class = "large-12 medium-12 small-12 columns" style = "padding:0;margin-top:10px;">
			<img src="images/afe_5.jpg" 
				style="width:40%;height:auto;
				float: right;margin: 20px;">
			<p>
				Action for Elderly Uganda is a community Board Organization in Mityana District that aims at:<br>
				Empowerment,    promotions, encouragement and development of elders through sensitization, training and financing. 
			</p>
			<p>
				AFE-U which also refers to as the Organization   was registered on 24th July, 2021 having operated for over eight (8) years.
			</p>
			<p>
				The process of formalizing AFE-U commenced in June 2021 with the District of Mityana, which thereafter, approved and endorsed its constitution. 
			</p>
			<p>	
				In principles; this implicitly legitimized and migrated its Board of Directors.
			</p>
		</div>
	</div>
	<!--<div class="small-12" style="margin-bottom:10px;padding:0;">-->
	<!--	<div class="small-12 medium-4 large-4 columns" style="padding:5px;">-->
	<!--		<iframe width="100%" height="315"-->
 <!--               src="https://www.youtube.com/embed/SGTg-Wsm3wU">-->
 <!--           </iframe>-->
	<!--	</div>-->
	<!--	<div class="small-12 medium-4 large-4 columns" style="padding:5px;">-->
	<!--		<iframe width="100%" height="315"-->
 <!--               src="https://www.youtube.com/embed/mMy-js2N8Ug">-->
 <!--           </iframe>-->
	<!--	</div>-->
	<!--	<div class="small-12 medium-4 large-4 columns" style="padding:5px;">-->
	<!--		<iframe width="100%" height="315"-->
 <!--               src="https://www.youtube.com/embed/JD_jdjbPf4w">-->
 <!--           </iframe>-->
	<!--	</div>-->
	<!--</div>-->
	<div class = "row"  style = "margin-bottom:10px;margin-top:10px;padding:10px;background-color: #fff;">	
		<div class = "large-12 medium-12 small-12 columns" style = "padding:0;margin-top:10px;">
			<h4 style="color:green;">The CEO&rsquo;s Message</h4>
			<p>
				I welcome you to our Website that serves our main online   gateway of sharing information with the public.  Addition to our social Media platforms our website will be supporting other traditional models of communication. 
			</p>
			<p>
				Once again we are AFE-U, a community based organization in Mityana that empowers, promotes, encourages and develops others through sensitization, training and financing.
			</p>
			<p>
				<b style="color:green;">Our Mission</b> <br>
				To whilst our vision is to P.T.O <br>
				Through this website we shall share and provide actionable information about AFE-U’s activities. <br>
				The website will be two-way channel where you will be commenting with us through our feedback options and AFE-U’s speaking and answering your needs/ quarries.
			</p>
		</div>
	</div>
	<div class = "row" 
		style="padding: 60px 0px;background-color: #fff;">
	    <div class="large-3 medium-3 small-12 columns">
	    	<h4 style="color:#000;">2</h4>
	    	<p style="color:#000;"><i>Volunteers</i></p>
	    </div>
	    <div class="large-3 medium-3 small-12 columns">
	    	<h4 style="color:#000;">5</h4>
	    	<p style="color:#000;"><i>Partners</i></p>
	    </div>
	    <div class="large-3 medium-3 small-12 columns">
	    	<h4 style="color:#000;">17</h4>
	    	<p style="color:#000;"><i>Vulnerable Communities</i></p>
	    </div>
	    <div class="large-3 medium-3 small-12 columns">
	    	<h4 style="color:#000;">4</h4>
	    	<p style="color:#000;"><i>Projects</i></p>
	    </div>
	</div>    
	<!-- End Welcome Message -->
	<div class="row">
      <div class="large-10 medium-10 small-12 small-centered columns"
      	style="margin-top:30px;
      	padding:10px;background-color: #fff;">
        <h2 style="color:green;text-align: center;">
          We exist for the community</h2>
      </div>
   </div>
	 <!-- Mission And Vision -->
	  <div class = "large-12 medium-12 small-12"
	   style="margin-top: 20px;padding: 20px;">
	    <div class="large-4 medium-4 small-12 columns">
	      <h4 style="color: green;padding:10px 30px;background-color: #fff;">Vision</h4>
	      <img src="images/afe_1.jpg" style="width:100%;height: auto;
	        border-radius: 5px;">
	        <p style="padding:10px 30px;background-color: #fff;">
	          To be an Organisation of excellence for quality counseling, care and love to older 				persons.
	      </p>
	    </div>
	    <div class="large-4 medium-4 small-12 columns"
	    	>
	      <h4 style="color: green;padding:10px 30px;background-color: #fff;">Our Mission</h4>
	      <img src="images/afe_2.jpg" style="width:100%;height: auto;
	        border-radius: 5px;">
	        <p style="padding:10px 30px;background-color: #fff">
	         Provide holistic older persons –centered care, counseling and love.
	      </p>     
	    </div>
	    <div class="large-4 medium-4 small-12 columns"
	    	>
	      <h4 style="color: green;padding:10px 30px;background-color: #fff;">Motto</h4>
	      <img src="images/afe_3.jpg" style="width:100%;height: auto;
	       border-radius: 5px;">
	        <p style="padding:10px 30px;background-color: #fff">
	          Aging in Unity, Peace, Love, Dignity and Prosperity. 
	        </p>	           
	    </div>
	  </div>
	  <!-- End Of Mission and Vision -->
	  <!-- Volunteer Banner -->
		<div class="small-12 columns" 
			style="background-color:green;">
			<div class="small-11 medium-12 large-12 column"
			 style="padding:40px 0px;">	
			 	<div class="row">
			      <div class="large-5 medium-5 small-12 small-centered columns">
			        <h2 style="color:#fff;text-align: center;">
			          Get Involved</h2>
			      </div>
			    </div>
		        <div class="small-12">
		          <div class="large-6 medium-6 small-12 columns">
		          	<div class="row">
		          		<div class="small-12 medium-12 large-12 columns">
				          	<p style="color:#fff;">Feel free take part in our community works. 		
				            	You can do this by volunteering or donating to our organization. 
				            </p>
				            <h6>Use the form below to send us details.</h6>
		          		</div>
		          	</div>
		            <div class="row">
		              <div class="small-12 medium-12 large-12 columns"> 
		                <input type="text" name="" placeholder="Your Name *" style="color:#000;">
		              </div>
		            </div>
		            <div class="row">
		              <div class="small-12 medium-12 large-12 columns"> 
		                <input type="text" name="" 
		                  placeholder="Your Email Address *" style="color:#000;">
		              </div>
		            </div>
		            <div class="row">
		              <div class="small-12 medium-12 large-12 columns"> 
		                <label>
		   							<textarea  name="message" rows="6" col="6"
		   							placeholder="Subject:" style="color:#000;"></textarea>
		  						</label> <br>
		  						<input type="submit" name=""style="color:#000;padding: 10px;" value="SEND MESSAGE">
		              </div>
		            </div>
		          </div>
		          <div class="large-6 medium-6 small-12 columns">
		            <div class="row">
		              <div class="small-12 medium-12 large-12 columns">
											<img src="images/afe_4.jpg" 
												style="margin:10px;width:100%;height:auto;">
		              </div>
		            </div>
		          </div>
		        </div> 
			</div>	


		
		</div>
<?php include("templates/footer.php"); ?>
