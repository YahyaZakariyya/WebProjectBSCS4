<?php include "header.php"; ?>
<div class="container">
<table class="table">
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
    $sql = "SELECT user_name, user_email, first_name, last_name, user_type FROM users";
    $result = mysqli_query($conn, $sql) or die("Query Failed");
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
        <?php foreach($row as $value){ ?>
            <td><?php echo $value ?></td>
        <?php } ?>
            <td><a class="btn btn-primary" href="update_user.php?id=<?php echo $row['user_name'] ?>">update</a></td>
            <td><a class="btn btn-danger" href="delete_user.php?id=<?php echo $row['user_name'] ?>">delete</a></td>
        </tr>
    <?php }} ?>
  </tbody>
</table>
</div>
<?php include "footer.php"; ?>