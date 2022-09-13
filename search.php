<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Ahmed Zahran" />
    <meta name="description" content="Library Management System" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library Management System</title>
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.css">
    <link href="styles/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/mainstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" id="logo" href="index.php">
                    <img class="logo-name" src="images/logo.png" alt="logo" width="150px">
                    <img class="logo-name2" src="images/bluelogo.png" alt="logo" width="150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signin.php">Log in</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" action="search.php" method="GET">
                        <input class="form-control me-2" type="search" name="q" placeholder="Search by Title"
                            aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="container">
            <div class="row justify-content-around mt-4">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "book");

                // Check connection
                if ($conn->connect_errno) {
                    echo "Failed to connect to MySQL";
                    exit();
                }
                $q = $_GET['q'];
                $query = "SELECT `id`, `title`, `imgsrc`, `details` FROM `bookdetails` WHERE title LIKE '%$q%';";

                // echo $query;

                $result = mysqli_query($conn, $query);
                $id;
                $title;
                $author;
                $imgsrc;
                $details;

                if (mysqli_num_rows($result) == 0) {
                    echo "<h1 style='text-align: center; height:200000px;'>No Results Found</h1>";
                }
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $imgsrc = $row['imgsrc'];
                    $details = $row['details'];

                    echo "
                <div class='card col-md-3 m-1' style='width: 18rem;'>
                    <img src = '$imgsrc' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title d-inline m-1' >$title</h5>
                        <form class='d-inline' action='edit.php' method='post'>
                        <input type='number' value='$id' name='id' style='display: none;'>
                        <button class='btn btn-primary' type='submit'>Edit</button>
                        </form>
                        <p class='card-text'>" . $details . ".</p>
                        <form class='d-inline m-1' action='more.php' method='post'>
                        <input type='number' value='$id' name='id' style='display: none;'>
                        <button class='btn btn-primary' type='submit'>View More</button>
                        </form>
                        <form class='d-inline m-1' action='delete.php' method='post'>
                        <input type='number' value='$id' name='id' style='display: none;'>
                        <button class='btn btn-primary' type='submit'>Delete</button>
                </form>
            </div>
        </div>";
                }
                mysqli_free_result($result);
                mysqli_close($conn); ?>

            </div>
        </div>
    </main>
    <a id="addbtn" class=" btn btn-primary" href="add.php" role="button">+</a>
    <footer class="text-center p-3" id="footer">
        <a class="logofooter" href="index.php">
            <img class="logo-name" src="images/logo.png" alt="logo" width="120px">
            <img class="logo-name2" src="images/bluelogo.png" alt="logo" width="120px">
        </a>
        <span id="footer-text">
            &copy 2022,Bookshelf
        </span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="script/script.js"></script>
</body>

</html>