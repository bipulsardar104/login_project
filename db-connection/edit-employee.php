<?php
include "./main-connection-db-model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sl_no = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $dept = $_POST['dept'];

    $sql = "UPDATE employees SET fname=?, lname=?, email=?, phone_no=?, dept=? WHERE user_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $fname, $lname, $email, $phone_no, $dept, $sl_no);

    if ($stmt->execute()) {
        echo '<script>alert("Record Updated Successfully");
        window.location.href ="./employee_information-db-model.php"</script>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
