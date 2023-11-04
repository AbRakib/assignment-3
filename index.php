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
                        <span class="fw-bold">Task-1: </span>
                        Create a string variable called $text with the value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:
                        <ul>
                            <li>Convert the string to all lowercase.</li>
                            <li>Replace "brown" with "red" in the string.</li>
                            <li>Print the modified text.</li>
                        </ul>
                    </p>
                    <div>
                        <?php
                            function modifyText( $text ) {
                                // Convert the string to all lowercase
                                $text = strtolower( $text );
                                // Replace "brown" with "red" in the string
                                $text = str_replace( 'brown', 'red', $text );
                                // Print the modified text.
                                echo "<span class='fw-bold'>Result Text: </span>" . $text;
                            }
                            // Define the initial text
                            $oldText = "The quick brown fox jumps over the lazy dog.";
                            // Call the function with the initial text
                            modifyText( $oldText );
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