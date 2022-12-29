<?php include "header.php";
// if(isset($_SESSION['user_name'])){
?>
<div class="container">
<table class="table border-clr-5 my-3">
  <thead class="clr-5 text-light">
    <tr>
      <th scope="col">NOTES TITLE</th>
      <th scope="col">NOTES DESCRIPTION</th>
      <th scope="col">UPDATE</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'config.php';
    $limit = 25;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    $offset = ($page - 1) * $limit;
    $sql = "SELECT * FROM tempnotes LIMIT {$offset},{$limit}";
    $result = mysqli_query($conn, $sql) or die("Query Failed");
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?php echo $row['Title'] ?></td>
            <td><?php echo $row['Description'] ?></td>
            <td><a class="btn btn-dark btn-sm clr-3 rounded-0" href="update_notes.php?id=<?php echo $row['notes_id'] ?>">update</a></td>
            <td><a class="btn btn-danger btn-sm rounded-0" href="delete_notes.php?id=<?php echo $row['notes_id'] ?>">delete</a></td>
        </tr>
    <?php }} ?>
  </tbody>
</table>
<?php
$sql1 = "SELECT * FROM users";
$result1 = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
    $total_records = mysqli_num_rows($result1);
    $total_pages = ceil($total_records/$limit);
    echo '<ul class="pagination pagination-sm">';
    for($i=1;$i<=$total_pages;$i++){
        if($i==$page){
            $active = 'active';
        }else{
            $active = '';
        }
        echo '<li class="page-item '.$active.'"><a class="page-link" href="notes.php?page='.$i.'">'.$i.'</a></li>';
    }
    echo '</ul>';
}
// }
?>
</div>
<?php include "footer.php"; ?>