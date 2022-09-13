<?php

$conn = mysqli_connect("localhost", "root", "", "book");

// Check connection
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL";
    exit();
}

$booktitle = $_POST["booktitle"];
$author = $_POST["author"];
$edition = $_POST["edition"];
$imgsrc = $_POST["imgsrc"];
$bookdetails = $_POST["bookdetails"];

$autocheck = "ALTER TABLE tablename AUTO_INCREMENT = 1";
mysqli_query($conn, $autocheck);

$query = "INSERT INTO `bookdetails`(`title`, `author`, `edition`, `subdate`, `imgsrc`, `details`) VALUES ('$booktitle','$author',$edition,now(),'$imgsrc','$bookdetails')";

if (mysqli_query($conn, $query)) {
    echo "done";
} else {
    echo "failed";
}

mysqli_close($conn);

header("Location: add.php?value=1");