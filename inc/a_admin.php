<?php

			// DISPLAY COMPLETE DATABASE //

		$sql = 	"	SELECT 	
					l.location_id,
					l.location_adress,					
					l.location_city, 
					l.location_zip,
					p.places_img, 					
					p.places_name, 
                    p.places_desc,
                    c.concerts_img, 					
					c.concerts_artist, 
                    c.concerts_name,
                    c.concerts_date,
                    c.concerts_desc,
                    c.concerts_price,
                    r.restaurants_img, 
                    r.restaurants_desc,
                    r.restaurants_name,
                    r.restaurants_url,
                    r.restaurants_type,
                    r.restaurants_tel

					FROM `location` AS l
                    LEFT JOIN `places` AS p ON p.places_id = l.places_id
                    LEFT JOIN `concerts` AS c ON c.concerts_id = l.concerts_id
                    LEFT JOIN `restaurants` AS r ON r.restaurants_id = l.restaurants_id                    
				";


		$result = mysqli_query($conn, $sql);
		echo "	

				<table class='table admin-table'>
				  <thead>
				    <tr>
				      <th scope='col'>location_id</th>
				      <th scope='col'>location_adress</th>
				      <th scope='col'>location_city</th>
				      <th scope='col'>location_zip</th>
				      <th scope='col'>places_img</th>
				      <th scope='col'>places_name</th>
				      <th scope='col'>places_desc</th>
				      <th scope='col'>concerts_img</th>
				      <th scope='col'>concerts_artist</th>
				      <th scope='col'>concerts_name</th>
				      <th scope='col'>concerts_date</th>
				      <th scope='col'>concerts_desc</th>
				      <th scope='col'>concerts_price</th>
				      <th scope='col'>restaurants_img</th>
				      <th scope='col'>restaurants_desc</th>
				      <th scope='col'>restaurants_name</th>
				      <th scope='col'>restaurants_url</th>
				      <th scope='col'>restaurants_type</th>				      
				      <th scope='col'>restaurants_tel</th>
				    </tr>
				  </thead>";

		// fetch the next row (as long as there are any) into $row
		while($row = mysqli_fetch_assoc($result)) {

		       echo '	
				    <tr>
				      <td scope="col"> '.$row["location_id"].' </td>
				      <td scope="col"> '.$row["location_adress"].' </td>
				      <td scope="col"> '.$row["location_city"].' </td>
				      <td scope="col"> '.$row["location_zip"].' </td>
				      <td scope="col"> '.$row["places_img"].' </td>
				      <td scope="col"> '.$row["places_name"].' </td>
				      <td scope="col"> '.substr($row["places_desc"], 0, 100).' ...</td>
				      <td scope="col"> '.$row["concerts_img"].' </td>
				      <td scope="col"> '.$row["concerts_artist"].' </td>		
				      <td scope="col"> '.$row["concerts_name"].' </td>
				      <td scope="col"> '.$row["concerts_date"].' </td>
				      <td scope="col"> '.substr($row["concerts_desc"], 0, 100).' ...</td>
				      <td scope="col"> '.$row["concerts_price"].' </td>
				      <td scope="col"> '.$row["restaurants_img"].' </td>
				      <td scope="col"> '.substr($row["restaurants_desc"], 0, 100).' ...</td>
				      <td scope="col"> '.$row["restaurants_name"].' </td>
				      <td scope="col"> '.$row["restaurants_url"].' </td>
				      <td scope="col"> '.$row["restaurants_type"].' </td>				      
				      <td scope="col"> '.$row["restaurants_tel"].' </td>
				    </tr>		       			

		       		';
		}

?>