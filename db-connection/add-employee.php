<?php
session_start();
include "./main-connection-db-model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $dept = $_POST['dept'];

    echo $fname;
    $sql = "INSERT INTO employees (fname, lname, email, phone_no, dept) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $fname, $lname, $email, $phone_no, $dept);

    if ($stmt->execute()) {
        $getQuery = "SELECT user_id FROM employees WHERE status = 'active' and email = '$email'";
        $runQuery = mysqli_query($conn, $getQuery);
        if ($runQuery) {
            $row = mysqli_fetch_assoc($runQuery);
            if ($row) {
                $userId = $row['user_id'];
                echo "<script>
                window.location.href = '../information-view.php?userId=' + $userId;
              </script>";
            } else {
                echo "No active user found with that email.";
            }
        }
        // echo '<script>alert("New Record Created Successfully");
        // window.location.href ="./employee_information-db-model.php"</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>