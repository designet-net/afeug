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
					    <h5>Bukenya Osward</h5>
						<h5 style="text-transform:uppercase;color:green">
							Director
						</h5>
						<p>
							Osward Bukenya is the current Chairman of the Executive Committee and one of the founders of AFE-U. He is a professional Social Worker and Administrator. He has extensive experience in counselling and guidance, community entry and development, community rehabilitation and general NGO Administration. He offers direction to AFE-U.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php include("templates/footer.php"); ?>
