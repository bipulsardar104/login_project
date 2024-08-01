<?php
session_start();
$employees = isset($_SESSION['employees']) ? $_SESSION['employees'] : [];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Employees Details
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body
    style=" background: rgb(255, 200, 224);background: radial-gradient(circle, rgba(255, 200, 224, 1) 0%, rgba(147, 171, 199, 1) 100%);">


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="navbar p-1 mx-8">
                                hii
                            </div>
                            <h1>Employee Details: </h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="button" class="btn btn-primary col-md-4 m-1" data-bs-toggle="modal"
                                    data-bs-target="#addEmp">
                                    Add New Employee
                                </button>
                                <button class="btn btn-danger col-md-1 m-1" type="button"
                                    onclick="redirectPage('logOut')">Log
                                    Out</button>

                            </div>
                            <script>function redirectPage(where) {
                                    if (where == 'adding') {
                                        window.location.href = "./add-employees.php"
                                    }
                                    else if (where == 'logOut') {
                                        window.location.href = "../index.php"
                                    }
                                }</script>
                            <table border="1" class="table table-striped border border-success p-2 mb-2">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th style="padding: 10px;">Sl No</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Department</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($employees) > 0): ?>
                                        <?php foreach ($employees as $index => $employee): ?>
                                            <tr style="text-align: center;">
                                                <td><?php echo htmlspecialchars($index + 1); ?></td>
                                                <td><?php echo htmlspecialchars($employee['fname']); ?></td>
                                                <td><?php echo htmlspecialchars($employee['lname']); ?></td>
                                                <td><?php echo htmlspecialchars($employee['email']); ?></td>
                                                <td><?php echo htmlspecialchars($employee['phone_no']); ?></td>
                                                <td><?php echo htmlspecialchars($employee['dept']); ?></td>
                                                <td style="text-align: center;">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#editEmp-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                        style="background-color: transparent; border: none; color: red; cursor: pointer;">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </button>
                                                    <div class="modal fade"
                                                        id="editEmp-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                        tabindex="-1"
                                                        aria-labelledby="editModalLabel-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Fill the
                                                                        employee details:</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="../db-connection/edit-employee.php"
                                                                        method="post">
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="fname-<?php echo htmlspecialchars($employee['user_id']); ?>">First
                                                                                Name</label>
                                                                            <input type="text"
                                                                                id="fname-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                                                name="fname"
                                                                                value="<?php echo htmlspecialchars($employee['fname']); ?>"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="lname-<?php echo htmlspecialchars($employee['user_id']); ?>">Last
                                                                                Name</label>
                                                                            <input type="text"
                                                                                id="lname-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                                                name="lname"
                                                                                value="<?php echo htmlspecialchars($employee['lname']); ?>"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="email-<?php echo htmlspecialchars($employee['user_id']); ?>">Email</label>
                                                                            <input type="email"
                                                                                id="email-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                                                name="email"
                                                                                value="<?php echo htmlspecialchars($employee['email']); ?>"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="phone_no-<?php echo htmlspecialchars($employee['user_id']); ?>">Phone
                                                                                Number</label>
                                                                            <input type="text"
                                                                                id="phone_no-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                                                name="phone_no"
                                                                                value="<?php echo htmlspecialchars($employee['phone_no']); ?>"
                                                                                required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="dept-<?php echo htmlspecialchars($employee['user_id']); ?>">Department</label>
                                                                            <input type="text"
                                                                                id="dept-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                                                name="dept"
                                                                                value="<?php echo htmlspecialchars($employee['dept']); ?>"
                                                                                required>
                                                                        </div>
                                                                        <input type="hidden" name="user_id"
                                                                            value="<?php echo htmlspecialchars($employee['user_id']); ?>">
                                                                        <div class="sign_btn">
                                                                            <button type="submit">Update Employee</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="text-align: center;">
                                                    <form action="../db-connection/delete-employee.php" method="post">
                                                        <input type="hidden" name="user_id"
                                                            value="<?php echo htmlspecialchars($employee['user_id']); ?>">
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#deleteConfirmationModal-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                            style="background-color: transparent; border: none; color: red; cursor: pointer;">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                        <div class="modal fade"
                                                            id="deleteConfirmationModal-<?php echo htmlspecialchars($employee['user_id']); ?>"
                                                            tabindex="-1" aria-labelledby="deleteConfirmationLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete this record?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cancel</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="8">No employees found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>

                            </table>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="addEmp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Fill the employee details:</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../db-connection/add-employee.php" method="post">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
                            <input class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" type="text" id="fname" name="fname"
                                placeholder="First Name" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Last Name</span>
                            <input class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" type="text" id="lname" name="lname"
                                placeholder="Last Name" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                            <input class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" type="email" id="email" name="email"
                                placeholder="Email" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Phone Number</span>
                            <input class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" type="text" id="phone_no" name="phone_no"
                                placeholder="Phone Number" required>
                        </div>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Department</span>
                            <input class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-sm" type="text" id="dept" name="dept"
                                placeholder="Department" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" method="post" class="btn btn-primary">Add Employees</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            function reload() {
                location.reload()
            }</script>
</body>

</html>