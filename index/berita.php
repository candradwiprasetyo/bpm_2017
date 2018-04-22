<!-- 960 Container -->
<div class="row u-bg--white u-box-shadow u-pad-bottom--20 u-margin-bottom--30">
<div class="container">

	<!-- Recent News -->
	<div class="">

		<a href="index.php?page=content&id_menu=6"><h3 class="margin-1 c-new-title-content">Berita  <span>Terbaru</span></h3></a>
		<?php
		$query_news1 = $mysqli->query("SELECT * FROM news_menu WHERE news_cat_id = 6 and active_status = '1' ORDER BY news_date DESC LIMIT 0,3");
			while($row_news1 = mysqli_fetch_array($query_news1)){
		?>
		<div class="one-third column">
			<article class="recent-blog">
				<section class="date">
					<span class="day"><?= format_only_date($row_news1['news_date']); ?></span>
					<span class="month"><?= format_only_month($row_news1['news_date']); ?></span>
				</section>

				<a href="index.php?page=content&id_menu=6&news_id=<?= $row_news1['news_id'] ?>">
				<h4>
					<div class="c-main-photo u-margin-bottom--10">
						<img src="<?php echo $row_news1['news_img'] ?>" class="news-img">
					</div>
				<?= $row_news1['news_title']?></h4></a>
				<p>
					<?php
						$a = explode(" ",$row_news1['news_desc_index']);
						for($c=0; $c<=50; $c++){
							if(isset($a[$c])){
								echo $a[$c]." ";
							}
						}echo "... "; 
					?>

				</p>
			</article>
		</div>
		<?php
		}
		?>
		

	</div>


	
</div>
</div>
<!-- 960 Container / End -->