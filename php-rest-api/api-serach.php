<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include('config.php');

// $data = json_decode(file_get_contents("php://input"), true);

// $search_value = mysqli_real_escape_string($con, $data['search']);

$search_value = isset($_GET['search']) ? $_GET['search'] : die();

$sql = "SELECT * FROM students
        WHERE first_name LIKE '%$search_value%'
        OR last_name LIKE '%$search_value%'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($output);

}else{

    echo json_encode([
        'message' => 'No Search Found',
        'status'  => false
    ]);
}

?>