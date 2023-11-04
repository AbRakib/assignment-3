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
                        <span class="fw-bold">Task-5: </span>
                        Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
                    </p>
                    <div>
                    <?php
                        function generatePassword($length) {
                            // Define character sets for lowercase, uppercase letters, numbers, and special characters
                            $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
                            $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            $numberChars = '0123456789';
                            $specialChars = '!@#$%^&*()_+';
                            // Combine all character sets into one
                            $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;
                            // Initialize the password string
                            $password = '';
                            // Generate a random password of the specified length
                            for ($i = 0; $i < $length; $i++) {
                                $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
                                $password .= $randomChar;
                            }
                            return $password;
                        }
                        // Generate a password with a length of 12 characters
                        $length = 12;
                        $password = generatePassword($length);
                        // Print the generated password
                        echo"<span class='fw-bold'>Reload To Change Password: </span><span class='border p-2 text-info'>". $password ."</span>";
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