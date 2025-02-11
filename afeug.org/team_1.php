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
					    <h5>Rev.Fr Emmanuel Ruwugwaho</h5>
						<h5 style="text-transform:uppercase;color:green">
							Patron
						</h5>
						<p>
							He is a roman catholic priest who is based in Kiyinda Mityana Diocese. He is immensely embedded in the service of
							the Lord and more so the 'neighbour' through Non
							-governmental Organizations (NGOs) and Community
							Based Organisations (CBOs). He was once the Development Co-ordinator of the Diocese of
							Kiyinda Mityana in charge of Projects. He is one of the principal founders of Hope Sharing Family
							(HOSFA), Mityana and it's first Chairman of the 
							Board.Through his own 
                           personal initiative, he has and is still a benefactor
                           to many school-going children and under graduates.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>	
<?php include("templates/footer.php"); ?>
