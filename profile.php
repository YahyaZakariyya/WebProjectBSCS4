<?php
include "header.php";
include "config.php";
if(isset($_SESSION['user_name'])){
?>
<section class="container col-lg-8">
<!-- Profile Info -->
<div class="text-center bg-secondary text-light rounded p-5">
    <!-- <img class="rounded-circle col-lg-4 col-md-3 col-5 mt-5 border p-1 border-5 border-light" src="../images/ProfilePicture.jpg" alt="profile picture"> -->
    
    <h2><?php echo $_SESSION['user_name']; ?></h2><br><br>
    <div class="row">
        <div class="col-4">
            <h5 class="m-0 p-0">Followers</h5>
            <p>300</p>
        </div>
        <div class="col-4">
            <h5 class="m-0 p-0">Following</h5>
            <p>30</p>
        </div>
        <div class="col-4">
            <h5 class="m-0 p-0">Notes</h5>
            <p>17</p>
        </div>
    </div>
    <!-- <button class="btn btn-light rounded-pill col-5">Follow</button> -->
    <button class="btn btn-outline-light rounded-pill col-5">Following</button>
    <a class="btn btn-outline-light rounded-pill col-5" href="addnotes.php">Add Notes</a>

</div>

<!-- Card Sample-1 -->
<table class="table">
    <?php
        $sql = "SELECT Title, Description FROM tempnotes";
        $result = mysqli_query($conn, $sql) or die("Query Failed");
        while($row = mysqli_fetch_assoc($result))
        {
    ?>
    <div class="shadow-sm row mx-1 my-3 border rounded border-3 border-secondary ">
        <div class="p-4 bg-light" >
            <h5><?php echo $row['Title']; ?></h5>
            <!-- <sup>Uploaded: 12-11-2022</sup> -->
            <div class="row">
                <p class="text-nowrap col-md-11 col-10 m-0" style="overflow: hidden; text-overflow: ellipsis;"><?php echo $row['Description']; ?></p>
                <a class="col-1 link-secondary" href="">view</a>
            </div>
        </div>
    </div>
    <?php } ?>
</table>
</section>
<?php 
}
include "footer.php"; ?>