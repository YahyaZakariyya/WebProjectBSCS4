<?php
if(isset($_POST['sign_up_button'])){
    include "config.php";
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $user_password = mysqli_real_escape_string($conn, md5($_POST['user_password']));
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $sql = "SELECT user_name,user_email FROM users WHERE user_name = '{$user_name}' or user_email = '{$user_email}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed");
    if(mysqli_num_rows($result)>0){
		// relation to html file will be added here
        echo "username or email already exists";
    }else{
		if(isset($_FILES['profile_image'])){
			$file_name = $_FILES['profile_image']['name'];
			$file_size = $_FILES['profile_image']['size'];
			$file_tmp = $_FILES['profile_image']['tmp_name'];
			$file_type = $_FILES['profile_image']['type'];
			$sql_insert = "INSERT into users (user_name, user_email, user_password, first_name, last_name, gender, image, user_type) VALUES ('{$user_name}','{$user_email}','{$user_password}','{$first_name}','{$last_name}','{$gender}','{$file_name}','normal_user')";
			if(mysqli_query($conn, $sql_insert)){
				move_uploaded_file($file_tmp,"profile-images/".$file_name);
				header("Location: {$host_name}");
			}
		}
		else{
	        $sql_insert = "INSERT into users (user_name, user_email, user_password, first_name, last_name, gender, user_type) VALUES ('{$user_name}','{$user_email}','{$user_password}','{$first_name}','{$last_name}','{$gender}','normal_user')";
			if(mysqli_query($conn, $sql_insert)){
				session_start();
				// $_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_name'] = $user_name;
				$_SESSION['user_type'] = $user_type;
            	header('Location:http://localhost/project/index.php');
				// header("Location: {$host_name}");
			}
	    }
	}
}
?>
<?php include "header.php"; ?>
<!-- Sign Up Form -->
<div class="container">
<form name="sign_up" class="modal-body" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
	<!-- First Name Input Field -->
	<div class="mb-2">
		<label for="first_name" class="form-label">First Name</label>
		<input type="text" name="first_name" id="first_name" class="form-control"/>
	</div>
	<!-- Last Name Input Field -->
	<div class="mb-2">
		<label for="last_name" class="form-label">Last Name</label>
		<input type="text" name="last_name" id="last_name" class="form-control"/>
	</div>
	<!-- Email Input Field -->
	<div class="mb-2">
		<label for="email" class="form-label">Email</label>
		<input type="email" name="user_email" id="email" class="form-control"/>
	</div>
	<!-- Username Input Field -->
	<div class="mb-2">
		<label for="user_name" class="form-label">Username</label>
		<input type="text" name="user_name" id="user_name" class="form-control"/>
	</div>
	<!-- Password Input Field -->
	<div class="mb-2">
		<label for="password" class="form-label">Password</label>
		<input type="password" name="user_password" id="password" class="form-control"/>
	</div>
	<!-- Gender Input Field -->
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
	<!-- DOB Input Field -->
	<!-- <div class="input-group date" id="datepicker">
		<input type="text" class="form-control" id="date"/>
		<span class="input-group-append">
		<span class="input-group-text bg-light">
			<i class="fa fa-calendar"></i>
		</span>
		</span>
	</div> -->
	<!-- Profile Image Input Field -->
	<div class="mb-2">
		<label for="image" class="form-label">Profile Image</label>
		<input type="file" name="profile_image" id="image" class="form-control"/>
	</div>
	<button type="submit" name="sign_up_button" class="btn btn-success">Sign Up</button>
</form>
</div>
<?php include "footer.php"; ?>