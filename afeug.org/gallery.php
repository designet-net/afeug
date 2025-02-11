<?php 
include("templates/header.php");
?>
<div class="home-container">
	<div class="row" style="margin-bottom:10px;padding:0;">
		<div class="small-12 medium-12 large-12 columns" style="padding:0;">
			<ul class="clearing-thumbs small-block-grid-3" data-clearing>
			  <?php for ($i=1; $i <=12; $i++):?>
				<li style="color:#fff;">
					<a href="<?php echo 'images/'.'gal'.$i.'.jpg'; ?>">
					<img  src = "<?php echo 'images/'.'gal'.$i.'.jpg'; ?>">
					</a>
				</li>
			<?php endfor; ?>	
			</ul>
		</div>
	</div>
</div>		
<?php 
include("templates/footer.php");
?>