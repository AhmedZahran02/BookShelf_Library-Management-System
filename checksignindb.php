<?php

$conn = mysqli_connect("localhost", "root", "", "book");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL";
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT email,password FROM librarian
WHERE email = '" . $username . "' 
AND password = '" . $password . "' ";

// echo $query;

$result = mysqli_query($conn, $query);

if (mysqli_fetch_assoc($result) == null) {
    header("Location: signin.php?value=1");
} else {
    header("Location: index.php");
}

if ($result) {
    echo "done";
} else {
    echo "failed";
}

mysqli_free_result($result);
mysqli_close($conn);