<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<body>
    <div class="main-div">
        <div class="inside-main">
            <form action="../db-connection/reset-db-model.php" method="post" onsubmit="return validatePasswords()">
            <input type="hidden" id="email" name="email" value="<?php echo htmlspecialchars($_GET['email']); ?>">
                <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" id="newPassword" name="newPassword" placeholder="New Password" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"
                        required>
                </div>

                <div class="sign_btn">
                    <button type="button" onclick="redirectToSignIn()">Go Back</button>

                    <button type="submit">Update Password</button>
                </div>
            </form>
            <script>
                function redirectToSignIn() {
                    window.location.href = '../src/sign.php';
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
        </div>
    </div>
</body>

</html>