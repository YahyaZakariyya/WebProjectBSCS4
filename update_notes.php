<?php
include "config.php";
if(isset($_POST['update_button'])){
    $Title = mysqli_real_escape_string($conn, $_POST['Title']);
    $Description = mysqli_real_escape_string($conn, $_POST['Description']);

    $sql_update = "UPDATE tempnotes SET Title='{$Title}', Description='{$Description}' WHERE notes_id = '{$_GET['id']}'";
    if(mysqli_query($conn, $sql_update)){
        // echo "Location: {$host_name}/notes.php";
        header("Location:{$host_name}/notes.php");
    }
}
?>

<!-- Update Form -->
<?php include "header.php"; ?>
<?php
$sql = "SELECT Title, Description FROM tempnotes WHERE notes_id = '{$_GET['id']}'";
$result = mysqli_query($conn, $sql) or die("Query Failed");
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
?>
<div class="container">
<form name="update" class="modal-body" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="mb-2">
        <label for="Title" class="form-label">Title</label>
        <input type="text" name="Title" id="Description" class="form-control" value="<?php echo $row['Title'] ?>"/>
    </div>
    <div class="mb-2">
        <label for="Description" class="form-label">Title</label>
        <input type="text" name="Description" id="Description" class="form-control" value="<?php echo $row['Description'] ?>"/>
    </div>
    <button type="submit" name="update_button" class="btn btn-success">Update</button>
</form>
<?php }} ?>
</div>
<?php include "footer.php"; ?>