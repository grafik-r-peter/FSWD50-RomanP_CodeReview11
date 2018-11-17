<?php
include ('a_insert.php');
?>

<div class="col-md-4">
<form action="admin.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Trip Creation -->
<legend>Add a Trip</legend>

<!-- NAME-->
<div class="form-group">
  <label class="col-md-12 control-label" for="places_name">Trip Name</label>  
  <div class="col-md-12">
  	<input id="title" name="places_name" type="text" placeholder="Trip Name" class="form-control input-md" required="">
  </div>
</div>

<!-- IMAGE-->
<div class="form-group">
	<label class="col-md-12 control-label" for="places_img">Image Url</label>  
	<div class="col-md-12">
		<input id="places_img" name="places_img" type="text" placeholder="Image Url" class="form-control input-md">
	</div>
</div>

<!-- Desc -->
<div class="form-group">
	<label class="col-md-12 control-label" for="places_desc">Description</label>
	<div class="col-md-12">                     
		<textarea class="form-control" id="places_desc" name="places_desc">A few lines</textarea>
	</div>
</div>

<!-- Submit -->
<div class="form-group">
  <label class="col-md-12 control-label" for="addTrip"></label>
  <div class="col-md-12">
    <button id="addTrip" name="addTrip" class="btn btn-primary">New Trip</button>
  </div>
</div>

</fieldset>
</form>
</div>



<div class="col-md-4">
<form action="admin.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Concert Creation -->
<legend>Add a Concert</legend>

<!-- ARTIST NAME-->
<div class="form-group">
  <label class="col-md-12 control-label" for="concerts_artist">Artist</label>  
  <div class="col-md-12">
  	<input id="concerts_artist" name="concerts_artist" type="text" placeholder="Artist" class="form-control input-md" required="">
  </div>
</div>

<!-- Concert name-->
<div class="form-group">
	<label class="col-md-12 control-label" for="concerts_name">Concert name</label>  
	<div class="col-md-12">
		<input id="concerts_name" name="concerts_name" type="text" placeholder="Concert Name" class="form-control input-md">
	</div>
</div>

<!-- IMAGE-->
<div class="form-group">
	<label class="col-md-12 control-label" for="concerts_img">Image Url</label>  
	<div class="col-md-12">
		<input id="concerts_img" name="concerts_img" type="text" placeholder="Image Url" class="form-control input-md">
	</div>
</div>

<!-- Date and Time -->
<div class="form-group">
	<label class="col-md-12 control-label" for="concerts_date">Date and Time</label>
	<div class="col-md-12">                     
		<input class="form-control" type="datetime-local" id="concerts_date" name="concerts_date">
	</div>
</div>

<!-- Description -->
<div class="form-group">
	<label class="col-md-12 control-label" for="concerts_desc">Description</label>  
	<div class="col-md-12">
		<textarea class="form-control" id="concerts_desc" name="concerts_desc">A few lines</textarea>
	</div>
</div>

<!-- Price-->
<div class="form-group">
	<label class="col-md-12 control-label" for="concerts_price">Price</label>  
	<div class="col-md-12">
		<input id="concerts_price" name="concerts_price" type="text" placeholder="Price" class="form-control input-md">
	</div>
</div>

<!-- Submit -->
<div class="form-group">
  <label class="col-md-12 control-label" for="addTrip"></label>
  <div class="col-md-12">
    <button id="addConcert" name="addConcert" class="btn btn-primary">New Concert</button>
  </div>
</div>
       
</fieldset>
</form>
</div>


<div class="col-md-4">
<form action="admin.php" method="POST" class="form-horizontal">
<fieldset>

<!-- Trip Creation -->
<legend>Add a Restaurant</legend>

<!-- NAME-->
<div class="form-group">
  <label class="col-md-12 control-label" for="restaurants_name">Restaurant Name</label>  
  <div class="col-md-12">
  	<input id="title" name="restaurants_name" type="text" placeholder="Name" class="form-control input-md" required="">
  </div>
</div>

<!-- IMAGE-->
<div class="form-group">
	<label class="col-md-12 control-label" for="restaurants_img">Image Url</label>  
	<div class="col-md-12">
		<input id="restaurants_img" name="restaurants_img" type="text" placeholder="Image Url" class="form-control input-md">
	</div>
</div>

<!-- URL-->
<div class="form-group">
	<label class="col-md-12 control-label" for="restaurants_url">Website</label>  
	<div class="col-md-12">
		<input id="restaurants_url" name="restaurants_url" type="text" placeholder="Url" class="form-control input-md">
	</div>
</div>

<!-- Tel-->
<div class="form-group">
	<label class="col-md-12 control-label" for="restaurants_tel">Tel</label>  
	<div class="col-md-12">
		<input id="restaurants_tel" name="restaurants_tel" type="text" placeholder="tel" class="form-control input-md">
	</div>
</div>

<!-- Type-->
<div class="form-group">
	<label class="col-md-12 control-label" for="restaurants_type">Type</label>  
	<div class="col-md-12">
		<input id="restaurants_type" name="restaurants_type" type="text" placeholder="Type of Restaurant" class="form-control input-md">
	</div>
</div>

<!-- Desc -->
<div class="form-group">
	<label class="col-md-12 control-label" for="restaurants_desc">Description</label>
	<div class="col-md-12">                     
		<textarea class="form-control" id="restaurants_desc" name="restaurants_desc">A few lines</textarea>
	</div>
</div>

<!-- Submit -->
<div class="form-group">
  <label class="col-md-12 control-label" for="addRestaurant"></label>
  <div class="col-md-12">
    <button id="addRestaurant" name="addRestaurant" class="btn btn-primary">New Restaurant/Bar</button>
  </div>
</div>

</fieldset>
</form>
</div>