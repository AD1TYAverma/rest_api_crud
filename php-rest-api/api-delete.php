<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

include ('config.php');

$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['sid'];

$sql = "DELETE FROM students WHERE id ={$student_id}";


if(mysqli_query($con, $sql)){
    echo json_encode(array('message' => 'Record  Deleted', 'status'=> true));
}else{
    echo json_encode(array('message' => 'Record Not Deleted', 'status'=> false));
}

?>