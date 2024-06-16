<?php
// Include the database connection file
include "connect.php";

// SQL query to create the login table
$sql = "CREATE TABLE password_reset (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL,
        )";

// Execute SQL query

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close the database connection

mysqli_close($conn);
?>
