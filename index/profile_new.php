<!-- 960 Container -->
<div class="row u-bg--white u-box-shadow">
<div class="container">
<!-- Icon Boxes -->
	<section class="icon-box-container">

		<!-- Icon Box Start -->
		<div class="">
			<article class="icon-box">
				<?php
				$query_wp = $mysqli->query("select profile_page, profile_page_name from config");
				$jml_wp = mysqli_num_rows($query_wp);
				$r_wp = mysqli_fetch_object($query_wp);

				$profile_page = "Jawa Timur adalah salah satu ekonomi terbesar di Indonesia dan menikmati pertumbuhan ekonomi yang positif dari tahun ke tahun, termasuk 5 tahun terakhir, selalu di atas rata-rata 5,82% per tahun. Krisis ekonomi global sejak pertengahan 2008 tidak membuat perekonomian Jawa Timur merosot, meskipun sedikit penurunanyang tidak terlalu signifikan.";

				$profile_page_name = "Profil Jawa Timur";

				if($r_wp->profile_page != ""){	
					$profile_page = $r_wp->profile_page;
				}
				if($r_wp->profile_page_name != ""){	
					$profile_page_name = $r_wp->profile_page_name;
				}
				//echo $gambar;
				?>
				<a href="index.php?page=read_profile"><h3 class="c-new-title-content">Profil<span> Jawa Timur</span></h3></a>
				<img src="images/surabaya.jpg" class="profile-img">
				<p>
				<?php
					$ac = explode(" ", $profile_page);
					// for($cc=0; $cc<=60; $cc++){
					// 	if(isset($ac[$cc])){
					// 		echo $ac[$cc]." ";
					// 	}
					// }echo "... ";
					echo $profile_page;
				?></p>
			</article>
			<div class="clear"></div><br>
			<div class="box-kabupaten">
			<div class="title">Informasi Investasi di Kabupaten/Kota:</div>
			<select name="i_search_kabupaten" id="i_search_kabupaten" class="select" onselect="get_kabupaten()">
				<option value="0">Pilih Kab/Kota</option>
		        <?php
		        $q_city = $mysqli->query("select * from cities");
				while($r_city = mysqli_fetch_array($q_city)){
				?>
		          <option value="<?= $r_city[0] ?>">
		            <?= $r_city[1] ?>
		          </option>
		          <?php
				}
				?>
			</select>
			<br>
			<a class="button gray medium" onclick="get_kabupaten()">Cari</a>
			</div>

			
		</div>
		

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