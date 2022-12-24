<?php
include "config.php";
if(isset($_POST['update_button'])){
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $user_type = 'normal_user';

    $sql_update = "UPDATE users SET user_name='{$user_name}', user_email='{$user_email}', first_name='{$first_name}', last_name='{$last_name}', user_type='{$user_type}' WHERE user_name = '{$_GET['id']}'";
    if(mysqli_query($conn, $sql_update)){
        echo "Location: {$host_name}/users.php";
        header("Location:{$host_name}/users.php");
    }
}
?>

<!-- Sign Up Form -->
<?php include "header.php"; ?>
<?php
$sql = "SELECT user_name, user_email, first_name, last_name, user_type FROM users WHERE user_name = '{$_GET['id']}'";
$result = mysqli_query($conn, $sql) or die("Query Failed");
// echo $_SERVER['PHP_SELF'];
// die();
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>
<div class="container">
<form name="update" class="modal-body" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="mb-2">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $row['first_name'] ?>"/>
    </div>
    <div class="mb-2">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $row['last_name'] ?>"/>
    </div>
    <div class="mb-2">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="user_email" id="email" class="form-control" value="<?php echo $row['user_email'] ?>"/>
    </div>
    <div class="mb-2">
        <label for="user_name" class="form-label">User Name</label>
        <input type="text" name="user_name" id="user_name" class="form-control" value="<?php echo $row['user_name'] ?>"/>
    </div>
    <div class="mb-2">
        <label for="user_type" class="form-label">User Type</label>
        <input type="text" name="user_type" id="user_type" class="form-control" value="<?php echo $row['user_type'] ?>"/>
    </div>
    <button type="submit" name="update_button" class="btn btn-success">Update</button>
</form>
<?php }} ?>
</div>
<?php include "footer.php"; ?>