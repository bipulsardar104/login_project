<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = password_hash($_POST['pwdd'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO userdetails (firstName, lastName, email, password) VALUES ('$fname', '$lname', '$email', '$pwd')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('New record created successfully');
        window.location.href = '../src/sign.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("Location: ../index.php");
    }

    $conn->close();
}
?>