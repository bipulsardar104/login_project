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
            <form action="../db-connection/forgotpwd-db-model.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="sign_btn">
                    <button type="button" onclick="redirectToSignIn()">Go Back</button>

                    <button type="submit">Send Confirmation Link</button>
                </div>
            </form>
            <script>
                function redirectToSignIn() {
                    window.location.href = '../src/sign.php';
                }
            </script>
        </div>
    </div>
</body>

</html>