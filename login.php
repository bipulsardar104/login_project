<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $stmt = $conn->prepare("SELECT firstName, lastName, password FROM userdetails WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($fname, $lname, $hashed_pwd);

    if ($stmt->fetch() && password_verify($pwd, $hashed_pwd)) {
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        echo "Sign in successful. Welcome " . $fname . " " . $lname;
    } else {
        echo "Invalid email or password.";
    }

    $stmt->close();
    $conn->close();
}
?>
