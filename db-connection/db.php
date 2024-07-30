<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function validate_password($password)
{
    $pattern = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).+$/';
    if (preg_match($pattern, $password)) {
        return true;
    } else {
        return false;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    if (validate_password($_POST['pwdd'])) {
        $pwd = password_hash($_POST['pwdd'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO userdetails (firstName, lastName, email, password) VALUES ('$fname', '$lname', '$email', '$pwd')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
        alert('New record created successfully');
        window.location.href = '../index.php';
        </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<scrip>alert('Some Issue Occured')</script>";
        }

        $conn->close();
    } else {
        echo "<script>
        alert('Password format is incorrect');
        window.location.href = '../index.php';
        </script>";
    }
}
?>