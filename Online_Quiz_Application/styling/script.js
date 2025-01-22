

<?php


$sql = "SELECT * FROM `User_dashboard_info`";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {

}
?>


// Fetch the PHP variables and convert them into JavaScript arrays
var marks = <?php echo json_encode($row["marks"]); ?>;
var totalQuiz = <?php echo json_encode($row["total_no_quiz"]); ?>;

// Create the chart
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Marks', 'Total Quiz'],
        datasets: [{
            label: 'Results',
            data: [marks, totalQuiz],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(54, 162, 235, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true
    }
});