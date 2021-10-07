<?php include "head.php";?>
<div class="create-form-pages">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 create-form-col">
				<div class="create-account-box">
					<div class="logo">
						<img src="images/logo.png">
					</div>
					<div class="account-create-form login-form">
						<h2 class="mb-4 mt-2rem">Log in</h2>
						<form action="#">
							<label>User ID
								<input type="email" name="email"/>
							</label>
							<label>Password
								<input type="password" name="password"/>
								<a class="forgotPassword" href="#">Forgot Password?</a>
							</label>
							<button class="button highlight_button" type="submit">Sign in</button>
						</form>
						<div class="create-form-bottom">
							<p>New to Octo HR & Payroll?</p>
							<div class="create-btn"><a class="button outline_button" href="#">Create Account</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php include "footer.php"?>