<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Sign up</title>

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
</head>

<body>
	<?php
		require 'inc/header.php';
		require 'inc/signUp_form.php';
	?>
    <script>
        var check = function() {
            var ucase = new RegExp("[A-Z]+");
            var lcase = new RegExp("[a-z]+");
            var num = new RegExp("[0-9]+");
			
            if(document.getElementById('password').value.length >= 8){
                document.getElementById('8char').classList.remove("glyphicon-remove");
                document.getElementById('8char').classList.add("glyphicon-ok");
                document.getElementById('8char').style.color = "#00A41E";
            }else{
                document.getElementById('8char').classList.remove("glyphicon-ok");
                document.getElementById('8char').classList.add("glyphicon-remove");
                document.getElementById('8char').style.color = "#FF0004";
            }

            if(ucase.test(document.getElementById('password').value)){
                document.getElementById('ucase').classList.remove("glyphicon-remove");
                document.getElementById('ucase').classList.add("glyphicon-ok");
                document.getElementById('ucase').style.color = "#00A41E";
            }else{
                document.getElementById('ucase').classList.remove("glyphicon-ok");
                document.getElementById('ucase').classList.add("glyphicon-remove");
                document.getElementById('ucase').style.color = "#FF0004";
            }

            if(lcase.test(document.getElementById('password').value)){
                document.getElementById('lcase').classList.remove("glyphicon-remove");
                document.getElementById('lcase').classList.add("glyphicon-ok");
                document.getElementById('lcase').style.color = "#00A41E";
            }else{
                document.getElementById('lcase').classList.remove("glyphicon-ok");
                document.getElementById('lcase').classList.add("glyphicon-remove");
                document.getElementById('lcase').style.color = "#FF0004";
            }

            if(num.test(document.getElementById('password').value)){
                document.getElementById('num').classList.remove("glyphicon-remove");
                document.getElementById('num').classList.add("glyphicon-ok");
                document.getElementById('num').style.color = "#00A41E";
            }else{
                document.getElementById('num').classList.remove("glyphicon-ok");
                document.getElementById('num').classList.add("glyphicon-remove");
                document.getElementById('num').style.color = "#FF0004";
            }

            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'matching';
				document.getElementById('input-pass').style.borderColor = 'green';				
				document.getElementById('confirm-pass').style.borderColor = 'green';
			} else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'not matching';
				document.getElementById('input-pass').style.borderColor = 'red';
				document.getElementById('confirm-pass').style.borderColor = 'red';
				return false;
            }
        }
    </script>

    <script src="js/global.js"></script>
</body>

</html> 
