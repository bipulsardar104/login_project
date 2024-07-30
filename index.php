<?php
include "./db-connection/db.php";
?>
<?php include ("include_bootstrap/header.php"); ?>
<form action="./db-connection/login.php" method="post">
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm" type="email" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
        <input type="text" class="form-control" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm" type="password" id="pwd" name="pwd" placeholder="Password" required>
    </div>
    <div class="row justify-content-center">
        <button class='btn btn-primary col-md-4 m-1 fa-solid fa-font' type="submit">Sign
            In</button>
        <button class='btn btn-success col-md-6 m-1 fa-solid fa-font' type="button" class="btn btn-primary"
            data-bs-toggle="modal" data-bs-target="#forgotPwd">Forgot
            Password</button>
    </div>
    <div class="row justify-content-center">
        <button class='btn btn-warning col-md-6 m-1 fa-solid fa-font' type="button" class="btn btn-primary"
            data-bs-toggle="modal" data-bs-target="#createNew">
            Create New
        </button>
    </div>
</form>
<div class="modal fade" id="createNew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Credentials</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./db-connection/db.php" method="post">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" type="text" id="fname" name="fname"
                            placeholder="First Name" required>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Last Name</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"
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
                        <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
                        <input class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" type="password" id="pwdd" name="pwdd"
                            placeholder="Password" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class='btn btn-primary col-md-4 m-1 fa-solid fa-font' type="submit">Sign Up</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="forgotPwd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./db-connection/forgotpwd-db-model.php" method="post">

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                        <input class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" type="email" id="email" name="email"
                            placeholder="Email" required>
                    </div>
                
                <script>
                    function redirectToSignIn() {
                        window.location.href = '../src/sign.php';
                    }
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class='btn btn-success col-md-6 m-1 fa-solid fa-font' type="submit">Send Confirmation
                    Link</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php include ("include_bootstrap/footer.php"); ?>