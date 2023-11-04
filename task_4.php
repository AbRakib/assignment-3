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
                        <span class="fw-bold">Task-4: </span>
                        Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
                    </p>
                    <div>
                    <?php
                        function calculateAverageGrades($studentGrades) {
                            echo "<span class='fw-bold'>Result:</span> <br>";
                            foreach ($studentGrades as $student => $grades) {
                                $total = array_sum($grades);
                                $average = $total / count($grades);
                                echo "Student ". $student. " average grade: ".$average."<br>";
                            }
                        }
                        // Create a multidimensional array to store the student grades
                        $studentGrades = [
                            'Abu Hanifa' => ['Math' => 85, 'English' => 92, 'Science' => 78],
                            'Imam Mahadi' => ['Math' => 88, 'English' => 95, 'Science' => 90],
                            'Abdullah' => ['Math' => 75, 'English' => 80, 'Science' => 87],
                        ];
                        // Call the function with the student grades
                        calculateAverageGrades($studentGrades);
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