<?php 

$title = "E.Moreau" ;
$favicon = "../view/img/favicon.ico";
$adress = "56 Place de la Madeleine , 75009 , PARIS";
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo htmlspecialchars($title); ?></title>
 	<!-- bootstrap 4 -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 	<!-- favicon -->
 	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon ?>" />
 	<!-- icon -->
 	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 	<!-- font  -->
 	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
 	<!-- files css -->
 	<link rel="stylesheet" type="text/css" href="<?php echo "../view/css/main.css" ?>">
 </head>
 <body>

 	<header>
 		<h1 class="text-center  text-white"><?php echo htmlspecialchars($title) . " Projects!"; ?></h1>
 	</header>

 	<hr>