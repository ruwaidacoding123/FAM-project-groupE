<?php
// Include the database connection file
include "connect.php";

// Check if form data is submitted
if(isset($_POST['email']) && isset($_POST['password'])) {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL statement to insert data into the login table
    $sql = "INSERT INTO login_page (email, password) VALUES ('$email', '$password')";

    // Check if the connection is established
    if ($conn) {
        // Execute SQL statement
        if (mysqli_query($conn, $sql)) {
            echo "Login information inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    } else {
        // echo "Error: Database connection failed.";
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // echo "Error: Form data not submitted.";
}
?>
