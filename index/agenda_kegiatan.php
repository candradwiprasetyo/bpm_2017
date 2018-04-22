<!-- 960 Container -->
<div class="row u-bg--white u-box-shadow">
<div class="container">
<!-- Icon Boxes -->
	<section class="icon-box-container">

		

		<!-- Icon Box Start -->
		<div class="">
			<article class="icon-box">
				
				<a href="index.php?page=news&news_cat_id=3"><h3 class="c-new-title-content">Agenda <span>Kegiatan</span></h3></a>
				 <?php
				$query_news2 = $mysqli->query("SELECT * FROM news WHERE news_cat_id = 3 and active_status = '1'  ORDER BY news_date DESC LIMIT 0,3");
					while($row_news2 = mysqli_fetch_array($query_news2)){
					?>
				<div class="one-third column">
				<article class="">
					<div class="medium-image-home">
						<figure class="post-img picture">
							<a href="index.php?page=read&num=<?= $row_news2['news_id']?>"><img src="<?php echo $row_news2['news_img'] ?>" alt=""></a>
						</figure>
					</div>

					<div class="medium-content-home">
						<header class="meta">
							<div class="medium-content-title"><a href="index.php?page=read&num=<?= $row_news2['news_id']?>"><?= $row_news2['news_title']?></a></div>
							
							<span><i class="icon-calendar medium-calendar"></i><?= format_date($row_news2['news_date']) ?></span>
						</header>
					</div>
					<div style="clear:both"></div>
					<div class="medium-description">
						<?php
							$a = explode(" ",$row_news2['news_desc_index']);
							for($c=0; $c<=15; $c++){
								if(isset($a[$c])){
									echo $a[$c]." ";
								}
							}echo "... "; 
						?>
					</div>
				</article>
				</div>
				<?php
				}
				?>

				
				
			</article>
		</div>
		<!-- Icon Box End -->

	</section>
	<!-- Icon Boxes / End -->

	
</div>
</div>
<!-- 960 Container / End -->

<script type="text/javascript">
function get_kabupaten(){
	var e = document.getElementById("i_search_kabupaten");
	var value = e.options[e.selectedIndex].value;
	if(value==0){
		alert('Pilih kabupaten terlebih dahulu');
	}else{
		window.location = 'index.php?page=news_city&city_id='+value;
	}
}
</script>