<?php
$conn =  mysqli_connect("localhost","root","","opm_project");

// if($conn == true){
//     echo "connection successfully established";
// }

// Check if connection is successful and echo message
if($conn == true){
    echo "<script>document.getElementById('message').textContent = 'Connection successfully established.';</script>";
}else{
    echo $conn->connect_error;
}





?>