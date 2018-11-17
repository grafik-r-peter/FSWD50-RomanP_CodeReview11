<?php
			// DISPLAY RESTAURANTS OUT OF DATABASE //

		$sql = 	"	SELECT 	
					l.location_id,
					l.location_adress,					
					l.location_city, 
					l.location_zip,
					r.restaurants_img, 
                    r.restaurants_desc,
                    r.restaurants_name,
                    r.restaurants_url,
                    r.restaurants_type,
                    r.restaurants_tel

					FROM `location` AS l
                    JOIN `restaurants` AS r ON r.restaurants_id = l.restaurants_id
				";


		function issetor(&$result, $default = false) {
	    	return isset($result) ? $result : $default;
		}
		$result = mysqli_query($conn, $sql);

		// fetch the next row (as long as there are any) into $row
		while($row = mysqli_fetch_assoc($result)) {
		       echo '
						  <div class="col-sm-6 mt-1">
						    <div class="card">
						    	<img class="card-img-top img-places" src=" '.$row["restaurants_img"].' " alt=" '.$row["restaurants_name"].' "> 
								<div class="card-body">

									<h5 class="card-title"> 
										'.$row["restaurants_name"].' 
									</h5>
									<p class="card-text">   
										'.$row["location_adress"].' <br>
										'.$row["location_zip"].' '.$row["location_city"].' <br>
										<a href="'.$row["restaurants_url"].'" target="_blank" > Website</a> <br>
										'.$row["restaurants_tel"].' <br>
										Type: '.$row["restaurants_type"].' <br>
									</p>
									<p class="card-text"> 
										'.$row["restaurants_desc"].' 
									</p>
								</div>
						    </div>
						  </div>
		       		';

		}		

		// Free result set
		mysqli_free_result($result);
	
	mysqli_close($conn);
?>
