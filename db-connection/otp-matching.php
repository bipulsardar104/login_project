<?php
include ("main-connection-db-model.php");

if (isset($_POST["otpVerify"])) {
    $email = $_POST["email"];
    $entered_otp = $_POST["otp"];
    $stmt = $conn->prepare('SELECT email, otp FROM otpvalidation WHERE status = "active" AND email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['email'];
        $db_otp = $row['otp'];
        if (password_verify($entered_otp, $db_otp)) {
            $sql = "UPDATE otpvalidation SET status = 'inactive' WHERE otp=?";
            $del = $conn->prepare($sql);
            $del->bind_param("i", $db_otp);

            if ($del->execute()) {
                header("Location: ../src/reset_pwd.php?email=" . urlencode($email));
            } else {
                echo "Error: " . $del->error;
            }
            $del->close();
        } else {
            echo "Not Matched";
        }
    } else {
        echo "No active OTP found for this email.";
    }
    $stmt->close();
} else {
    echo "OTP verification was not requested.";
}
?>