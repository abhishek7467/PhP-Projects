<?php include_once '_include/_db.php'; ?>
<?php include "check_session.php"; ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('memory_limit', '2G');  // Set to 2 gigabytes

?>

<?php
$id= $_GET["ID"];
$sql_audio="SELECT * FROM `SongInfo` WHERE s_no = $id";
$sql_res = mysqli_query($conn,$sql_audio);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Mukta:wght@600&family=Zeyada&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style/_nav.css">
    <!-- <link rel="stylesheet" href="style/register.css"> -->
    <style>/* Add this to your external CSS file (styles.css) */

.container {
    margin: 0 auto; /* Center the container horizontally */
}

.card {
    margin: 10px; /* Add spacing around each card */
}

.card img.card-img-top {
    max-height: 350px; /* Limit the max height of card images */
}

.card-footer {
    text-align: right; /* Right-align the content in the card footer */
}

.audio-container {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Style the audio player */
audio {
    width: 100%;
    background-color: #f0f0f0; /* Background color for the audio player */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.card-text {
    font-size: 14px; /* Adjust text size as needed */
}

.card-title {
    font-size: 16px; /* Adjust title text size as needed */
}

    </style>
</head>

<body>
    <?php require "_include/_nav.php"; ?>



    <div class="container">
        <div class="" style="width: 27rem;">
            <?php while ($song = mysqli_fetch_assoc($sql_res)) {
                $date=explode(' ',$song["DT"]);
                $DT=$date[0];
                 ?>


            <div class="card">
                <img src="<?= $song["CoverImage"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <audio controls>

                        <source src="data:<?=$song["AudioFile"] ?>" type="<?=$song["AudioType"]?>">
                        Your browser does not support the audio element.
                    </audio>
                    <p class="card-text"><?= $song["Song_Title"] ?></p>
                    <p class="card-text"><?= $song["Singer"] ?></p>
                    <h5 class="card-title"><?= $song["Writer"] ?></h5>
                    <p class="card-text"><?= $song["Year"] ?></p>
                    <p class="card-text"><?= $song["Language"] ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary"><?= $DT ?> </small>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>























    <!-- <?php while($song=mysqli_fetch_assoc($sql_res)){?>

    <img src="<?=$song["Song_Title"]?>" alt="">
   
    <?php  } ?> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>