<!-- Login Model -->
<div class="modal fade" id="mymodal" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Login Form -->
            <form name="login" class="modal-body" action="programming.php" method="POST">
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

        </div>
    </div>
</div>