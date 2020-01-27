<?php
	session_start();   
	$hostname = "localhost";
	$username = "quintab";
	$password = "quintab";
	$database_name = "prova_db";
	
	$mydb = mysqli_connect($hostname , $username , $password  , $database_name)
	or die ("connessione fallita");
	
	$query = "SELECT * FROM Utenti WHERE username = '$_SESSION[user_id]'";
	$result = mysqli_query($mydb, $query)
	or die ("Query non valida");
	
	$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
	?>
<div class="container" ; padding-top: 0px ">
	<div class="row justify-content-md-center ">
		<div class="col col-lg-6 col-md-6 col-xs-12 " style="margin-bottom:0px; background-color: rgba(255, 255, 255, 0.5) ">
			<div class="page-wrapper p-t-100 p-b-100 font-robo ">
				<div class="wrapper wrapper--w680 ">
					<div class="card card-1 ">
						<div class="card-heading ">
						</div>
						<div class="card-body ">
							<h2 class="title "><?php echo $_SESSION['user_id']?></h2>
							<form action="edit.php " method="POST ">
								<div class="input-group col-sm-6 ">
									<!--username-->
									<label for="username ">username</label>
									<input class="input--style-1 " type="text "  placeholder="Username " name="username " value="<?php echo $user[username]?>">
								</div>
								<span>
									<div id="input-pass " class="input-group col-sm-12 ">
										<!--password-->
										<label for="password">password</label>
										<input class="input--style-1 " type="password " id="password" placeholder="Password" name="password" onkeyup='check();'>
									</div>
								</span>
								<span>
									<div class="row " style="margin-left: 0px; margin-top: 10px ">
										<div id="confirm-pass " class="input-group col-sm-12 " > 
											<input class="input--style-1 " type="password " id="confirm_password " placeholder="Repeat password " name="confirm_password " onkeyup='check();' required>
										</div>
									</div>
								</span>
								<div class="input-group col-sm-12 ">
									<!--nome-->
									<label for="name">name</label>
									<input class="input--style-1 " type="text " placeholder="Name " name="name" value="<?php echo $user[nome]?>">
								</div>
								<div class="input-group col-sm-12 ">
									<!--cognome-->
									<label for="last name">last name</label>
									<input class="input--style-1 " type="text " placeholder="Last name " name="last_name" value="<?php echo $user[cognome]?>">
								</div>
								<div class="input-group col-sm-12 ">
									<!--email-->
									<label for="email">email</label>
									<input class="input--style-1 " type="email " placeholder="Email " name="email" value="<?php echo $user[email]?>">
								</div>
								<div class="input-group col-sm-12 ">
									<!--codice fiscale-->
									<label for="fiscal code">fiscalcode</label>
									<input class="input--style-1 " type="text " placeholder="Fiscal code " name="fiscal_code" value="<?php echo $user[codice_fiscale]?>">
								</div>
								<div class="input-group col-sm-12 ">
									<!--indirizzo-->
									<label for="address">address</label>
									<input class="input--style-1 " type="text " placeholder="Address " name="address" value="<?php echo $user[indirizzo]?>">
								</div>
								<div class="p-t-20 ">
									<button type="submit " class="btn btn-primary btn-lg active " role="button" aria-pressed="true " style="background-color: black !important " id="submit ">Submit</a>
								</div>
							</form>
						</div> <!--card-body-->
					</div> <!--card card-1-->
				</div> <!--wrapper-->
			</div> <!--page-wrapper-->
		</div> <!--col-->
		<div class="col col-lg-6 col-md-6 col-xs-12 " style="margin-bottom:0px; background-color: rgba(255, 255, 255, 0.5) "> 
			<div class="wrapper wrapper--w680 ">
				<div class="page-wrapper p-t-100 p-b-100 font-robo ">
					<div class="card card-1 ">
						<div class="card-body">
						</div>
					</div>
            	</div>
			</div>
		</div>
	</div> <!--row-->	
</div> <!--container-->
