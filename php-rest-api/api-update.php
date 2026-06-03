<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

include ('config.php');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];
$sfname = $data['fname'];
$slname = $data['lname'];

$sql = "UPDATE students SET first_name = '{$sfname}', last_name = '{$slname}' WHERE id = {$id}";


if(mysqli_query($con, $sql)){
    echo json_encode(array('message' => 'Student Records Updated', 'status'=> true));
}else{
    echo json_encode(array('message' => 'No Student Records Updated', 'status'=> false));
}

?>
