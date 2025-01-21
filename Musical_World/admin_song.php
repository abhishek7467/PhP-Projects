<?php include_once '_include/_db.php'; ?>
<?php include "check_session.php"; ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('memory_limit', '2G');  // Set to 2 gigabytes

?>


<?php


if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_SERVER['REQUEST_METHOD'] == 'POST'))) {
    $Song_Title = $_POST['Song_Title'];
    $Writer = $_POST['Writer'];
    $Year = $_POST['Year'];
    $Singer = $_POST['Singer'];
    $Movie_name = $_POST['Movie_name'];
    $GenreCategory = $_POST['GenreCategory'];
    $Language = $_POST['Language'];
    $ReviewsAndRatings = $_POST['ReviewsAndRatings'];
    $Keywords_tags = $_POST['Keywords_tags'];

    $coverImage_file_name = $_FILES['CoverImage']['name'];
    $coverImage_file_temp_name = $_FILES['CoverImage']['tmp_name'];
    $coverImage_file_type = $_FILES['CoverImage']['type'];
    $coverImage_file_size = $_FILES['CoverImage']['size'];

    $coverImage_binary_data = base64_encode(file_get_contents($coverImage_file_temp_name));
    $coverImage_url = 'data:' . $coverImage_file_type . ';base64,' . $coverImage_binary_data;

    $AudioFile_name = $_FILES['AudioFile']['name'];
    echo "<br> pdf :" . $AudioFile_name;
    $AudioFile_temp_name = $_FILES['AudioFile']['tmp_name'];
    echo "<br> pdf :" . $AudioFile_temp_name;
    $AudioFile_type = $_FILES['AudioFile']['type'];
    echo "<br> pdf :" . $AudioFile_type;
    $AudioFile_size = $_FILES['AudioFile']['size'];
    echo "<br> pdf :" . $AudioFile_size;

    $binary_data_AudioFile = base64_encode(file_get_contents($AudioFile_temp_name));
    $AudioFile_url = 'data:' . $AudioFile_type . ';base64,' . $binary_data_AudioFile;


    $Insert_song = "INSERT INTO `Musical_World`.`SongInfo` (`Song_Title`,
     `Writer` , `Singer` , `CoverImage`  , `Year`  , `AudioFile`,
    `AuioNameGivenByServer`,`Temp_Name`,`AudioFileSize`,`AudioType`,
      `Movie_name` , `Language`  ,
      `ReviewsAndRatings`  , `Keywords_tags`  , `GenreCategory`) 
      
       VALUES ('$Song_Title','$Writer' , '$Singer' , '$coverImage_url'  , 
       '$Year'  , '$AudioFile_url','$AudioFile_name','$AudioFile_temp_name',$AudioFile_size,'$AudioFile_type'
         , '$Movie_name' , '$Language'  ,
      '$ReviewsAndRatings'  , '$Keywords_tags'  , '$GenreCategory')";






    $res_userInfo = mysqli_query($conn, $Insert_song);
    if ($res_userInfo) {
        // header("location:My_Profile.php");
        // exit;
        echo 'Success!';
    }
}

?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Mukta:wght@600&family=Zeyada&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style/_nav.css">
    <link rel="stylesheet" href="style/admin_song.css">
    <style>
    </style>
    <style>
    /* Target the <h1> element with the text "Add New Book" */
    h1 {
        /* Text properties */
        font-size: 28px;
        /* Font size */
        font-weight: bold;
        /* Font weight (bold) */
        color: #5a5a4b;
        /* Text color (dark gray) */
        text-align: center;
        /* Text alignment (center) */
        text-transform: uppercase;
        /* Text transformation (uppercase) */
        font-family: Arial, sans-serif;
        /* Font family */

        /* Spacing and margin properties */
        margin-top: 20px;
        /* Top margin */
        margin-bottom: 20px;
        /* Bottom margin */
        padding: 10px;
        /* Padding around the text */

        /* Border properties */
        border-bottom: 2px solid #333;
        /* Bottom border with dark gray color */
    }

    /* Hover effect */
    h1:hover {
        color: #ff5722;
    }

    .container-add_song {
        max-width: 800px;
        /* Adjust the maximum width as needed */
        margin: 0 auto;
        /* Center the container-add_song */
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        position: relative;
        /* background-color: rgba(255, 255, 255, 0.9); Semi-transparent white background */
        backdrop-filter: blur(8px);
        z-index: 1;
    }



    .form-label {
        font-weight: bold;
        color: white;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: transparent;
        color: white;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    /* Styles for the file input fields */
    input[type="file"] {
        border: none;
        background-color: transparent;
        padding: 0;
    }

    /* Styles for the submit button */
    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>

    <?php include "_include/_nav.php"; ?>


    <h1>Add New Book </h1>

    <div class="container-add_song">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="">
                <div class=" col-md-4 mb-3">
                    <label for="Song_Title" class=" form-label">Song_Title</label>
                    <input type="Song_Title" class="form-control" id="Song_Title" name="Song_Title">
                </div>
                <div class=" col-md-4 mb-3">
                    <label for="Writer" class=" form-label">Writer</label>
                    <input type="Writer" class="form-control" id="Writer" name="Writer" aria-describedby="Writer">
                </div>
                <div class=" col-md-4 mb-3">
                    <label for="Year" class=" form-label">Year</label>
                    <input type="number" class="form-control" id="Year" name="Year" maxlength="4">
                </div>
            </div>
            <div class="row">
                <div class=" col-md-6 mb-3">
                    <label for="Singer" class=" form-label">Singer</label>
                    <input type="Singer" class="form-control" id="Singer" name="Singer" aria-describedby="Singer">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="CoverImage" class="form-label">Cover Photo</label>
                    <input type="file" class="form-control" id="CoverImage" name="CoverImage"
                        accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="AudioFile" class="form-label">Song</label>
                    <input type="file" class="form-control" id="AudioFile" name="AudioFile"
                        accept=".mp3, .m4a, .mp4,.aac, .m4a, .flac, .wav, .ogg, .oga, .wma, .wmv, .aiff, .aif, .dsf, .dff, .midi, .mid">
                </div>
                <div class=" col-md-6 mb-3">
                    <label for="Movie_name" class=" form-label">Movie_name</label>
                    <input type="Movie_name" class="form-control" id="Movie_name" name="Movie_name"
                        aria-describedby="Movie_name">
                </div>
                <div class=" col-md-6 mb-3">
                    <label for="Language" class=" form-label">Language</label>
                    <input type="Language" class="form-control" id="Language" name="Language"
                        aria-describedby="Language">
                </div>
                <div class=" col-md-6 mb-3">
                    <label for="ReviewsAndRatings" class=" form-label">ReviewsAndRatings</label>
                    <input type="ReviewsAndRatings" class="form-control" id="ReviewsAndRatings" name="ReviewsAndRatings"
                        aria-describedby="ReviewsAndRatings">
                </div>
                <div class=" col-md-6 mb-3">
                    <label for="Keywords_tags" class=" form-label">Keywords_tags</label>
                    <input type="Keywords_tags" class="form-control" id="Keywords_tags" name="Keywords_tags"
                        aria-describedby="Keywords_tags">
                </div>
                <div class=" col-md-6 mb-3">
                    <label for="GenreCategory" class=" form-label">GenreCategory</label>
                    <input type="text" class="form-control" id="GenreCategory" name="GenreCategory"
                        aria-describedby="GenreCategory">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>