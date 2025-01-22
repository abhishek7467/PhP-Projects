<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="_include/_nav.css">
    <link rel="stylesheet" href="styling/about.css">

</head>

<body>

    <?php include "_include/_nav.php"; ?>

    <header>
    <h1>Welcome to the MCQ Platform</h1>
    <h2>Test Your Knowledge and Expand Your Understanding</h2>
  </header>

  <main>
    <section class="visuals">
      <img src="quiz.jpg" alt="MCQ Quiz Image">
    </section>

    <section class="categories">
      <h3>Explore Different MCQ Categories</h3>
      <p>Choose from a wide range of subjects and topics:</p>
      <ul>
        <li><a href="#">Mathematics</a></li>
        <li><a href="#">Science</a></li>
        <li><a href="#">History</a></li>
        <li><a href="#">Literature</a></li>
        <li><a href="#">Computer Science</a></li>
        <li><a href="#">Geography</a></li>
      </ul>
    </section>

    <section class="benefits">
      <h3>Why Choose Our MCQ Platform?</h3>
      <ul>
        <li>A vast collection of carefully curated multiple-choice questions.</li>
        <li>Interactive explanations and solutions for each question.</li>
        <li>Progress tracking to monitor your improvement over time.</li>
        <li>User-friendly interface with intuitive navigation.</li>
        <li>Time-limited quizzes for added challenge.</li>
      </ul>
    </section>

    <section class="how-it-works">
      <h3>How It Works</h3>
      <ol>
        <li>Create a free account or log in to your existing account.</li>
        <li>Select a category and choose a quiz.</li>
        <li>Attempt the multiple-choice questions within the given time limit.</li>
        <li>Receive instant feedback with explanations for each question.</li>
        <li>Track your scores and progress over time in your personal profile.</li>
      </ol>
    </section>

    <section class="testimonials">
      <h3>What Our Users Say</h3>
      <div class="testimonial">
        <blockquote>
          "This MCQ platform has revolutionized my learning experience. It's engaging, informative, and fun!"
        </blockquote>
        <cite>- John Doe</cite>
      </div>
      <div class="testimonial">
        <blockquote>
          "I love how this platform challenges me and helps me gauge my understanding of different subjects. Highly recommended!"
        </blockquote>
        <cite>- Jane Smith</cite>
      </div>
    </section>
  </main>
  
  <footer>
    <nav>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="privacy_policy.php">Privacy Policy</a></li>
        <li><a href="termOfService.php">Terms of Service</a></li>
      </ul>
    </nav>
    <div class="social-media">
      <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
      <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
      <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
    </div>
  </footer>

   


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>








