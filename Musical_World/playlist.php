<?php include_once '_include/_db.php'; ?>
<?php include "check_session.php"; ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('memory_limit', '2G');  // Set to 2 gigabytes

?>

<?php
$email=$_SESSION["email"];



$sql_audio = "SELECT DISTINCT SI.* , PL.song_id FROM `SongInfo` SI 
join `PlayList` PL on SI.s_no=PL.song_id Where PL.email='$email'";
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
/* Styling for the song_playlist class */
.song_playlist {
    /* Text properties */
    text-decoration: none; /* Remove underlines from links */
    color: #007bff; /* Link text color */
    font-weight: bold; /* Make the text bold */
    font-size: 16px; /* Adjust the font size */
    font-family: Arial, sans-serif; /* Specify the font family */
    
    /* Padding and Margin */
    padding: 10px 15px; /* Adjust the padding around the text */
    margin: 5px; /* Define margins around the links */
    
    /* Background and Border */
    background-color: #f2f2f2; /* Background color */
    border: 1px solid #ccc; /* Add a border */
    border-radius: 5px; /* Rounded corners */
    
    /* Hover effects */
    transition: background-color 0.3s, color 0.3s; /* Smooth color transition */
}

/* Hover effect on links */
.song_playlist:hover {
    background-color: #007bff; /* Background color on hover */
    color: #fff; /* Text color on hover */
}
.container-buttons {
    display: flex; /* Enable flexbox layout */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    text-decoration:none;

}


    </style>
</head>

<body>
    <?php require "_include/_nav.php"; ?>

    <div class="container">
        <div class="container-buttons">
    <a class="song_playlist" id="add_song" href="playlistAddSong.php">Add To Your Playlist</a>
    <a class="song_playlist" id="remove_song" href="playlistRemoveSong.php">Remove From Your Playlist</a>
</div>
        <?php while ($song = mysqli_fetch_assoc($sql_res)) {
            $date = explode(' ', $song["DT"]);
            $DT = $date[0];
            $ID = $song["s_no"];
            // echo $ID;
        ?>



        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold"><img src="<?= $song["CoverImage"] ?>" style="width: 25px; height:30px;">
                        <?= $song["Song_Title"] ?></div>

                    <p class="list-text"> <?= $song["Writer"] ?> -- <?= $song["Year"] ?></p>
                    
                </div>
                <span class="badge">
                    <audio controls id="audio-player" style="">
                    <source src="<?= $song["AudioFile"] ?>" type="audio/mpeg">
                    fgdfgf
                </audio>
                </span>
            </li>
        </ol>


        <?php  } ?>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>