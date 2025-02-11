<?php
	session_start();
	$_SESSION['CURRENT_PAGE'] = 'GET';
?>
<?php include("templates/header.php"); ?>
	<div class = "row" style = "margin-top:20px;">
		<div class = "small-12 columns" style = "padding:50;background-color:#fff;">
			<h2>Way to donate</h2>
			<p class = "paragraphs" style ="font-size:18px;">
				Let us work together to uplift the lives of the <b>aging</b> and
				<b>vulnerable</b> children
				in our society.
				<b style = "color:red;">Take action</b> in this cause.
			</p>
			<h3>Bank</h3>
			<p class = "paragraphs" style ="font-size:18px;">
				<b>Bank Type:</b> Centinary Bank Uganda <br>
				<b>Account Name:</b> Action For Elderly Uganda  <br>
				<b>Account Number:</b>3100084130  <br>
				<b>Branch:</b> Mityana- Uganda <br>
			</p>
		</div>
	</div>
	<div class = "small-12"
	style = "background:url(<?php echo ('images/donate-1.jpg');?>);
				background-position:center;-webkit-background-size: cover;-moz-background-size:
				cover;-o-background-size:cover;background-size: cover;padding-top:100px;
				padding-bottom:100px;">
		<div class = "row">
			<div class = "large-12 medium-12 small-12 columns">
				<h4>you also can</h4>
				<p style="color:#fff;">Action For The Elderly is
				 there for ulnerable children;
				 you can be too! Please give what you can.</p>
				 <p style="color:#fff;">We accept donation of the following means listed below:</p>
				 <ul>
				 	<li style="color:#fff;">Gifts</li>
				 	<li style="color:#fff;">Daily donations</li>
				 	<li style="color:#fff;">Weekly donations</li>
				 	<li style="color:#fff;">Monthly donations</li>
				 	<li style="color:#fff;">Any form of giving</li>
				 </ul>
			</div>
		</div>
	</div>
<?php include("templates/footer.php"); ?>
