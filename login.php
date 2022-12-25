<!-- Login Model -->
<div class="modal fade" id="mymodal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Login Form -->
            <form name="login" class="modal-body" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="mb-2">
                    <label for="un_email" class="form-label">Username or Email</label>
                    <input type="text" name="un_email" id="un_email" class="form-control"/>
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control"/>
                </div>

            <div class="modal-footer">
                <p>Not a user <a href="#" data-bs-target="#modal" data-bs-toggle="modal" data-bs-dismiss="modal">SignUp</a></p>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="login_button" class="btn btn-success">Login</button>
            </div>
            </form>
            <?php
            if(isset($_POST['login_button'])){
                include "config.php";
                $user_name = mysqli_real_escape_string($conn, $_POST['un_email']);
                $password = md5($_POST['password']);
                $sql = "SELECT user_id, user_name, user_type FROM users WHERE (user_name='{$user_name}' OR user_email='{$user_name}') AND user_password='{$password}'";
                $result = mysqli_query($conn, $sql) or die('Query Failed');
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "loggedin";
                        session_start();
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['user_name'] = $row['user_name'];
                        $_SESSION['user_type'] = $row['user_type'];
                        header('Location:{$host_name}/users.php');
                    }
                }else{
                    echo "wrong username or password";
                }    
            }
            ?>
        </div>
    </div>
</div>