<?php include ('../include_bootstrap/header.php') ?>
<form action="../db-connection/reset-db-model.php" method="post" onsubmit="return validatePasswords()">
    <input type="hidden" id="email" name="email" value="<?php echo htmlspecialchars($_GET['email']); ?>">
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">New Password</span>
        <input class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
            type="password" id="newPassword" name="newPassword" placeholder="New Password" required>
    </div>
    <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Confirm Password</span>
        <input class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
            type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
    </div>
    <div class="row justify-content-center">
        <button class='btn btn-primary col-md-4 m-1 fa-solid fa-font' type="button" onclick="redirectToSignIn()">Go
            Back</button>
        <button class='btn btn-success col-md-6 m-1 fa-solid fa-font' type="submit">Update Password</button>
    </div>
</form>
<script>
    function redirectToSignIn() {
        window.location.href = '../index.php';
    }
    function validatePasswords() {
        var newPassword = document.getElementById('newPassword').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        if (newPassword !== confirmPassword) {
            alert("Passwords do not match!");
            return false;
        }
        return true;
    }
</script>

<?php include ('../include_bootstrap/footer.php') ?>