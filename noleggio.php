<?php
session_start();

if(isset($_SESSION['user_id'])){
	require 'inc/header_logged.php';
}else{
	require 'inc/header.php';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Noleggiopattino</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--ridimensionamento in base alla schermo del dispositivo-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/myscc/idk.css">
		<link rel="icon" href="favico.ico">
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
			h1{
				font-family: 'Open Sans', sans-serif;
				font-weight: 900;
				font-size:50px;
				color: black;
			}
			h4{
				font-family: 'Open Sans', sans-serif;
				font-weight: 400;
				font-size: 15px;
				color: black;
			}
			.map-container-5{
				overflow:hidden;
				padding-bottom:56.25%;
				position:relative;
				height:0;
			}
			.map-container-5 iframe{
				left:0;
				top:0;
				height:100%;
				width:100%;
				position:absolute;
			}
			.btn-lg{
				border-radius: 0px;
				display: table-cell;
				vertical-align: middle;
			}
			footer{
				position:fixed;
				height:50px;
				bottom:0;
				width:100%;
			}
		</style>
    </head>
    <body>
		<?php
			require 'inc/content_noleggio.php';
			require 'inc/footer.php';
		?>
    </body>
</html>