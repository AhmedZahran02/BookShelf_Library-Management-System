<?php
$conn = mysqli_connect("localhost", "root", "", "book");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL";
    exit();
}
$id = $_POST['id'];

$query = "DELETE FROM `bookdetails` WHERE id=$id";

if (mysqli_query($conn, $query)) {
    echo "done";
} else {
    echo "failed";
}

mysqli_close($conn);

header("Location: index.php");