<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RIU NOTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar bg-light sticky-top">
        <div class="container-fluid row justify-content-between">
            <div class="col-2 text-center">
                
                <a class="navbar-brand" href="./profile.php">NSSC</a>
            </div>
            <div class="col-6">
                <form class="d-flex btn-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">GO</button>
                </form>
            </div>
            <div class="col-2 text-end">
                <button type="button" class="btn btn-primary" data-bs-target="#mymodal" data-bs-toggle="modal">Login</button>
            </div>
        </div>
    </nav>
    <?php include "login.php" ?>
    <?php include "signup.php" ?>