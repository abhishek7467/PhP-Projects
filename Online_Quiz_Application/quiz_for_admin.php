<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include_once "_include/_db.php"; ?>

<?php
$register = false;
if (($_SERVER["REQUEST_METHOD"] == "POST") && (!empty($_SERVER["REQUEST_METHOD"] == "POST"))) {
    // $question = $_POST["question"];
    // $Option1 = $_POST["option1"];
    // $Option2 = $_POST["option2"];
    // $Option3 = $_POST["option3"];
    // $Option4 = $_POST["option4"];
    // $Correct_option = $_POST["Correct_option"];\

    $file="questions.json";
    $contents =file_get_contents($file);
    // print_r($contents);
    $array = json_decode($contents,true);
    // print_r($array);
    $i=0;
    foreach($array as $k => $v){
        for($i=0;$i<count($v);$i++){
      $question=$v[$i]["question"];
        $Option1=$v[$i]["options"][0];
        $Option2=$v[$i]["options"][1];
        $Option3=$v[$i]["options"][2];
        $Option4=$v[$i]["options"][3];
        $Correct_option=$v[$i]["answer"];
        // print_r($v[$i]["question"]);

        $sql = "INSERT INTO `Quiz_Questions` (`Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Correct_option`) VALUES ('$question', '$Option1', '$Option2', '$Option3', '$Option4', '$Correct_option');";
        $res = mysqli_query($conn, $sql);
    
    }

    }
    // $question = $v[0]["question"];
    // $Option1 = $_POST["option1"];
    // $Option2 = $_POST["option2"];
    // $Option3 = $_POST["option3"];
    // $Option4 = $_POST["option4"];
    // $Correct_option = $_POST["Correct_option"];




    // if ($res) {
    //     echo  "Inserted Successfully";
    // }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="_include/_nav.css">
    <!-- <link rel="stylesheet" href="styling/register.css"> -->

</head>

<body>

    <?php include "_include/_nav.php"; ?>


    <h1>Register</h1>

    <div class="container">
        <form action="quiz_for_admin.php" method="post">
            <div class="mb-3" action="register.php" method="post">
                <label for="question" class="form-label">Question</label>
                <input type="text" class="form-control" id="question" name="question" >
            </div>
            <div class="mb-3">
                <label for="option1" class="form-label">option 1</label>
                <input type="text" class="form-control" id="option1" name="option1" >
            </div>
            <div class="mb-3">
                <label for="option2" class="form-label">option 2</label>
                <input type="text" class="form-control" name="option2" id="option2">
            </div>
            <div class="mb-3">
                <label for="option3" class="form-label">option 3</label>
                <input type="text" class="form-control" id="option3" name="option3">
            </div>
            <div class="mb-3">
                <label for="option4" class="form-label">option 4</label>
                <input type="text" class="form-control" id="option4" name="option4">
            </div>
            <div class="mb-3">
                <label for="Correct_option" class="form-label">Correct option</label>
                <input type="text" class="form-control" id="Correct_option" name="Correct_option">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>