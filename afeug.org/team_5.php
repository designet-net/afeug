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
					   <h5>Simon Mulindwa</h5>
						<h5 style="text-transform:uppercase;color:green">		General Secretary
						</h5>
						<p>
							Simon is a graduate teacher with vast experience in
							secondary teaching at both ordinary and advanced
							levels. He has all along been very active in the
							activities of AFE-U. He is in charge of the day to
							day Administration of AFE-U.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php include("templates/footer.php"); ?>
