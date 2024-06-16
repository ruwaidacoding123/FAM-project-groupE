

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="../css/styles.css">

    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <div class="container">
        <div class="change-password-box">
            <h2 class="title">Change Password</h2>
            <form action="#" method="post" class="change-password-form" id="change-password-form">
                <div class="form-group">
                    <label for="new-password">New Password:</label>
                    <input type="password" id="new-password" name="new-password" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
