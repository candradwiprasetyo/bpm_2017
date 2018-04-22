
<!-- Navigation
================================================== -->
<nav id="navigation" class="style-1">

<div class="container floated">
<ul class="menu" id="responsive">
	<?php
	  $i = 1;
	  $con=mysqli_connect("localhost","root","root","bpm");
	  $q_menu = $mysqli->query("select * from menus where level = '1' order by index_id");
	  $jml = mysqli_num_rows($q_menu);
	  while($r_menu = mysqli_fetch_array($q_menu)){
		  
		  if($r_menu['id_menu'] == 1){
			  $link = $r_menu['link'];
		  }else if($r_menu['id_menu'] == 59){
				$link = "../ppid/";
		  }else if($r_menu['id_menu'] == 60){
				$link = "http://ejisc.dpmptsp.jatimprov.go.id/app_ejisc/web/";
		  }else{
			  $link = "index.php?page=content_utama&id_menu=".$r_menu['id_menu']."";
		  }
		  
	  ?>
	<li><a href="<?php echo $link?>" <?php if($i==1){ ?>id="current"<?php }?>><?= $r_menu['name']?></a>
		<!-- Second Level / Start -->
		<?php
			
            $q_menu2 = $mysqli->query("select * from menus where level = '2' and id_parent ='".$r_menu['id_menu']."' and id_menu <> 5 and id_menu <> 12 and id_menu <> 29 and id_menu <> 4 order by id_menu");
            $jml2 = mysqli_num_rows($q_menu2);
            if($jml2 > 0){ 
        ?>
		<ul>
			<?php
				$i2 = 1;
                while($r_menu2 = mysqli_fetch_array($q_menu2)){
					
				  if($r_menu2['id_menu'] == 15 || $r_menu2['id_menu'] == 44 || $r_menu2['id_menu'] == 45 
				  || $r_menu2['id_menu'] == 46 || $r_menu2['id_menu'] == 43 || $r_menu2['id_menu'] == 53
				  || $r_menu2['id_menu'] == 31 || $r_menu2['id_menu'] == 32 || $r_menu2['id_menu'] == 33
				  || $r_menu2['id_menu'] == 68
				  ){
					  $link2 = $r_menu2['link'];
				  }else if($r_menu2['id_menu'] == 40 || $r_menu2['id_menu'] == 41){
					  $link2 = "index.php?page=content_utama&id_menu=".$r_menu2['id_menu'];
				  //}else if($r_menu2['id_menu'] == 35 || $r_menu2['id_menu'] == 36 || $r_menu2['id_menu'] == 37 || $r_menu2['id_menu'] == 38 || $r_menu2['id_menu'] == 39){
					  // $link2 = "index.php?page=investment_guide&ig_type=".$r_menu2['id_menu'];
				  }else if($r_menu2['id_parent']==59 && $r_menu2['id_menu']!=68){
					  $link2 = "index.php?page=content_utama&id_menu=".$r_menu2['id_menu'];
				  }else{
					  $link2 = "index.php?page=content&id_menu=".$r_menu2['id_menu']."";
				  }
					
            ?>
			<li><a href="<?php echo $link2?>"><?= $r_menu2['name']?></a>
				 <?php
                    $q_menu3 = $mysqli->query("select * from menus where level = '3' and id_parent ='".$r_menu2['id_menu']."' order by id_menu");
                    $jml3 = mysqli_num_rows($q_menu3);
                    if($jml3 > 0){ 
                    	?>
					<ul>
					<?php
                    	while($r_menu3 = mysqli_fetch_array($q_menu3)){
                    ?>
					<li><a href="index.php?page=content&id_menu=<?php echo $r_menu3['id_menu']?>"><?= $r_menu3['name']?></a></li>
					<?php
					}
					
					?>
				</ul>
				<?php
				}
				?>
			</li>
			<?php
			$i2++;
            }
            ?>
		</ul>
		<?php 
        }
        ?>
		<!-- Second Level / End -->
	</li>
	<?php
    	$i++;
    }
    ?>

</ul>
</div>
</nav>
<div class="clearfix"></div>
