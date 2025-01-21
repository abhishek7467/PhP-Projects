<?php
if (($_SERVER['REQUEST_METHOD'] == 'POST') and (!empty($_SERVER['REQUEST_METHOD'] == 'POST'))) {
    $title = $_POST['title'];
    $notes = $_POST['notes'];


    $myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");

    // $lines_no=count(file($myfile));
// echo $lines_no;

    // static $s_no=$s_no+1;
    fwrite($myfile, $title . "\t\t" . $notes . "\t" . date("d-m-y h:i:s") . "\n");
    fclose($myfile);
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes Using File Handling</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include the DataTables CSS and JavaScript files -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->


    <form class="m-3" action="file_operations.php" method="post">
        <div class="mb-3 ">
            <label for="DT" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Your Notes</label>
            <input type="text" class="form-control" id="text" name="notes" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sr_no</th>
      <th scope="col">First</th>
    </tr>
  </thead>
  <tbody >
    
     
    <?php

$i=1;
    $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    while (!feof($myfile)) {
        //    $content= fgets($myfile);
        echo
            '
            <tr style="color:blue;">
<th scope="row">'.$i.'</th>
      <td>' .
      fgets($myfile) . '</td>
      </tr>
';
$i++;
    }
    fclose($myfile);
    ?>
    
   
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
       
       <script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>


    </body>

</html>