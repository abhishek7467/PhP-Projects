<?php require "include/_db.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php   require "include/_nav.php"; ?>
    <h1 style="text-align:center;">Unsuccessful</h1>


    <div class="card m-3">
  <!-- <h5 class="card-header"></h5> -->
  <div class="card-body m-3">
    <h5 class="card-title">Your account is already exists.</h5>
    <p class="card-text">Please Login From here...</p>
    <a href="login.php" class="btn btn-primary">Login</a>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

