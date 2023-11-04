<nav class="navbar navbar-expand-lg bg-body-tertiary my-5 shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <img class="img-fluid" src="./assets/img/icon.png" alt="icon">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/ostad/assignment-3/index.php' ? 'active' : ''; ?>" aria-current="page" href="./index.php">Task 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/ostad/assignment-3/task_2.php' ? 'active' : ''; ?>" href="./task_2.php">Task 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/ostad/assignment-3/task_3.php' ? 'active' : ''; ?>" href="./task_3.php">Task 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/ostad/assignment-3/task_4.php' ? 'active' : ''; ?>" href="./task_4.php">Task 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $_SERVER['PHP_SELF'] == '/ostad/assignment-3/task_5.php' ? 'active' : ''; ?>" href="./task_5.php">Task 5</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            Welcome To Module 3 Assignment
        </form>
        </div>
    </div>
</nav>