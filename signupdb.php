<?php

$conn = mysqli_connect("localhost", "root", "", "book");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL";
    exit();
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];

$query = "INSERT INTO librarian(firstname,lastname,email,password)
VALUES ('" . $firstname . "','" . $lastname . "','" . $username . "','" . $password . "')";

if (mysqli_query($conn, $query)) {
    echo "done";
} else {
    echo "failed";
}

mysqli_close($conn);

header("Location: register.php?value=1");