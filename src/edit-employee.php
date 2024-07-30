<?php
include "../db-connection/main-connection-db-model.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['user_id'];
    $stmt = $conn->prepare("SELECT * FROM employees WHERE user_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $employee = $result->fetch_assoc();

    if ($employee) {
        session_start();
        $_SESSION['employee'] = $employee;
    } else {
        echo '<script>alert("Employee not found"); window.location.href = "./success.php"</script>';
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<body>
    <div class="main-div">
        <div class="inside-main">
            <form action="../db-connection/edit-employee.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname"
                        value="<?php echo htmlspecialchars($_SESSION['employee']['fname']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname"
                        value="<?php echo htmlspecialchars($_SESSION['employee']['lname']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"
                        value="<?php echo htmlspecialchars($_SESSION['employee']['email']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone_no">Phone Number</label>
                    <input type="text" id="phone_no" name="phone_no"
                        value="<?php echo htmlspecialchars($_SESSION['employee']['phone_no']); ?>" required>
                </div>
                <div class="form-group">
                    <label for="dept">Department</label>
                    <input type="text" id="dept" name="dept"
                        value="<?php echo htmlspecialchars($_SESSION['employee']['dept']); ?>" required>
                </div>
                <input type="hidden" name="user_id"
                    value="<?php echo htmlspecialchars($_SESSION['employee']['user_id']); ?>">
                <div class="sign_btn">
                    <button type="submit">Update Employee</button>
                </div>
            </form>
        </div>
    </div>
</body>