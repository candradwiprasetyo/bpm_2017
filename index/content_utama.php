<?php
global $mysqli;
 $id_menu = abs((int)$_GET['id_menu']);
   $query_menu = "SELECT * FROM menus WHERE id_menu = $id_menu";
   $excute =  $mysqli->query($query_menu);
   $data = mysqli_fetch_array($excute);
?>
<div class="row u-bg--white u-box-shadow">

<!-- 960 Container -->
<div class="container floated">
	<div class="sixteen floated page-title">
		<h2><?= $data['name']?></h2>
	</div>
</div>
<!-- 960 Container / End -->

<!-- 960 Container -->
<div class="container">
	<div class="page-content">	
		<p><?= $data['content']?></p>

			<br>
	
		<a href="javascript: history.back()" class="button gray medium">Kembali</a>
	</div>
</div>
<!-- End 960 Container -->

</div>
