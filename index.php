<?php
include "./db-connection/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>

<body>
    <div class="main-div">
        <div class="inside-main">
            <form action="./db-connection/db.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="pwdd">Password</label>
                    <input type="password" id="pwdd" name="pwdd" placeholder="Password" required>
                </div>
                <div class="sign_btn">
                    <button type="submit">Sign Up</button>
                    <button type="button" onclick="redirectToSignIn()">Sign In</button>
                </div>
            </form>
            <script>
                function redirectToSignIn() {
                    window.location.href = './src/sign.php';
                }
            </script>
        </div>
    </div>
</body>

</html>