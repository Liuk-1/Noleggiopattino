<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Sign in</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	<!--<link rel="stylesheet" type="text/css" href="css/my_css/stile.css"/>-->
	<link rel="stylesheet" type="text/css" href="css/my_css/login_style.css"/>
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	
	<style>
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Rubik:700&display=swap');
		
		.navbar-inverse{
			background-color:black !important;
		}
		.navbar-center{
			margin-left: 40%;
		}
		.nav.navbar-nav.navbar-center li a{
			color: white;
			font-family: 'Open Sans', sans-serif;
		}
	</style>
	<script src="js/global.js"></script>
</head>

<body>
	<?php
		require 'inc/header.php';
		require 'inc/signIn_form.php';
	?>
</body>

</html> 