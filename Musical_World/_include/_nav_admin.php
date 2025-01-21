<?php
// session_start();
if (!isset($_SESSION["email"]) && !isset($_SESSION["name"])) {
    echo '
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="#"  ><img src="music_logo.png" id="Logo_image" style="width: 35px;">  </a>
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"  ></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" style="font-family: "Zeyada", cursive;
    font-size: 1.2rem;    font-weight: bold;
" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-family: "Zeyada", cursive;
    font-size: 1.2rem;    font-weight: bold;
" href="song_group.php">Songs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-family: "Zeyada", cursive;
    font-size: 1.2rem;    font-weight: bold;
" href="register.php">Register</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>';
} else {
    echo '
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-family: "Zeyada", cursive;
            font-size: 1.2rem;    font-weight: bold;
        "><img src="music_logo.png" id="Logo_image" style="width: 35px;">Musical World</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="font-family: "Zeyada", cursive;
        font-size: 1.2rem;    font-weight: bold;
    " href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-family: "Zeyada", cursive;
        font-size: 1.2rem;    font-weight: bold;
    " href="add_artist.php">Add Artist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-family: "Zeyada", cursive;
        font-size: 1.2rem;    font-weight: bold;
    " href="admin_song.php">Add Song</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-family: "Zeyada", cursive;
        font-size: 1.2rem;    font-weight: bold;
    " href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
}
