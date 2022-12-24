<?php
if(isset($_POST['sign_up_button'])){
    include "config.php";
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_password = mysqli_real_escape_string($conn, md5($_POST['user_password']));
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $profile_image = $_POST['profile_image'];
    $user_type = 'normal_user';

    $sql = "SELECT user_name,user_email FROM users WHERE user_name = '{$user_name}' or user_email = '{$user_email}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");
    if(mysqli_num_rows($result)>0){
        echo "username or email already exists";
    }else{
        $sql_insert = "INSERT into users (user_name, user_email, user_password, first_name, last_name, gender, image, user_type) VALUES ('{$user_name}','{$user_email}','{$user_password}','{$first_name}','{$last_name}','{$gender}','{$profile_image}','{$user_type}')";
        if(mysqli_query($conn, $sql_insert)){
            header("Location: {$host_name}/profile.php");
        }
    }
}
?>

<!-- Sign Up Model -->
<div class="modal fade" id="modal" data-bs-backdrop="static">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-sm-down">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title">Sign Up</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		</div>

		<!-- Sign Up Form -->
		<form name="sign_up" class="modal-body" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
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
				<input type="email" name="user_email" id="email" class="form-control"/>
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
				<input type="password" name="user_password" id="password" class="form-control"/>
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
				<input type="file" name="profile_image" id="image" class="form-control"/>
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