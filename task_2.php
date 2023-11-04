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
                        <span class="fw-bold">Task-2: </span>
                        Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.
                    </p>
                    <div>
                    <?php
                        function removeEvenNumbers($numbers) {
                            $result = array(); // Create a new array to store the result
                            foreach ($numbers as $number) {
                                if ($number % 2 != 0) {
                                    // Add the number to the result array if it's not even
                                    $result[] = $number;
                                }
                            }
                            // Print the resulting array
                            echo"<span class='fw-bold'>Main Array:</span> ";print_r($numbers);
                            echo "<br>";
                            echo"<span class='fw-bold'>Result Array:</span> ";print_r($result);
                        }
                        // Create an array with numbers from 1 to 10
                        $numbers = range(1, 10);
                        // Call the function with the array
                        removeEvenNumbers($numbers);
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