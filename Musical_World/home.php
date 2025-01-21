<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_log', '/path/to/error.log');
?>
<?php require "_include/_db.php" ?>
<?php //include "check_session.php";

session_start();
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&family=Mukta:wght@600&family=Zeyada&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="style/_nav.css">
    <link rel="stylesheet" href="style/home.css">
    <style>

    </style>
</head>


<body>
    <?php require "_include/_nav.php"; ?>
    <main class="container">
        <section id="home" class="text-center my-5">
            <h2>Welcome to Musical World</h2>
            <p class="lead">Discover the rhythm of your life with MusicWave. Dive into a world of melodies, beats, and
                harmonies. Your ultimate destination for music.</p>
            <a href="register.php" class="btn btn-primary btn-lg">Get Started</a>
        </section>

        <section id="browse" class="text-center my-5">
            <h2>Discover New Music</h2>
            <p class="lead">Find the music that suits your mood, whether it's a catchy tune or a soothing melody.
                Explore a vast collection of songs, albums, and genres.</p>
            <a href="song_group.php" class="btn btn-primary btn-lg">Browse Music</a>
        </section>

        <section id="playlists" class="text-center my-5">
            <h2>Create Playlists</h2>
            <p class="lead">Personalize your music experience by creating playlists for every moment. Mix your favorite
                tracks and share your musical journey with the world.</p>
            <a href="playlist.php" class="btn btn-primary btn-lg">Sign Up Now</a>
        </section>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>