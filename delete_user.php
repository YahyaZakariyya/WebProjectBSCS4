<?php
include "config.php";
$sql = "DELETE FROM users WHERE user_name = '{$_GET['id']}'";
if(mysqli_query($conn,$sql)){
    header("Location:{$host_name}/users.php");
}else{
    echo "Can't delete user record";
}
?>