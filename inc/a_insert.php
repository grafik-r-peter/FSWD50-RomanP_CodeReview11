<?php

// ADD TRIP ACTION //
	if(isset($_POST['addTrip'])) {

	$places_name = $_POST['places_name'];
	$places_img = $_POST['places_img'];
	$places_desc = $conn->real_escape_string($_POST['places_desc']);

		// INSERTING ITEM INFO
		$sql = "
		INSERT INTO places 
		(
			places_name, 
			places_img, 
			places_desc
		)
		VALUES ('$places_name', '$places_img', '$places_desc')";

		if (mysqli_query($conn, $sql)) {
		   echo "New Trip <strong>" . $places_name . " created.\n <br>";
		} else {
		   echo "Creation error for: " . $sql . "\n" . mysqli_error($conn);
		}

		
	}

// ADD Concert ACTION //

	if(isset($_POST['addConcert'])) {

	$concerts_artist = $_POST['concerts_artist'];
	$concerts_name = $_POST['concerts_name'];
	$concerts_img = $_POST['concerts_img'];
	$concerts_date = $_POST['concerts_date'];
	$concerts_desc = $conn->real_escape_string($_POST['concerts_desc']);
	$concerts_price = $_POST['concerts_price'];

		// INSERTING ITEM INFO
		$sql = "
		INSERT INTO concerts 
		(
			concerts_artist, 
			concerts_name, 
			concerts_img,
			concerts_date,
			concerts_desc,
			concerts_price
		)
		VALUES ('$concerts_artist', '$concerts_name', '$concerts_img', '$concerts_date', '$concerts_desc', '$concerts_price')";

		if (mysqli_query($conn, $sql)) {
		   echo "New Concert <strong>" . $concerts_name . " created.\n <br>";
		} else {
		   echo "Creation error for: " . $sql . "\n" . mysqli_error($conn);
		}

	}	


// ADD Restaurant ACTION //

	if(isset($_POST['addRestaurant'])) {
	$restaurants_name = $_POST['restaurants_name'];
	$restaurants_url = $_POST['restaurants_url'];
	$restaurants_img = $_POST['restaurants_img'];
	$restaurants_tel = $_POST['restaurants_tel'];
	$restaurants_desc = $conn->real_escape_string($_POST['restaurants_desc']);
	$restaurants_type = $_POST['restaurants_type'];

		// INSERTING ITEM INFO
		$sql = "
		INSERT INTO restaurants 
		(
			restaurants_name, 
			restaurants_url, 
			restaurants_img,
			restaurants_tel,
			restaurants_desc,
			restaurants_type
		)
		VALUES ('$restaurants_name', '$restaurants_url', '$restaurants_img', '$restaurants_tel', '$restaurants_desc', '$restaurants_type')";

		if (mysqli_query($conn, $sql)) {
		   echo "New Concert <strong>" . $restaurants_name . " created.\n <br>";
		} else {
		   echo "Creation error for: " . $sql . "\n" . mysqli_error($conn);
		}

	}	
	



	mysqli_close($conn);
?>
