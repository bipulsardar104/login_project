<?php
include "./main-connection-db-model.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST["search"];
    // $search = mysqli_real_escape_string($conn, $search);


    $sql = "SELECT * FROM employees WHERE 
            (fname LIKE '%$search%' OR 
            lname LIKE '%$search%' OR 
            email LIKE '%$search%' OR 
            dept LIKE '%$search%') AND 
            status = 'active' 
            ORDER BY updatedAt DESC";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($rows);
    } else {
        echo json_encode([]);
    }
}
?>