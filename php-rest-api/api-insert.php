<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

include ('config.php');

$data = json_decode(file_get_contents("php://input"), true);

$sfname = $data['fname'];
$slname = $data['lname'];

$sql = "INSERT INTO students(first_name, last_name)VALUES('{$sfname}', '{$slname}')";


if(mysqli_query($con, $sql)){
    echo json_encode(array('message' => 'Student Records Inserted', 'status'=> true));
}else{
    echo json_encode(array('message' => 'No Student Records Inserted', 'status'=> false));
}

?>
