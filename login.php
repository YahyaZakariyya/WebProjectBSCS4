<?php include "header.php"; ?>
<!-- Login Form -->
<div class="container">
<form name="login" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="mb-2">
        <label for="un_email" class="form-label">Username or Email</label>
        <input type="text" name="un_email" id="un_email" class="form-control"/>
    </div>
    <div class="mb-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control"/>
    </div>
    <button type="submit" name="login_button">LOGIN</button>
</form>
</div>
<?php
if(isset($_POST['login_button'])){
    include "config.php";
    $user_name = mysqli_real_escape_string($conn, $_POST['un_email']);
    $password = md5($_POST['password']);
    $sql = "SELECT user_id, user_name, user_type FROM users WHERE (user_name='{$user_name}' OR user_email='{$user_name}') AND user_password='{$password}'";
    $result = mysqli_query($conn, $sql) or die('Query Failed');
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_type'] = $row['user_type'];
            header('Location:http://localhost/project/index.php');
        }
    }else{
        echo "wrong username or password";
    }    
}
?>
<?php include "footer.php"; ?>