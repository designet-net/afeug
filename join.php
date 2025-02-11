<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'JOIN';
?>
<?php include("templates/header.php"); ?>
	<div class="row"></div>
	<div class="row">
      <div class="large-8 medium-8 small-12 small-centered columns"
      	style="margin-top:30px;">
        <h2 style="color:green;text-align: center;background-color: #fff;">
          Volunteer With Us</h2>
      </div>
   	</div>
	<div class = "small-12" style="">
		<div class = "small-12 columns" style = "padding:20px 0px;background-color:#fff;">
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
                  <input type="text" name="" 
                    placeholder="Subject *" style="color:#000;">
                </div>
              </div>
              <div class="row">
                <div class="small-12 medium-12 large-12 columns"
                	style="margin:20px 0px;">
                  <textarea cols="5" rows="5" 
                  	placeholder="Your Message">
                    
                  </textarea>
                </div>
              </div>
		</div>
	</div>	
<?php include("templates/footer.php"); ?>
