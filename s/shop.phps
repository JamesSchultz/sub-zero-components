
		<?php include ('is/header.php'); ?>
	<?php 
	
		$id = $_GET['id'];
	
	?>
		<!-- stuff -->
		<div class="container  "><!--  container-->
			<div class="row clear">
				<div class="twelvecol "><!--nav track -->
					<div id='track'>
						<ul>
							<li><a href='home.php'>Home</a></li>
							<li>/</li>
							<li><a href='#'>Cooling Supplies</a></li>
							<li>/</li>
							<li><a href='catalog.php'>Liquid Cooling</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row space">
					<?php include ('is/product.php'); ?> 
			</div>
		</div>
		<?php include ('is/footer.php'); ?>
