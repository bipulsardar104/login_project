<?php
include "./main-connection-db-model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sl_no = $_POST['user_id'];


    $sql = "UPDATE employees SET status = 'inactive' WHERE user_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $sl_no);

    if ($stmt->execute()) {
        echo '<script>alert("Record Deleted Successfully");
        window.location.href ="./employee_information-db-model.php"</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>