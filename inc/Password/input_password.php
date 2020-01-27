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