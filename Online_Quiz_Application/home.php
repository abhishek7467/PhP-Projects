<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuizMantra</title>
  <link rel="stylesheet" href="./styling/home.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="_include/_nav.css">
<style>
  .features {
  background-color: #f9f9f9;
  padding: 20px;
}

.features h2 {
  color: #333;
  font-size: 24px;
  margin-bottom: 10px;
}

.features ul {
  list-style-type: square;
  padding-left: 20px;
}

.features li {
  color: #555;
  font-size: 16px;
  line-height: 1.5;
}
  .visuals{
    /* border: 1px solid red; */
    height: 91%;
    width: 100%;
  }
  .container .top {
    height: 473;
  }
  .visuals img{
    width: 100%;
    object-fit: contain;
  }
  header {
  background-color: #f2f2f2;
  padding: 20px;
  text-align: center;
}

h1 , .title{
  color: #333;
  font-size: 28px;
  text-transform: uppercase;
  letter-spacing: 2px;
}
</style>

</head>
<body>

<?php include "_include/_nav.php"; ?>
<header>
    <h1 class="title">Welcome to the MCQ Questions Platform</h1>
  </header>
<div class="container top">

<section class="visuals">
      <img src="quiz.jpg" alt="MCQ Quiz Image">
</section>


</div>
<div class="container">
  <div class="first-container">
    <h1>Sign UP For Free..</h1>
    <h2>Sign up now and unlock your potential!</h2>
    <h3>Take a quiz and make your mind creative</h3>
    <p>Here at RocketSTEM our goal has always been to educate and inspire the next generation of explorers. With that in mind during these unusual times of necessary isolation, we’ve added new educational sections to our website. “QuizMe” tests your knowledge of a subject with a 10 to 15 questions quiz. You’ll get the results instantly after clicking the Finish button, as well as being shown the correct answers and additional details related to the question. “The More You Know” tackles a single subject — be it a stellar object, space mission, person, or place — and gives you a basic understanding of it.

While not a substitute for actual teachers in classrooms, we hope these new areas will keep your mind busy while you are social distancing at home.</p>


    <!-- Content for the first container goes here -->
  </div>
  <div class="second-container">
    <!-- Content for the second container goes here -->
  <!-- <h1>Hii, This is 2nd</h1> -->
  <section class="features">
      <h2>Features</h2>
      <ul>
        <li>Extensive Question Bank</li>
        <li>Customizable Practice Tests</li>
        <li>Detailed Explanations</li>
        <li>Track Your Progress</li>
        <li>Interactive Interface</li>
        <li>Social Learning Community</li>
      </ul>
    </section>
  
</div>
</div>

<!-- <img src="P54U.gif" alt="Your GIF"> -->







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>