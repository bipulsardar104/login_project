<?php
include ("main-connection-db-model.php");
if (isset($_GET['otp'])) {
    $email = $_GET['email'];
    $msg = $_GET['otp'];
    $sql = "INSERT INTO otpvalidation (email, otp) VALUES ('$email', '$msg')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('New record created successfully');
        </script>";
        // echo http_response_code(200);
    } else {
        http_response_code(500);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo " " . $email, " " . $msg;
    // echo "<script>
    //     alert('Password format is incorrect');
    //     window.location.href = '../index.php';
    //     </script>";
}


?>