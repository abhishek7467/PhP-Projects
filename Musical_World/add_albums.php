<?php include_once '_include/_db.php'; ?>
<?php include "check_session.php"; ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('memory_limit', '2G');  // Set to 2 gigabytes

?>


<?php


if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_SERVER['REQUEST_METHOD'] == 'POST'))) {
    $Album_name = $_POST['Album_name'];
    $Album_Singer = $_POST['Singer'];
    $Movie = $_POST['Movie'];


    $Album_Photo_file_name = $_FILES['Album_Photo']['name'];
    $Album_Photo_file_temp_name = $_FILES['Album_Photo']['tmp_name'];
    $Album_Photo_file_type = $_FILES['Album_Photo']['type'];
    $Album_Photo_file_size = $_FILES['Album_Photo']['size'];

    $Album_Photo_binary_data = base64_encode(file_get_contents($Album_Photo_file_temp_name));
    $Album_Photo_url = 'data:' . $Album_Photo_file_type . ';base64,' . $Album_Photo_binary_data;



    $Insert_artist = "INSERT INTO `Album` ( `Album_name`, `Album_Singer`,`Movie`,`AlbumPhoto` )
     VALUES ( '$Album_name','$Album_Singer','$Movie','$Album_Photo_url')";

    $res_userInfo = mysqli_query($conn, $Insert_artist);
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
    <title>Add Albums</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Mukta:wght@600&family=Zeyada&display=swap" rel="stylesheet">

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


    <h1>Add New Albums </h1>

    <div class="container-add_song">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <div class="">
                <div class=" col-md-4 mb-3">
                    <label for="Album_name" class=" form-label">Album_name</label>
                    <input type="Album_name" class="form-control" id="Album_name" name="Album_name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Album_Photo" class="form-label">Artist Photo</label>
                    <input type="file" class="form-control" id="Album_Photo" name="Album_Photo" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff">
                </div>
                <div class=" col-md-4 mb-3">
                    <label for="Singer" class=" form-label">Singer</label>
                    <input type="Singer" class="form-control" id="Singer" name="Singer">
                </div>
                <div class=" col-md-4 mb-3">
                    <label for="Movie" class=" form-label">Movie Name</label>
                    <input type="Movie" class="form-control" id="Movie" name="Movie">
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