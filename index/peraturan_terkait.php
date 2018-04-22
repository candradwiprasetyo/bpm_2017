<!-- 960 Container -->
<div class="row u-bg--white u-box-shadow u-pad-bottom--20 u-margin-bottom--30">
<div class="container">

	<!-- Recent News -->
	 
	<div class="">

		<h3 class="margin-1 c-new-title-content">Peraturan  <span>Terkait</span></h3>

		<div class="">
			<div class="pricing-table-new">
				<div class="color-1">
					<ul>
						<?php
						$query_news3 = $mysqli->query("SELECT * FROM news where news_cat_id = '4' and active_status = '1' ORDER BY news_id DESC LIMIT 0,10");
						while($row_news3 = mysqli_fetch_array($query_news3)){
						?>     
						<a href="index.php?page=read&num=<?= $row_news3['news_id'] ?>">            
						<li class="sign-up"><i class="icon-check-circle"></i><?php echo $row_news3['news_title']; ?></li>
					</a>
						<?php
						}
						?>
					</ul>
					<br>
				</div>
			</div>
		</div>


	</div>

	
</div>
</div>
<!-- 960 Container / End -->