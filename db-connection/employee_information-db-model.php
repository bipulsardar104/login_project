<?php
include "./main-connection-db-model.php";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $stmt = $conn->prepare("SELECT * FROM employees WHERE status = 'active'");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows >= 0) {
        $employees = [];
        while ($row = $result->fetch_assoc()) {
            $employees[] = $row;
        }
        session_start();
        $_SESSION['employees'] = $employees;
        header("Location: ../src/success.php");
        exit();
    } else {
        echo '<script>alert("No user found");
        window.location.href = "../src/sign.php"</script>';
    }

    $stmt->close();
    $conn->close();
}
?>
