<div class="page-wrapper p-t-100 p-b-100 font-robo">
	<div class="wrapper wrapper--w680">
		<div class="card card-1">
			<div class="card-heading"></div>
			<div class="card-body">
				<h2 class="title">Sign In</h2>
				<form action="inc/accesso.php" method="post">
					<div class="input-group col-sm-12"> <!--username-->
                        <input class="input--style-1" type="text" pattern="[A-Za-z0-9]+" placeholder="Username" name="username" required>
                    </div>	
					<div id="input-pass" class="input-group col-sm-12"> <!--password-->
						<input class="input--style-1" type="password" id="password" placeholder="Password" name="password" onkeyup='check();' required>
					</div>						
					<div class="p-t-20">
						<button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background-color: black !important" id="submit">Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>