<?php
session_start();
include "./main-connection-db-model.php";
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
        $_SESSION['email'] = $email;
        if (http_response_code(200)) {
            header("Location: ./employee_information-db-model.php");
            exit();
        }
    } else {
        echo '<script>alert("No user found");
        window.location.href = "../index.php"</script>';
    }

    $stmt->close();
    $conn->close();
}
?>