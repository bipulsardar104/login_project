<?php

echo htmlspecialchars($_GET['email']);



?>

<div class="modal fade" id="forgotPwd" tabindex="-1" aria-labelledby="forgotPwdLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="forgotPwdLabel">Reset Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="forgotPwdForm">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                        <input class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" type="email" id="email-forgot" name="email"
                            placeholder="Email" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-success col-md-6 m-1" type="submit">Send Confirmation Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- OTP Modal -->
<div class="modal fade" id="otp" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otpModalLabel">Verify OTP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="otpForm" action="">
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Enter the OTP</span>
                        <input class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm" type="text" id="otp-input" name="otp"
                            placeholder="OTP" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-success col-md-6 m-1" type="submit">Verify OTP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('forgotPwdForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const email = document.getElementById('email-forgot').value;

        fetch('./db-connection/forgotpwd-db-model.php?email=' + encodeURIComponent(email), {
            method: 'GET'
        })
            .then(response => {
                if (response.ok) {
                    const otpModal = new bootstrap.Modal(document.getElementById('otp'));
                    otpModal.show();
                } else {
                    alert('An error occurred. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
    });
</script>