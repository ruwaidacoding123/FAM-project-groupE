<?php include 'login_process.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/styles.css">

    <style>
        .error-message {
            color: red;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2 class="title">OPM System</h2>
            <form action="login_process.php" method="post" class="login-form" id="login-form">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <div class="forgot-password" id="forgot-password">
                        <a href="password_reset.php" id="forgot-link">Forgot Password?</a>
                    </div>
                 
                </div>
               
                <button type="submit" id="submit">Login</button>
                
                <!-- Display error message within the container -->
                <?php
                $errorMessage = "invalid email or password";
                ?>
                <?php if(isset($errorMessage)): ?>
                    <div class="error-message"><?php echo $errorMessage; ?></div>
                <?php endif; ?>

            </form>
        </div>
    </div>
    

    <script src="../js/script.js"></script>
</body>
</html>
