<?php
include "config.php";
$sql = "DELETE FROM tempnotes WHERE notes_id = '{$_GET['id']}'";
if(mysqli_query($conn,$sql)){
    header("Location:{$host_name}/notes.php");
}else{
    echo "Can't delete user record";
}
?>