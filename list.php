<?php

include "./db-connection/main-connection-db-model.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $user_id = $_GET['user_id']; 
$user_id = 37;
$sql = "SELECT 
            mainEmp.user_id, mainEmp.fname, mainEmp.lname, mainEmp.email, mainEmp.phone_no, mainEmp.dept,
            details.gender, details.dob, details.maritial_status, details.physically_handicapped, details.blood_group, details.nationality,
            edu.type as eduType, edu.branch, edu.cgpa, edu.yop, edu.yoj,
            contact.personal_mobile_number, contact.personal_email, contact.residence_number,
            addr.type as addrType, addr.address, addr.city, addr.country, addr.post_code
        FROM 
            employees AS mainEmp
        LEFT JOIN 
            employees_details_extended AS details ON mainEmp.user_id = details.user_id
        LEFT JOIN 
            employees_education AS edu ON mainEmp.user_id = edu.user_id
        LEFT JOIN 
            employees_personal_contact_details AS contact ON mainEmp.user_id = contact.user_id
        LEFT JOIN 
            employees_address AS addr ON mainEmp.user_id = addr.user_id
        WHERE 
            mainEmp.user_id = '$user_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    ?>

    <form method="post" action="update.php">
        <h2>Employee Information</h2>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">First Name</span>
            <input type="text" class="form-control" name="fname" value="<?php echo $row['fname']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Last Name</span>
            <input type="text" class="form-control" name="lname" value="<?php echo $row['lname']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Email</span>
            <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Phone Number</span>
            <input type="text" class="form-control" name="phone_no" value="<?php echo $row['phone_no']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Department</span>
            <input type="text" class="form-control" name="dept" value="<?php echo $row['dept']; ?>" required>
        </div>

        <h2>Extended Details</h2>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Gender</span>
            <input type="text" class="form-control" name="gender" value="<?php echo $row['gender']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Date of Birth</span>
            <input type="text" class="form-control" name="dob" value="<?php echo $row['dob']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Marital Status</span>
            <input type="text" class="form-control" name="maritial_status" value="<?php echo $row['maritial_status']; ?>"
                required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Physically Handicapped</span>
            <input type="text" class="form-control" name="physically_handicapped"
                value="<?php echo $row['physically_handicapped']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Blood Group</span>
            <input type="text" class="form-control" name="blood_group" value="<?php echo $row['blood_group']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Nationality</span>
            <input type="text" class="form-control" name="nationality" value="<?php echo $row['nationality']; ?>" required>
        </div>

        <h2>Education Details</h2>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Type of Education</span>
            <input type="text" class="form-control" name="eduType" value="<?php echo $row['eduType']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Branch</span>
            <input type="text" class="form-control" name="branch" value="<?php echo $row['branch']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">CGPA or Percentage</span>
            <input type="text" class="form-control" name="cgpa" value="<?php echo $row['cgpa']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Year of Passing</span>
            <input type="text" class="form-control" name="yop" value="<?php echo $row['yop']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Year of Joining</span>
            <input type="text" class="form-control" name="yoj" value="<?php echo $row['yoj']; ?>" required>
        </div>

        <h2>Contact Details</h2>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Personal Mobile Number</span>
            <input type="text" class="form-control" name="personal_mobile_number"
                value="<?php echo $row['personal_mobile_number']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Personal Email</span>
            <input type="email" class="form-control" name="personal_email" value="<?php echo $row['personal_email']; ?>"
                required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Residential Number</span>
            <input type="text" class="form-control" name="residence_number" value="<?php echo $row['residence_number']; ?>"
                required>
        </div>

        <h2>Address Details</h2>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Type of Address</span>
            <input type="text" class="form-control" name="addrType" value="<?php echo $row['addrType']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Address</span>
            <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">City</span>
            <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Country</span>
            <input type="text" class="form-control" name="country" value="<?php echo $row['country']; ?>" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">Pin Code</span>
            <input type="text" class="form-control" name="post_code" value="<?php echo $row['post_code']; ?>" required>
        </div>

        <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <?php
} else {
    echo "No records found";
}

$conn->close();
?>