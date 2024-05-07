<?php

header("content-type: application/json");

include '../config_php/conn.php';

// $action = $_POST['action']




function register_expense($conn){
 
    extract($_POST);

    $data = array();

    $query = "CALL register_expense_sp('','$amount','$type','$description','USR001')";

    //EXCUTION

    $result = $conn->query($query);

    //check if there is an error or not

    if($result){
        $data = array("status" => true, "data" => "Registered Successfully");

    }else{
        $data = array("status" => false, $conn->error);

        echo json_encode($data);
    }

}


// registe_expense($conn);

if(isset($_POST['action'])){
    $action =$_POST['action'];
    $action($conn);
}else{
    echo json_encode(array("status" => false, "data" => "Action Required.."));
}
?>