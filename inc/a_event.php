<?php
			// DISPLAY Trips OUT OF DATABASE //

		$sql = 	"	SELECT 	
					l.location_id,
					l.location_adress,					
					l.location_city, 
					l.location_zip,
					p.places_img, 					
					p.places_name, 
                    p.places_desc

					FROM `location` AS l
                    JOIN `places` AS p ON p.places_id = l.places_id
				";


		// function issetor(&$result, $default = false) {
	 //    	return isset($result) ? $result : $default; // doesnt work, fuckin hell
		// }

		$result = mysqli_query($conn, $sql);
		echo "	<div class='col-sm-12  mt-5'>
					<h2 class='text-center'>Trips</h2>
				</div>";
		// fetch the next row (as long as there are any) into $row
		while($row = mysqli_fetch_assoc($result)) {



		       echo '	
						  <div class="col-sm-6 mt-1">
						    <div class="card">
						    	<img class="card-img-top img-places" src=" '.$row["places_img"].' " alt=" '.$row["places_name"].' "> 
								<div class="card-body">

									<h5 class="card-title"> 
										'.$row["places_name"].' 
									</h5>
									<p class="card-text">   
										'.$row["location_adress"].'<br>
										'.$row["location_zip"].' '.$row["location_city"].' 
									</p>
									<p class="card-text"> 
										'.$row["places_desc"].' 
									</p>
								</div>
						    </div>
						  </div>
		       		';
		}		
?>


<?php
			// DISPLAY Concerts OUT OF DATABASE //

		$sql = 	"	SELECT 	
					l.location_id,
					l.location_adress,					
					l.location_city, 
					l.location_zip,
					c.concerts_img, 					
					c.concerts_artist, 
                    c.concerts_name,
                    c.concerts_date,
                    c.concerts_desc,
                    c.concerts_price

					FROM `location` AS l
                    JOIN `concerts` AS c ON c.concerts_id = l.concerts_id
				";


		// function issetor(&$result, $default = false) {
	 //    	return isset($result) ? $result : $default; // doesnt work, fuckin hell
		// }
		$result = mysqli_query($conn, $sql);
		// fetch the next row (as long as there are any) into $row
		echo "	<div class='col-sm-12  mt-5'>
					<h2 class='text-center'>Concerts</h2>
				</div>";
		while($row = mysqli_fetch_assoc($result)) {



		       echo '
						  <div class="col-sm-6 mt-1">
						    <div class="card">
						    	<img class="card-img-top img-places" src=" '.$row["concerts_img"].' " alt=" '.$row["concerts_artist"].' "> 
								<div class="card-body">

									<h5 class="card-title"> 
										'.$row["concerts_artist"].' 
									</h5>
									<h6>
										'.$row["concerts_name"].'										
									</h6>
									<p class="card-text">   
										'.$row["concerts_date"].' <br>
										'.$row["location_zip"].' '.$row["location_city"].' <br>
										Price: '.$row["concerts_price"].',- €<br>
									</p>
									<p class="card-text"> 
										'.$row["concerts_desc"].' 
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