<?php
include "./main-connection-db-model.php";
session_start();
echo "<script>console.log('hello')</script>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $stmt = $conn->prepare("SELECT firstName, lastName, password FROM userdetails WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($fname, $lname, $password);

    if ($stmt->fetch()) {
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
        $stmt->close();
        header("Location: ../assets/test.php?email=" . urlencode($email));
        exit();
    } else {
        echo '<script>alert("No user found");
        window.location.href = "../src/forgot_pwd.php"</script>';
    }
    $stmt->close();
    $conn->close();
}
?>