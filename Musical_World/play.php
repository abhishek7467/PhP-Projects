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

$sql_audio_FIRST = "SELECT * FROM `SongInfo` limit 1";
$sql_res_FIRST = mysqli_query($conn, $sql_audio_FIRST);
$row = mysqli_fetch_assoc($sql_res_FIRST);
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
    <style>
    .container-audio-md-3 {
        /* display: flex; */
        justify-content: center;
        align-items: center;
        /* height: 100vh; Adjust to your desired height */

        width: 100%;
        /* Set the container width to 100% */
        max-width: 1200px;
        /* Define a maximum width for the container */
        margin: 0 auto;
        /* Center the container horizontally */
        padding: 20px;
        /* Add some padding to the container */
        background-color: #f2f2f2;
        /* Set a background color */
        border: 1px solid #ddd;
        /* Add a border */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        /* Apply a box shadow */
        border-radius: 5px;
        /* Add rounded corners */
        text-align: center;
        /* Center the text content */
        font-family: Arial, sans-serif;
        /* Define a font family */
        color: #333;
        /* Set text color */
        margin-top: 4px;
    }

    .container-audio-md-3 h1 {
        font-size: 36px;
        /* Define font size for headings inside the container */
        color: #333;
        /* Customize heading text color */
    }

    .container-audio-md-3 p {
        font-size: 18px;
        /* Define font size for paragraphs inside the container */
        line-height: 1.5;
        /* Set line height for better readability */
        margin: 10px 0;
        /* Add some margin to separate paragraphs */
    }

    .container-audio-md-3 a {
        text-decoration: none;
        /* Remove underlines from links */
        color: #007BFF;
        /* Set link text color */
    }

    .container-audio-md-3 a:hover {
        text-decoration: underline;
        /* Add underlines on hover */
        color: #0056b3;
        /* Customize link color on hover */
    }

    .container-audio-md-3 .button {
        background-color: #007BFF;
        /* Set button background color */
        color: #fff;
        /* Set button text color */
        padding: 10px 20px;
        /* Define button padding */
        border: none;
        /* Remove button border */
        border-radius: 5px;
        /* Add rounded corners to the button */
        cursor: pointer;
        /* Show a pointer cursor on hover */
    }

    .container-audio-md-3 .button:hover {
        background-color: #0056b3;
        /* Customize button color on hover */
    }

    .center-card {
        justify-content: center;
        align-items: center;

        padding: 2%;
        margin: 0 auto;
    }

    .song-info {
        display: inline-block;
        /* Make the div an inline block element */
        margin: 0;
        /* Reset margins to zero */
        padding: 0;
        /* Reset padding to zero */
        border: 0;
        /* Reset border to zero */
        box-sizing: content-box;
        /* Default box-sizing */
        border: 1px solid #000;
        /* Add a border for visualization */
    }

    .audio-player {
        width: 54%;
    }

    #next-button,
    #previous-button {
        background-color: rgb(255, 204, 204);
        /* Background color */
        color: #fff;
        /* Text color */
        border: 2px solid rgb(254, 187, 204);
        /* Border style */
        padding: 10px 20px;
        /* Padding */
        border-radius: 5px;
        /* Border radius for rounded corners */
        font-size: 16px;
        /* Font size */
        cursor: pointer;
        /* Cursor style on hover */
        transition: background-color 0.3s, color 0.3s;
        /* Smooth transition on hover */
width: 11%;
        /* Add other properties for specific customization as needed */
    }

    #next-button:hover,
    #previous-button:hover {
        background-color: #0056b3;
        /* Background color on hover */
        border-color: #0056b3;
        /* Border color on hover */
    }
    </style>
</head>

<body>
    <?php require "_include/_nav.php"; ?>
    <div class="container-audio-md-3">
        <h2>Now Playing</h2>
        <div class="center-card">
            <div id="song-info" style="
    display: inline-block; /* Make the div an inline block element */
    margin: 0; /* Reset margins to zero */
    padding: 0; /* Reset padding to zero */
    border: 0; /* Reset border to zero */
    box-sizing: content-box; /* Default box-sizing */
">
                <!-- Song information will be displayed here -->
            </div>

            <div id="song-container">
                <audio controls id="audio-player" style="width: 54%;">
                    <source src="<?= $row["AudioFile"] ?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <button id="previous-button"><img src="B_previous.png" alt="Previous"></button>
            <button id="next-button"> <img src="B_next-button.png" alt="Next"> </button>
        </div>
    </div>
    <script>
    const shuffledSongs = [
        <?php
            while ($song = mysqli_fetch_assoc($sql_res)) {
                echo json_encode($song) . ",";
            }
            ?>
    ];
    let currentIndex = 0;


    function updateSongInfo(song) {
        const songInfo = document.getElementById("song-info");
        songInfo.innerHTML = `
        
            <div class="card mb-3" style="max-width: 696px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="${song.CoverImage}" style="width:240px; height:260px;" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Song Title: ${song.Song_Title}</h5>
        <p class="card-text">Singer: ${song.Singer}</p>
                <p class="card-text">Writer: ${song.Writer}</p>
                <p class="card-text">Year: ${song.Year}</p>
                <p class="card-text">Language: ${song.Language}</p>      
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


            `;
    }

    updateSongInfo(shuffledSongs[currentIndex]);

    function playNextSong() {
        if (currentIndex < shuffledSongs.length) {
            const audioPlayer = document.getElementById("audio-player");
            audioPlayer.src = shuffledSongs[currentIndex].AudioFile;
            audioPlayer.load();
            audioPlayer.play();
            updateSongInfo(shuffledSongs[currentIndex]);
            currentIndex++;
        } else {
            alert("End of playlist");
        }


    }


    function playPreviousSong() {
        if ((currentIndex < shuffledSongs.length) || (currentIndex = shuffledSongs.length)) {
            const audioPlayer = document.getElementById("audio-player");
            audioPlayer.src = shuffledSongs[currentIndex].AudioFile;
            audioPlayer.load();
            audioPlayer.play();
            updateSongInfo(shuffledSongs[currentIndex]);
            currentIndex--;
        } else {
            alert("Started Point of playlist");
        }


    }

    document.getElementById("next-button").addEventListener("click", playNextSong);
    document.getElementById("previous-button").addEventListener("click", playPreviousSong);
    </script>
</body>

</html>