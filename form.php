<div class="registration_form">
		 <!-- Form -->
			<form id="registration_form"  action="#"  method="POST"  >
				<div>
					<label>
						<input placeholder="first name:" id="t" name="fname" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="last name:" type="text" id="t1" name="lname" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="email address:" type="email" name="email" tabindex="3" required>
					</label>
				</div>
				<div class="sky-form">
					<div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="radio" value="Male" checked=""><i></i>Male</label></li>
							<li><label class="radio"><input type="radio" name="radio" value="Female" ><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password"  id="pass1" name="password" tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="retype password" type="password" onchange="checkpass()" id="pass2" name="password_again" tabindex="4" required>
					</label>
				</div>
				<div>
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" id="box" name="checkbox" onchange="unblock()" ><i></i>i agree to shoppe.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div>

					<input type="submit"  value="create an account" style="background:#00405d;" id="register-submit"  disabled>


				</div>
				</form>
			<p id="demo"></p>
			<script >
			function unblock(){
				if(document.getElementById("box").checked)
					document.getElementById("register-submit").disabled=false;
					//document.getElementById("register-submit").style.backgroundColor=#ed1c24;
			}
			function checkpass()
			{
				if((document.getElementById("pass2").value)!=(document.getElementById("pass1").value)){
				window.alert("Both Password Must Be Same");
				document.getElementById("pass2").style.backgroundColor = "red";
				document.getElementById("register-submit").disabled=true;
				return false;
			}
			else {
				document.getElementById("pass2").style.backgroundColor = "white";
				document.getElementById("register-submit").disabled=false;
				return true;
			}
				}
</script>
			<!-- /Form -->
		</div>