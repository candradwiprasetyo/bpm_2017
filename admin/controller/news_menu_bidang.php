<?php
include '../../libraries/config.php';
$req = $_GET['req'];
switch($req){
/*------ untuk menyimpan data  -------------*/	
	case save:
	extract($_POST);
	$user_id = $_SESSION['user_id'];
	$news_img = $_FILES['img']['name'];
	$date = date("Y-m-d H:m:s");
	$path = "img/img_news_menu/";
	$date2 = date("YmdHms");
	
	if($news_title == "" || $rte1 == ""){
		header('Location: ../../admin.php?page=admin/view/news_menu_bidang&add=1&err=1');

	}else{
	
	if($news_img != ""){
		$Mysql->save("news_menu",
					"('','$news_title','','$rte1','$date','$user_id','$path$date2$news_img','','$i_smenu','$i_show', '0')");
		move_uploaded_file($_FILES['img']['tmp_name'],"../../".$path.$date2.$_FILES['img']['name']);
	  }else{
		$Mysql->save("news_menu", "('','$news_title', '','$rte1','$date','$user_id','','$i_smenu','$i_show', '0')");
			}
			header('Location: ../../admin.php?page=admin/view/news_menu_bidang&did=1');

	}
	break;
/*------ untuk mengubah data  -------------*/	
	case edit:
	$news_id = $_GET['news_id'];
	$date2 = date("YmdHms");
	extract($_POST);
	$news_img = $_FILES['img']['name'];
	$path = "img/img_news_menu/";
	
	$query = mysql_query("select * from news_menu where news_id='$news_id'");
	$obj = mysql_fetch_object($query);
	$fots = $obj->news_img;
	
	if($news_title == "" || $rte1 == ""){
		header("Location: ../../admin.php?page=admin/view/news_menu_bidang&news_id=$news_id&err=1");

	}else{
	
	if($news_img != ""){
		if(file_exists("../../".$fots ) && $fots != ""){
		unlink("../../".$fots);
		 }
			$Mysql->edit("news_menu", "news_title='$news_title', news_content ='$rte1', news_img='$path$date2$news_img', 
			             news_cat_id = '$i_smenu',active_status = '$i_show' ", 
					     "news_id='$news_id'");
			move_uploaded_file($_FILES['img']['tmp_name'],"../../".$date2.$path.$_FILES['img']['name']);
	     }else{
			$Mysql->edit("news_menu","news_title='$news_title', news_content ='$rte1',news_id='$news_id',
			 			  news_cat_id='$i_smenu',active_status='$i_show'",
			 		      "news_id='$news_id'");
			}
			header('Location: ../../admin.php?page=admin/view/news_menu_bidang&did=2');
	}
	
	break;
/*---------Untuk Delete Data-------------*/
	case delete:
	$news_id = $_GET['news_id'];
	
	$query = mysql_query("select * from news_menu where news_id='$news_id'");
	$obj = mysql_fetch_object($query);
	$fots = $obj->news_img;
	if(file_exists("../../".$fots) && $fots != ""){
			unlink("../../".$fots);
	    	}
	$Mysql->delete("news_menu","news_id='$news_id'");
	header('Location: ../../admin.php?page=admin/view/news_menu_bidang&did=3');

	break;
	
	case act:
	$news_id = $_GET['news_id'];
	
		$Mysql->edit("news_menu","active_status='1'","news_id='$news_id'");
		header('Location: ../../admin.php?page=admin/view/news_menu_bidang&did=4');
	
		
	break;
	
	case deact:
	$news_id = $_GET['news_id'];

		$Mysql->edit("news_menu","active_status='0'","news_id='$news_id'");
		
		header('Location: ../../admin.php?page=admin/view/news_menu_bidang&did=5');
	break;
}

?>