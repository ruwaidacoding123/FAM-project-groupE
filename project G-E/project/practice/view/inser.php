<?php
include 'conn.php';

// Include the database connection file
include "connect.php";

// Check if form data is submitted
if(isset($_POST['email']) && isset($_POST['password'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the email exists in the database
    $check_query = "SELECT * FROM login_page WHERE email='$email'";
    $result = mysqli_query($conn, $check_query);

    if(mysqli_num_rows($result) == 1) {
        // Email exists in the database, check password
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];

        // Verify password
        if(password_verify($password, $hashed_password)) {
            // Password is correct, login successful
            echo "Login successful.";
        } else {
            // Password is incorrect, display pop-up message
            echo "<script>alert('You entered a wrong email or password.');</script>";
        }
    } else {
        // Email does not exist in the database, display pop-up message
        echo "<script>alert('You entered a wrong email or password.');</script>";
    }
} else {
    echo "Error: Form data not submitted.";
}

// Close the database connection
mysqli_close($conn);

?>
