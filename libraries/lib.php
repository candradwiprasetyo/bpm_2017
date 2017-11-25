<?php

$title 			= ".: Badan Penanaman Modal :.";
$icon 			= "img/images/favicon.ico";
$path 			= "index/view/";
$style_body 	= $path.'style_body.php';
$background     = $path.'background.php';
$banner 		= $path.'banner.php';
$tengah 		= $path.'tengah.php';
$visitor 		= $path.'visitor.php';
$sidebar_login  = $path.'sidebar_login.php';
$footer			= $path.'footer.php';
$bawah			= $path.'bawah.php';

function count_data($table, $where){
		$query = $mysqli->query("select count(*) as jumlah from $table where $where");
		$row = mysqli_fetch_object($query);
		return $row->jumlah;
	}

function format_date($str){
	$date = explode(" ", $str);
	$new_date = explode("-", $date[0]);
	
	//return $new_date[2]."/".$new_date[1]."/".$new_date[0]." ".$date[1];
	return $new_date[2]."/".$new_date[1]."/".$new_date[0];
	
}

function format_only_date($data){
	$phpdate = strtotime( $data );
	$mysqlidate = date( 'd', $phpdate );

	return $mysqlidate;
}

function format_only_month($data){
	$phpdate = strtotime( $data );
	$mysqlidate = date( 'M', $phpdate );

	return $mysqlidate;
}
	
?>