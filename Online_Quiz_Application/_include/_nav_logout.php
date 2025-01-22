<?php

echo '
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <img src="quiz.png" alt="My quiz Logo" class="navbar-logo">

    <a class="navbar-brand" href="#">QuizMantra</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>


';
?>