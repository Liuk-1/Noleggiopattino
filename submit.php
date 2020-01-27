<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
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

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" style="text-align: center">Recap</h2>
                    <div class="container">
                        <div class="col-sm-12"> <!--username-->
                            <label for="username" style="font-size:18px">Username:
								<span>
									<?php
										echo $_POST["username"];
									?>
								</span>
							</label>
                        </div>
                        <div class=" col-sm-12" style="font-size:18px"> <!--password-->
							<label for="Password">Password:
								<span>
									<?php
										echo $_POST["password"];
									?>
								</span>
							</label>
                        </div>
                        <div class="col-sm-12" style="font-size:18px"> <!--nome-->
							<label for="Name">Name:
								<span>
									<?php
										echo $_POST["name"];
									?>
								</span>
							</label>
                        </div>
						<div class="col-sm-12" style="font-size:18px"> <!--cognome-->
							<label for="Last name">Last name:
								<span>
									<?php
										echo $_POST["last_name"];
									?>
								</span>
							</label>
						</div>
                        <div class="col-sm-12" style="font-size:18px"> <!--email-->
							<label for="Email">Email:
								<span>
									<?php
										echo $_POST["email"];
									?>
								</span>
							</label>
                        </div>
						<div class="col-sm-12" style="font-size:18px"> <!--codice fiscale-->
							<label for="Fiscal Code">Fiscal code:
								<span>
									<?php
										echo $_POST["fiscal_code"];
									?>
								</span>
							</label>
                        </div>
						<div class="col-sm-12" style="font-size:18px"> <!--indirizzo-->
							<label for="Address">Address:
								<span>
									<?php
										echo $_POST["address"];
									?>
								</span>
							</label>
                        </div>
						<form action="save1.php" method="post">
							<input type="text" name="username" value="<?php echo $_POST["username"]?>" hidden>
							<input type="password" name="password" value="<?php echo $_POST["password"]?>" hidden>
							<input type="password" name="confirm_password" value="<?php echo $_POST["confirm_password"]?>" hidden>
							<input type="text" name="name" value="<?php echo $_POST["name"]?>" hidden>
							<input type="text" name="last_name" value="<?php echo $_POST["last_name"]?>" hidden>
							<input type="text" name="email" value="<?php echo $_POST["email"]?>" hidden>
							<input type="text" name="fiscal_code" value="<?php echo $_POST["fiscal_code"]?>" hidden>
							<input type="text" name="address" value="<?php echo $_POST["address"]?>" hidden>
							<div class="p-t-20 col-sm-1" style="text-align: center">
								<button class="btn btn--radius btn--green" type="submit">Confirm</button>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    
    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>

</html> 
