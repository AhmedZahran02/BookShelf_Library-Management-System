<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
}

$conn = mysqli_connect("localhost", "root", "", "book");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL";
    exit();
}
$id = $_POST['id'];
$booktitle = $_POST["booktitle"];
$author = $_POST["author"];
$edition = $_POST["edition"];
$imgsrc = $_POST["imgsrc"];
$bookdetails = $_POST["bookdetails"];

$query = "UPDATE `bookdetails` SET `title`='$booktitle',`author`='$author',`edition`=$edition,`imgsrc`='$imgsrc',`details`='$bookdetails' WHERE id=$id";

if (mysqli_query($conn, $query)) {
    echo "done";
} else {
    echo "failed";
}

mysqli_close($conn);

header("Location: edit.php?value=1");