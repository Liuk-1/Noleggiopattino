<div class="page-wrapper p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="submit.php" method="post">
                        <div class="input-group col-sm-12"> <!--username-->
                            <input class="input--style-1" type="text" pattern="[A-Za-z0-9]+" placeholder="Username" name="username" required>
                        </div>
                        <span>
                            <div id="input-pass" class="input-group col-sm-12"> <!--password-->
                                <input class="input--style-1" type="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" name="password" onkeyup='check();' required>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters
                                    <br>
                                    <span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter

                                </div>
                                <div class="col-sm-6">
                                    <span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter
                                    <br>
                                    <span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
                                </div>
                            </div>
                        </span>
                        <span>
                            <div class="row" style="margin-left: 0px; margin-top: 10px">
                                <div id="confirm-pass" class="input-group col-sm-8" > <!--ripeti password-->
                                    <input class="input--style-1" type="password" id="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Repeat password" name="confirm_password" onkeyup='check();' required>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-3"> <span id="message"></span> </div>
                            </div>
                        </span>
                        <div class="input-group col-sm-12"> <!--nome-->
                            <input class="input--style-1" type="text" pattern="[A-Za-z]+" placeholder="Name" name="name" required>
                        </div>
						<div class="input-group col-sm-12"> <!--cognome-->
							<input class="input--style-1" type="text" pattern="[A-Za-z]+" placeholder="Last name" name="last_name" required>
						</div>
                        <div class="input-group col-sm-12"> <!--email-->
                            <input class="input--style-1" type="email" pattern =".+@.+..+" placeholder="Email" name="email" required>
                        </div>
						<div class="input-group col-sm-12"> <!--codice fiscale-->
                            <input class="input--style-1" type="text" pattern="[a-zA-Z]{6}[0-9]{2}[a-zA-Z][0-9]{2}[a-zA-Z][0-9]{3}[a-zA-Z]" placeholder="Fiscal code" name="fiscal_code" required>
                        </div>
						<div class="input-group col-sm-12"> <!--indirizzo-->
                            <input class="input--style-1" type="text" pattern="([a-zA-Z0-9]| |/|\\|@|#|\$|%|&)+" placeholder="Address" name="address">
                        </div>
						
						<label class="container" style="font-size:18px">Agree
							<input type="checkbox" name="radio" required>
							<span class="checkmark"></span>
						</label>	
						
                        <div class="p-t-20">
							<button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="background-color: black !important" id="submit">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>