<?php

ini_set('display_errors','On');
 error_reporting(E_ALL);
 
 
include ('dash.php');



		
		if(isset($_SESSION['cart'])){
                $ids = "";
				//echo	 "<div>" . $ids . " are in ids.</div>";
                foreach($_SESSION['cart'] as $id){
                        $ids = $ids . $id . ",";
                }
                
                // remove the last comma
                $ids = rtrim($ids, ',');
					//echo	 "<div>" . $ids . " are in ids.</div>";

		
		
				if (($ids=="")||($ids == null)){
					echo"<span>$0.00</span>";
					}

				//id, `Product Name`, Cost, Image
				else{
					$query='SELECT * FROM products WHERE id IN (' .$ids.')';
					
					$result=$mysqli->query($query)
						or die ($mysqli->error);
						

					$num=$result->num_rows;

					
					$subtotal = 0;

					if ($num>0){
						while ($row=$result->fetch_assoc()){
						
								$product=$row['Product Name'];
								$cost=$row['Cost'];
								$img=$row['Image'];
								$id=$row['id'];
							
								$subtotal = $cost + $subtotal ;
								
								
								}
							}
							echo "
								<span>
									$$subtotal
								</span>
								
								";
				}
			
		}
		else{	echo "<div>$0.00</div>";}							
										
?>