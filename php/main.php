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
            <tr class="shadow-sm mx-1 my-3" style="height:120px;">
                <td class="text-center bg-light border-end p-0 position-relative" style="min-width:120px;">
                    <div class="py-1">
                        <img class="col-9 rounded-circle border border-2 border-dark" style="padding: 2px;" src="../images/ProfilePicture.jpg" alt="profile picture">
                    </div>
                    <p class="bg-dark text-light m-0 position-absolute col bottom-0 end-0 start-0">Yahya</p>
                </td>
                <td class="p-2 bg-light" style="width:100%;">
                    <h5>Normalization</h5>
                    <sup>Uploaded: 12-11-2022</sup>
                    <div style="white-space: nowrap; width: 200px; overflow: hidden;
                    text-overflow: ellipsis;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem deleniti eos molestiae reiciendis dolore, rerum quasi eligendi dignissimos a accusamus ut dolores aut nulla quaerat amet cupiditate quo eveniet asperiores possimus in laborum id optio officiis. Ipsa dolores est excepturi!</div>
                    <a class="link-secondary" href="";">view</a>
                </td>
            </tr>
        </table>
</section>

<?php
// condition will be set here
if($userID == ''){
    include "login_signup.php";
}
else{
    
}
?>

</body>
</html>