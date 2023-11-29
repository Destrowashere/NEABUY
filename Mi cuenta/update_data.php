<?php
session_start();
include('db.php');

$username = $_POST['username'];
$email = $_POST['email'];

$sql = "UPDATE users SET username='$username', email='$email' WHERE id='".$_SESSION['id']."'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    header('Location: config.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>