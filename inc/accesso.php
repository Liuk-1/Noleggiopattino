<?php
	session_start();
	$hostname = "localhost";
	$username = "quintab";
	$password = "quintab";
	$database_name = "prova_db";
	
	$mydb = mysqli_connect($hostname , $username , $password  , $database_name)
	or die ("connessione fallita");
	
	$query = "SELECT * FROM utenti WHERE username = '$_POST[username]' AND password = '$_POST[password]'";
	
	$result = mysqli_query($mydb, $query)
	or die ("Query non valida");
	
	if(mysqli_num_rows($result) == 0){
				
		$query = "SELECT * FROM utenti WHERE password = '$_POST[password]'";
		$result = mysqli_query($mydb, $query);
		if(mysqli_num_rows($result) == 0){
			$err = "Password non valida";
		}
		
		$query = "SELECT * FROM utenti WHERE username = '$_POST[username]'";
		$result = mysqli_query($mydb, $query);
		if(mysqli_num_rows($result) == 0){
			$err = "Username non valida";
		}
		echo "<head>
			<meta charset='UTF-8'>
			<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
			<meta name='description' content='Colorlib Templates'>
			<meta name='author' content='Colorlib'>
			<meta name='keywords' content='Colorlib Templates'>

			<title>Sign in</title>

			<!-- Icons font CSS-->
			<link href='vendor/mdi-font/css/material-design-iconic-font.min.css' rel='stylesheet' media='all'>
			<link href='vendor/font-awesome-4.7/css/font-awesome.min.css' rel='stylesheet' media='all'>
			<!-- Font special for pages-->
			<link href='https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i' rel='stylesheet'>
			<link rel='stylesheet' href='../css/bootstrap.min.css'>
			<!-- Vendor CSS-->
			<link href='vendor/select2/select2.min.css' rel='stylesheet' media='all'>
			<link href='vendor/datepicker/daterangepicker.css' rel='stylesheet' media='all'>
			<link rel='stylesheet' type='text/css' href='../css/my_css/login_style.css'/>
			<!-- Main CSS-->
			<link href='../css/main.css' rel='stylesheet' media='all'>
			
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
			<script src='js/global.js'></script>
		</head>

		<body>
		</body>
			<div class='page-wrapper p-t-100 p-b-100 font-robo'>
	<div class='wrapper wrapper--w680'>
		<div class='card card-1'>
			<div class='card-heading'></div>
			<div class='card-body'>
				<h2 class='title'>Sign In</h2>
				<h4 class='errore' align='center' style='background-color:rgba(255, 0, 0, 0.6)'>".$err."</h2>
				<form action='accesso.php' method='post'>
					<div class='input-group col-sm-12'> <!--username-->
                        <input class='input--style-1' type='text' pattern='[A-Za-z0-9]+' placeholder='Username' name='username' required>
                    </div>	
					<div id='input-pass' class='input-group col-sm-12'> <!--password-->
						<input class='input--style-1' type='password' id='password' placeholder='Password' name='password' onkeyup='check();' required>
					</div>						
					<div class='p-t-20'>
						<button type='submit' class='btn btn-primary btn-lg active' role='button' aria-pressed='true' style='background-color: black !important' id='submit'>Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
		</html> 
		";
	}else{
		$_SESSION['user_id'] = $_POST['username'];
		echo '	<script type="text/javascript">
           			window.location = "../index.php"
      			</script>';
	}
?>