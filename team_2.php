<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'ABOUT';
?>
<?php include("templates/header.php"); ?>
	<div class="row"></div>
	<div class="row">
      <div class="large-5 medium-5 small-12 small-centered columns"
      	style="margin-top:30px;">
        <h2 style="color:green;text-align: center;background-color: #fff;">
          Our Team</h2>
      </div>
   	</div>
	<div class = "small-12" style="">
		<div class = "small-12 columns" style = "padding:10px 0px;background-color:#fff;">
			<div class = "about-container" style="padding:80px;width:100%;padding:0;">
				<div class="row">
					<div class="small-12 medium-12 large-12 columns" style="margin-top:20px;margin-bottom:20px;">
					    <h5>
							Frank Sseguya 
						</h5>
						<h5 style="text-transform:uppercase;color:green">			Director
						</h5>
						<p>
							Francis is a Farmer and one of the key Opinion Leader in Mityana. He is a straunch advocate of OPs well-being and one of the Founding Directors of AFE-U on whom AFE-U depends for the mobilization of new members.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php include("templates/footer.php"); ?>
