<?php   
	global $mysqli;
   $query = "SELECT welcome_page, welcome_page_photo, welcome_page_name FROM config";
   $excute =  $mysqli->query($query);
   $data = mysqli_fetch_array($excute);
?>

<div id="content">

<!-- 960 Container -->
<div class="container floated">
	<div class="sixteen floated page-title">
		<h2><?= $data['welcome_page_name']?></h2>
	</div>
</div>
<!-- 960 Container / End -->

<!-- 960 Container -->
<div class="container">
	<div class="page-content">
		<img src="<?= $data['welcome_page_photo']?>" class="image-left" style="width: 30%; margin-bottom: 40px;">
		<p><?= $data['welcome_page']?></p>
	</div>
</div>
<!-- End 960 Container -->

</div>
