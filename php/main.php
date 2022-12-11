<?php
include "head.php";
?>

<body>
<?php
include "navbar.php";
?>
<!-- Main Section -->
<section class="container row m-auto">
    <!-- left list/aside -->
    <div class="d-md-block d-none col-3 border-end">
        <!-- table -->
        <div class="row">
            <div class="col mt-2">
                <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">DSA</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Profile</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Messages</a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                </div>
            </div>
            </div>
    </div>
    
    <!-- Results Area -->
    <div class="col-md-9 col-12">
        
        <!-- Filters -->
        <div>
            
        </div>

        <!-- Card Sample-1 -->
        <table class="table">
            <div class="shadow-sm row mx-1 my-3">
                <div class="col-lg-2 col-3 text-center bg-light border-end">
                    <img class="rounded-circle col-10 border border-2" style="padding: 2px;" src="../images/ProfilePicture.jpg" alt="profile picture">
                    <p class="bg-dark text-light m-0">Yahya</p>
                </div>
                <div class="col-lg-10 col-9 p-2 bg-light" >
                    <h5>Normalization</h5>
                    <sup>Uploaded: 12-11-2022</sup>
                    <div class="row">
                        <p class="text-nowrap col-8 m-0" style="overflow: hidden; text-overflow: ellipsis;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem deleniti eos molestiae reiciendis dolore, rerum quasi eligendi dignissimos a accusamus ut dolores aut nulla quaerat amet cupiditate quo eveniet asperiores possimus in laborum id optio officiis. Ipsa dolores est excepturi!</p>
                        <a class="col-4 link-secondary" href="">view</a>
                    </div>
                </div>
            </div>
        </table>
</section>

<?php
// condition will be set here
include "login_signup.php";
?>

</body>
</html>