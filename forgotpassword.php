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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
                <h1 class="header_h">Forgot password</h1>
                <p class="header_subh">Enter your email address</p>
            </div>
            <form action="" method="post">
                <div class="forgotpasswordmain">
                    <div class="username-div">
                        <input id="username" name="username" placeholder=" " type="text" required autofocus>
                        <label class="username-label" for="username" aria-hidden="true">Email or Phone</label>
                    </div>
                    <input class="submit" type="submit" value="Send Password">
                </div>
            </form>
            <hr color="gray" size="0px">
            <div class="alternate-options">
                <div class="or-text">or</div>
                <div>
                    <button class="reader"><a href="main.php">Enter as a reader</a></button>
                </div>
                <hr>
                <div>
                    <p>Don't have an account? <a class="forgotpassword" href="register.php">Register</a></p>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center p-3" id="footer">
        <a class="logofooter" href="index.php" style="height: 23.6px;">
            <img class="logo-name" src="images/logo.png" alt="logo" width="120px">
            <img class="logo-name2" src="images/bluelogo.png" alt="logo" width="120px">
        </a>
        &copy 2022,Bookshelf
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>