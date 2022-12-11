<!-- Login Model -->
<div class="modal fade" id="mymodal" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Login</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		</div>

		<!-- Login Form -->
		<form name="login" class="modal-body" action="programming.php" method="POST">
			<div class="mb-2">
				<label for="un_email" class="form-label">Username or Email</label>
				<input type="text" name="un_email" id="un_email" class="form-control"/>
			</div>
			<div class="mb-2">
				<label for="password" class="form-label">Password</label>
				<input type="password" name="password" id="password" class="form-control"/>
			</div>

		<div class="modal-footer">
			<p>Not a user <a href="#" data-bs-target="#modal" data-bs-toggle="modal" data-bs-dismiss="modal">SignUp</a></p>
			<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
			<button type="submit" name="login_button" class="btn btn-success">Login</button>
		</div>
		</form>

	</div>
</div>
</div>

<!-- Sign Up Model -->
<div class="modal fade" id="modal" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Sign Up</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		</div>

		<!-- Sign Up Form -->
		<form name="sign_up" class="modal-body" action="programming.php" method="POST">
			<div class="mb-2">
				<label for="first_name" class="form-label">First Name</label>
				<input type="text" name="first_name" id="first_name" class="form-control"/>
			</div>
			<div class="mb-2">
				<label for="last_name" class="form-label">Last Name</label>
				<input type="text" name="last_name" id="last_name" class="form-control"/>
			</div>
			<div class="mb-2">
				<label for="email" class="form-label">Email</label>
				<input type="email" name="email" id="email" class="form-control"/>
			</div>
			<div class="mb-2">
				<label for="user_name" class="form-label">Username</label>
				<input type="text" name="user_name" id="user_name" class="form-control"/>
			</div>
			<div class="mb-2">
				<label class="form-label">Password</label>
				<input type="password" class="form-control"/>
			</div>
			<div class="mb-2">
				<label for="password" class="form-label">ReType Password</label>
				<input type="password" name="password" id="password" class="form-control"/>
			</div>
			<div class="mb-2">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="male" checked value="male">
					<label class="form-check-label" for="gender">
					Male
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="gender" id="female" value="female">
					<label class="form-check-label" for="gender">
					Female
					</label>
				</div>
			</div>
			<!-- <div class="input-group date" id="datepicker">
				<input type="text" class="form-control" id="date"/>
				<span class="input-group-append">
				<span class="input-group-text bg-light">
					<i class="fa fa-calendar"></i>
				</span>
				</span>
			</div> -->
			<div class="mb-2">
				<label for="image" class="form-label">Profile Image</label>
				<input type="file" name="image" id="image" class="form-control"/>
			</div>
			<button type="submit" name="sign_up_button" class="btn btn-success">Sign Up</button>
		</form>

	<div class="modal-footer">
		<p>Already have an account <a href="#" class="me-3" data-bs-target="#mymodal" data-bs-toggle="modal" data-bs-dismiss="modal">Login</a></p>
		<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
	</div>

	</div>
</div>
</div>