<?php

$conn = new mysqli("localhost", "root", "", "expanse");

if($conn->connect_error){
    echo $conn->error;
}

?>