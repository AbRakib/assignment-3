<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/img/icon.png">
    <title>Ostad - Array Project</title>
    <!-- bootstrap css link  -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- custom css link  -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- navbar -->
                <?php include './navbar.php';?>
                <!-- navbar -->
                <div class="card p-3 shadow">
                    <p class="">
                        <span class="fw-bold">Task-3: </span>
                        Create an array called $grades with the following values: 85, 92, 78, 88, 95. Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array.
                    </p>
                    <div>
                    <?php
                        function sortGradesDescending($grades) {
                            echo"<span class='fw-bold'>Main Array:</span> ";print_r($grades);
                            echo "<br>";
                            // Sort the grades array in descending order
                            rsort($grades);
                            // Print the sorted grades
                            echo"<span class='fw-bold'>Result Array:</span> ";print_r($grades);
                        }
                        // Create an array with the given grades
                        $grades = [85, 92, 78, 88, 95];
                        // Call the function with the array
                        sortGradesDescending($grades);
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>