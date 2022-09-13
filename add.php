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
    <link rel="stylesheet" href="styles/reset.css" />
    <link href="styles/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <header class="logo">
        <a href="index.php">
            <img class="logo-name" src="images/logo.png" alt="logo" width="200px">
            <img class="logo-name2" src="images/bluelogo.png" alt="logo" width="200px">
        </a>
    </header>
    <main>
        <div class="card-layout">
            <div class="header_content ">
                <?php
                if (isset($_GET["value"]) && $_GET["value"] == 1) {
                    echo ("<h3> Book Added</h3>");
                }
                ?>
                <h1 class="header_h">Add Book</h1>
            </div>
            <form action="addbookdb.php" method="post">
                <div class="signup">
                    <div class="firstname-div">
                        <input id="firstname" name="booktitle" placeholder=" " type="text" required autofocus>
                        <label class="firstname-label" for="booktitle" aria-hidden="true">booktitle</label>
                    </div>
                    <div class="lastname-div">
                        <input id="lastname" name="author" placeholder=" " type="text" required>
                        <label class="lastname-label" for="author" aria-hidden="true">author Name</label>
                    </div>
                    <div class="username-div">
                        <input id="username" name="edition" placeholder=" " type="number" required>
                        <label class="username-label" for="edition" aria-hidden="true">edition</label>
                    </div>
                    <div class="password-div">
                        <input id="password" name="imgsrc" placeholder=" " type="url" required>
                        <label class="password-label" for="imgsrc">Image Url</label>
                    </div>
                    <div class="form-group">
                        <label for="bookdetails">Book Details</label>
                        <textarea class="form-control" id="bookdetails" name="bookdetails" rows="3"></textarea>
                    </div>
                    <div>
                        <input class="form-check-input" type="checkbox" id="termandconditions" name="termandconditions"
                            value="termandconditions" required>
                        <label class="form-check-label" for="termandconditions">I accept the <a class="forgotpassword"
                                href="termsandconditions.php">Terms and Conditions</a></label>
                    </div>
                    <input class="submit" type="submit" value="Add Book">
                </div>
            </form>
        </div>
        <br><br>
    </main>
    <footer class="text-center p-3" id="footer">
        <a class="logofooter" href="index.php" style="height: 23.6px;">
            <img class="logo-name" src="images/logo.png" alt="logo" width="120px">
            <img class="logo-name2" src="images/bluelogo.png" alt="logo" width="120px">
        </a>
        &copy 2022,Bookshelf
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>