<?php include_once '_include/_db.php'; ?>
<?php include "check_session.php"; ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('memory_limit', '2G');  // Set to 2 gigabytes

?>

<?php
$sql_audio = "SELECT * FROM `SongInfo`";
$sql_res = mysqli_query($conn, $sql_audio);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Songs List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Mukta:wght@600&family=Zeyada&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style/_nav.css">
    <!-- <link rel="stylesheet" href="style/register.css"> -->
    <style>
    .card-img-top {
        width: 200px;
        height: 200px;
    }

    .card {
        width: 100%;
        height: 100%;
    }

    .col {
        margin-top: 8px;
        margin-bottom: 8px;

    }
    </style>
</head>

<body>
    <?php require "_include/_nav.php"; ?>


    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php while ($song = mysqli_fetch_assoc($sql_res)) {
                $date = explode(' ', $song["DT"]);
                $DT = $date[0];
            ?>


            <div class="col">
                <div class="card">
                    <img src="<?= $song["CoverImage"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?= $song["Song_Title"] ?></p>
                        <p class="card-text"><?= $song["Singer"] ?></p>
                        <h5 class="card-title"><?= $song["Writer"] ?></h5>
                        <p class="card-text"><?= $song["Year"] ?></p>
                        <p class="card-text"><?= $song["Language"] ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary"><?= $DT ?> <a href="song.php?ID=<?= $song["s_no"] ?>"> Listen
                            </a></small>
                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>