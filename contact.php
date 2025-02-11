<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'CONTACT';
?>
<?php include("templates/header.php"); ?>
	<div class="row"></div>
	<div class = "small-12 columns" style = "padding:0;background-color:#fff;">
		<div class="large-12 medium-12 small-11 columns" style="padding:10px 10px;">
			<h3 style="color:red;">Feel free to connect with us</h3>
			<p class = "paragraphs">
				You can always feel free to send us an email, a message or give us a call. We are always ready to respond.
			</p>
		</div>
	</div>
	<div class="small-12 columns" style = "padding:0;background-color:#fff;
		padding:10px 10px;margin-bottom: 10px;">
		<div class = "large-12 medium-12 small-11 columns" style = "padding:0;">
			<div class="row">
				<div class="small-12 medium-6 large-6 columns">
					<div class="row">
 						<div class="large-12 medium-12 small-11 columns" >						
							<iframe width="100%" height="450px" frameborder="0" style="border:0"
								src="https://www.google.com/maps/embed/v1/place?q=Mityana,+Central+Region,
								+Uganda&key=AIzaSyDwqxCthRVdequ-UQxQFbhfLBcLQbiw3SI">
							</iframe>
						</div>
 					</div>
	 					<?php
					    if(isset($_GET['submit'])){
					        $to = "afeug@gmail.com"; // this is your Email address
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
				</div>
				<div class="small-12 medium-6 large-6 columns">
					<form action="contact.php" method="get">
 						<div class="row">
	 						<div class="large-12 medium-12 small-11 columns">
				                <label>
				                  <input name="s_name" type="text"
				                  placeholder="Name:"style ="color:#000;height:50px;"/>
				                </label>
			              </div>
	 					</div>
	 					<div class="row">
	 						<div class="large-12 medium-12 small-11 columns">
				                <label>
				                  <input name="email" type = "email"
				                  placeholder="Email:"style ="color:#000;height:50px;"/>
				                </label>
			              </div>
	 					</div>
	 					<div class="row">
	 						<div class="large-12 medium-12 small-11 columns">
				                <label>
				                  <input name="subject" type="text"
				                  placeholder="Subject:"style ="color:#000;height:50px;"/>
				                </label>
			              </div>
	 					</div>
	 					<div class="row">
					        <div class="large-12 medium-12 small-11 columns">
		  						<label>
		   							<textarea  name="message" rows="11" col="12"
		   							placeholder="Message:" style="color:#000;"></textarea>
		  						</label>      						
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
					        <div class="large-12 medium-12 small-11 columns">  
		  						<input type="submit" name="submit" 
		  						value="Send Message" class="button tiny info" style = "float:right;">
							</div>
						</div>
 					</form>
				</div>
			</div>
		</div>
	</div>
<?php include("templates/footer.php"); ?>
