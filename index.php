<?php
include 'libraries/config_new.php';
include 'libraries/lib_new.php';
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>DPM PTSP Provinsi Jatim</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/colors/blue.css" id="colors">
<link rel="shortcut icon" href="img/images/favicon.ico">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,100italic,400italic|Roboto+Condensed|Montserrat:100,200,300,400,500,600,700&lang=en">




<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Java Script
================================================== -->

<script src="scripts/jquery.js"></script>
<script src="scripts/jquery.migrate.js"></script>
<script src="scripts/jquery.flexslider.js"></script>
<script src="scripts/jquery.selectnav.js"></script>
<script src="scripts/jquery.twitter.js"></script>
<script src="scripts/jquery.modernizr.js"></script>
<script src="scripts/jquery.easing.1.3.js"></script>
<script src="scripts/jquery.contact.js"></script>
<script src="scripts/jquery.isotope.min.js"></script>
<script src="scripts/jquery.jcarousel.js"></script>
<script src="scripts/jquery.fancybox.min.js"></script>
<script src="scripts/jquery.transit-modified.js"></script>
<script src="scripts/jquery.layerslider-transitions.js"></script>
<script src="scripts/jquery.layerslider.min.js"></script>
<script src="scripts/jquery.shop.js"></script>
<script src="scripts/custom.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>


<!-- <script type="text/javascript" src="//api.skyscanner.net/api.ashx?key="></script>
<script type="text/javascript">
   skyscanner.load("snippets","2");
   function main(){
       var snippet = new skyscanner.snippets.SearchPanelControl();
       snippet.setShape("box300x250");
       snippet.setCulture("id-ID");
       snippet.setCurrency("IDR");
       snippet.setMarket("ID");
       snippet.setColourScheme("steelgreylight");
       snippet.setProduct("flights","1");
       snippet.setProduct("hotels","2");
       snippet.setProduct("carhire","3");

       snippet.draw(document.getElementById("snippet_searchpanel"));
   }
   skyscanner.setOnLoadCallback(main);
</script>  -->

</head>
<body style="top:0px !important;">


<?php
   global $mysqli;
?>
<?php include 'index/top_navbar.php'; ?>

<?php include 'index/logo.php'; ?>



<!-- Header -->
<?php include 'index/header.php'; ?>

<!-- Navigation -->
<?php include 'index/navigation.php'; ?>

<!-- Wrapper / Start -->
<div id="wrapper">
<!-- Content -->
<?php include 'index/page.php'; ?>

</div>
<!-- Wrapper / End -->

<!-- Footer -->
<?php include 'index/footer.php'; ?>

<!-- Footer Bottom -->
<?php include 'index/footer_bottom.php'; ?>

</body>
</html>