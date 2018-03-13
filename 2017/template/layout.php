<!doctype html>
<html>
<head>  
	<meta charset="utf-8">
	<meta name="keywords" content="FOSS4G, GIS, geo, osgeo, open source">
	<meta name="description" content="<?php echo $page_desc; ?>">
	
	<link rel="shortcut icon" type="image/png" href="<?php echo $path; ?>/template/favicon.png">
	
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/template/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/template/style.css">
	<link rel="stylesheet" href="<?php echo $path; ?>/template/css/animate.min.css"><link rel="stylesheet" href="<?php echo $path; ?>/template/css/font-awesome.min.css"><link rel="stylesheet" href="<?php echo $path; ?>/template/css/et-line.min.css"><link rel="stylesheet" href="<?php echo $path; ?>/template/css/ionicons.min.css">
	
	<script src="<?php echo $path; ?>/template/js/jquery-2.1.0.min.js"></script>
	<script src="<?php echo $path; ?>/template/js/bootstrap.min.js"></script>
	<script src="<?php echo $path; ?>/template/js/blocs.min.js"></script>
	<title><?php echo $page_title; ?></title>

	
<!-- Google Analytics -->
 
<!-- Google Analytics END -->

</head>
<body>
<!-- Main container -->
<div class="page-container">
     <?php echo $parsedown->text($content); ?>
</div>
<!-- Main container END -->


</body>
</html>