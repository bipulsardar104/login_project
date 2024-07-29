<?php
include "./main-connection-db-model.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $newPwd = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);
    $sql = "UPDATE userdetails SET password = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $newPwd, $email);
        if ($stmt->execute() === TRUE) {
            echo "<script>
            alert('Password updated successfully');
            window.location.href = '../src/sign.php';
            </script>";
        } else {
            echo "Error: " . $stmt->error;
            header("Location: ../index.php");
        }
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>