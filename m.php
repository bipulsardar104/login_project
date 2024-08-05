<?php
session_start();
include "./db-connection/main-connection-db-model.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $maritial_status = $_POST['marStatus'];
    $physically_handicapped = $_POST['handicapped'];
    $blood_group = $_POST['blood'];
    $nationality = $_POST['nation'];
    $eduType = $_POST['eduType'];
    $branch = $_POST['branch'];
    $cgpa = $_POST['marks'];
    $yop = $_POST['yop'];
    $yoj = $_POST['yoj'];
    $personal_mobile_number = $_POST['pnumber'];
    $personal_email = $_POST['pEmail'];
    $residence_number = $_POST['rNumber'];
    $addressType = $_POST['eduType'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $post_code = $_POST['pincode'];

    $sql = "INSERT INTO employees_details_extended (user_id, gender, dob, maritial_status, physically_handicapped, blood_group, nationality)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $user_id, $gender, $dob, $maritial_status, $physically_handicapped, $blood_group, $nationality);
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        $stmt->close();
        $conn->close();
        exit();
    }

    $sql = "INSERT INTO employees_education (user_id, type, branch, cgpa, yop, yoj)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $user_id, $eduType, $branch, $cgpa, $yop, $yoj);
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        $stmt->close();
        $conn->close();
        exit();
    }

    $sql = "INSERT INTO employees_personal_contact_details (user_id, personal_mobile_number, personal_email, residence_number)
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $user_id, $personal_mobile_number, $personal_email, $residence_number);
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        $stmt->close();
        $conn->close();
        exit();
    }

    $sql = "INSERT INTO employees_address (user_id, type, address, city, country, post_code)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $user_id, $addressType, $address, $city, $country, $post_code);
    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
        $stmt->close();
        $conn->close();
        exit();
    }

    echo "New record created successfully";

    $stmt->close();
    $conn->close();
}
?>
