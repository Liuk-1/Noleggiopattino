<?php
    $root = realpath($_SERVER["DOCUMENT_ROOT"]);
?>
<style>
	@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap');
	@import url('https://fonts.googleapis.com/css?family=Rubik:700&display=swap');
</style>
<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="/LucioliLuca/index.php">
					<img alt="Noleggiopattino" src="/LucioliLuca/img/noleggiopattino.png" height="20px" width="20px" >
			</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-center">
				<li><a href="#" class="color-me" style="font-family: 'Rubik', sans-serif">Azienda</a></li>
				<li><a href="#" class="color-me" style="font-family: 'Rubik', sans-serif">Contatti</a></li>
				<li><a href="#" class="color-me" style="font-family: 'Rubik', sans-serif">Assistenza</a></li>
			</ul>
			<div class="nav navbar-nav navbar-right">
				<li><a href="/LucioliLuca/inc/userPage.php" class="color-me" style="font-family: 'Rubik', sans-serif">Ciao, <?php echo $_SESSION['user_id']?></a></li>
                <li><a href="/LucioliLuca/inc/logOut.php" class="color-me" style="font-family: 'Rubik', sans-serif">Log out</a></li>
            </div>
		</div>
	</div>
</nav>