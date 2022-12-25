<?php include "header.php"; ?>
<div class="container">
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">USER NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">USER TYPE</th>
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
    $sql = "SELECT user_name, user_email, first_name, last_name, user_type FROM users LIMIT {$offset},{$limit}";
    $result = mysqli_query($conn, $sql) or die("Query Failed");
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
        <?php foreach($row as $value){ ?>
            <td><?php echo $value ?></td>
        <?php } ?>
            <td><a class="btn btn-primary btn-sm" href="update_user.php?id=<?php echo $row['user_name'] ?>">update</a></td>
            <td><a class="btn btn-danger  btn-sm" href="delete_user.php?id=<?php echo $row['user_name'] ?>">delete</a></td>
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
        echo '<li class="page-item '.$active.'"><a class="page-link" href="users.php?page='.$i.'">'.$i.'</a></li>';
    }
    echo '</ul>';
}
?>
</div>
<?php include "footer.php"; ?>