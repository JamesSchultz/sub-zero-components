<?php
$page_title = "Sub Zero Components - Catalog";
include ('is/header.php'); 
?>

		<!-- stuff -->
		<div class="container  "><!--  container-->
			<div class="row space">
				<div class="row">
			
					<div class="threecol "><!--sidebar col-->
						<div id="sidebar">
							<div><h3>Cooling Supplies</h3></div>
							<div>
								<ul>
									<li>Case Fans</li>
									<li>Heatsinks</li>
									<li>Laptop Cooling</li>
									<li>Liquid Cooling</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ninecol last"> <!--products col-->
						<div>
							<?php include ('is/listing.php'); ?>
						</div>
					</div>
				</div><!--end row-->
				
				</div>
		</div>
<?php include ('is/footer.php'); ?>
