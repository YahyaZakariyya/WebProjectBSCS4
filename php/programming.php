<?php
include "connection.php";

function sign_up_form(){
    global $conn;
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$image = $_POST['image'];
	$user_name_validation = "SELECT * FROM users WHERE user_name = '$user_name'";
	$email_validation = "SELECT * FROM users WHERE email = '$email'";
	$un_v_query = mysqli_query($conn,$user_name_validation) or die('Failed');
	$e_v_query = mysqli_query($conn,$email_validation) or die('Failed');
	if(mysqli_num_rows($un_v_query)>0){
		echo "name already exists";
	}
	else if(mysqli_num_rows($e_v_query)>0){
		echo "email already exists";
	}
	else{
		$sign_up_query = "INSERT INTO users(first_name,last_name,user_name,email,password,gender,image) VALUES ('$first_name','$last_name','$user_name','$email','$password','$gender','$image')";
		$result_sign_up = mysqli_query($conn,$sign_up_query) or die('Failed to sign up');
	}
}

function login_form(){
    global $conn;
    $un_email = $_POST['un_email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE (user_name = '$un_email' or email = '$un_email') and password = '$password'";
    $result = mysqli_query($conn,$query) or die("Query Unsuccessful");
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        global $userID;
        $userID = $row['user_id'];
        global $userName;
        $userName = $row['user_name'];
        global $userImage;
        $userName = $row['image'];
    }else{
        echo "wrong username/email or password";
    }
}

if(isset($_POST['sign_up_button'])){
    sign_up_form();
}else if(isset($_POST['login_button'])){
    login_form();
}


?>