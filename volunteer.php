<div class="large-12 medium-12 small-12 columns volunteer">
	<h4>volunteer with us</h4>
	<div class="row">
		<div class = "large-12 medium-12 small-12 columns" style = "padding:0;">			
			<ul class="small-block-grid-2" style="padding:0;">
 				<li>
 					<div class="row">
 						<div class="large-12 medium-12 small-12 columns" >							
							<img src="images/vol1.jpg">
							<h6 style="text-align:center">
							God is not our last, He is our only hope; Join us in this mission and let their be life for the vulnerable.</h6>
						</div>
 					</div>
 				</li>
 				<li>
 					<?php
				    if(isset($_GET['submit'])){
				        $to = "victoriansofjehovah256@gmail.com"; // this is your Email address
				        $from = $_GET['email']; // this is the sender's Email address
				        $s_name = $_GET['s_name'];
				        $s_name = $_GET['subject'];
				        $subject = "Form submission";
				        $subject2 = "Copy of your form submission";
				        $message =  $s_name . " wrote the following:" . "\n\n" . $_GET['message'];
				        $message2 = "Here is a copy of your message " . $s_name . "\n\n" . $_GET['message'];
				        $headers = "From:" . $from;
				        $headers2 = "From:" . $to;
				        mail($to,$subject,$message,$headers);
				        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
				        echo "Mail Sent. Thank you " . $s_name . ", we will contact you shortly.";
				        // You can also use header('Location: thank_you.php'); to redirect to another page.
				        // You cannot use header and echo together. It's one or the other.
				        }
				  ?>
 					<form action="contact.php" method="get">
 						<div class="row">
	 						<div class="large-12 medium-12 small-12 columns">
				                <label>
				                  <input name="s_name" type="text"
				                  placeholder="Name:"style ="color:#000;height:50px;"/>
				                </label>
			              </div>
	 					</div>
	 					<div class="row">
	 						<div class="large-12 medium-12 small-12 columns">
				                <label>
				                  <input name="email" type = "email"
				                  placeholder="Email:"style ="color:#000;height:50px;"/>
				                </label>
			              </div>
	 					</div>
	 					<div class="row">
	 						<div class="large-12 medium-12 small-12 columns">
				                <label>
				                  <input name="subject" type="text"
				                  placeholder="Volunteer As:"style ="color:#000;height:50px;"/>
				                </label>
			              </div>
	 					</div>
	 					<div class="row">
					        <div class="large-12 medium-12 small-12 columns">
		  						<label>
		   							<textarea  name="message" rows="11" col="12"
		   							placeholder="Message:" style="color:#000;"></textarea>
		  						</label>      						
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
					        <div class="large-12 medium-12 small-12 columns">  
		  						<input type="submit" name="submit" 
		  						value="Volunteer With Us" class="button tiny info" style = "float:right;">
							</div>
						</div>
 					</form> 
 				</li>
 			</ul>
		</div>
	</div>
</div>